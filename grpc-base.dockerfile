# docker build  -f ./grpc-base.dockerfile -t getjv/grpc-php-base .
FROM composer:2.8.5 AS composer

FROM php:8.3-alpine AS grpc-php-base

RUN apk --no-cache add \
  git \
  autoconf \
  automake \
  make \
  cmake \
  curl \
  libtool \
  unzip \
  libzip-dev \
  gcc \
  g++ \
  pkgconfig \
  linux-headers

WORKDIR /github/grpc


RUN git clone --depth 1 https://github.com/grpc/grpc . && \
  git submodule update --init --recursive

ARG MAKEFLAGS=-j8

WORKDIR /github/grpc/cmake/build

RUN cmake ../.. && \
  make protoc grpc_php_plugin

RUN pecl install grpc

FROM php:8.3-fpm-alpine

RUN apk --no-cache --update --virtual add  g++ grpc

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY --from=grpc-php-base /github/grpc/cmake/build/third_party/protobuf/protoc \
  /usr/local/bin/protoc

COPY --from=grpc-php-base /github/grpc/cmake/build/grpc_php_plugin \
  /usr/local/bin/protoc-gen-grpc

COPY --from=grpc-php-base \
  /usr/local/lib/php/extensions/no-debug-non-zts-20230831/grpc.so \
  /usr/local/lib/php/extensions/no-debug-non-zts-20230831/grpc.so

RUN docker-php-ext-enable grpc

CMD ["php-fpm"]









