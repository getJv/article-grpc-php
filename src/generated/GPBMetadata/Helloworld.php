<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: helloworld.proto

namespace GPBMetadata;

class Helloworld
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xA3\x03\x0A\x10helloworld.proto\x12\x0Ahelloworld\"\x1C\x0A\x0CHelloRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x1D\x0A\x0AHelloReply\x12\x0F\x0A\x07message\x18\x01 \x01(\x092\xA2\x02\x0A\x07Greeter\x12>\x0A\x08SayHello\x12\x18.helloworld.HelloRequest\x1A\x16.helloworld.HelloReply\"\x00\x12G\x0A\x0FStreamGreetings\x12\x18.helloworld.HelloRequest\x1A\x16.helloworld.HelloReply\"\x000\x01\x12E\x0A\x0DEchoGreetings\x12\x18.helloworld.HelloRequest\x1A\x16.helloworld.HelloReply\"\x00(\x01\x12G\x0A\x0DOpenGreetings\x12\x18.helloworld.HelloRequest\x1A\x16.helloworld.HelloReply\"\x00(\x010\x01B\x19Z\x17getjv.github.com/protosb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

