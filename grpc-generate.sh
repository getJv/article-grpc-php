PHP_GRPC_CLIENT_PATH=src
GENERATED_FOLDER_NAME=generated
PROTO_PATH=infra/protos
GRPC_PHP_PLUGIN=/usr/local/bin/protoc-gen-grpc


mkdir -p ${PHP_GRPC_CLIENT_PATH}/${GENERATED_FOLDER_NAME}

protoc \
  --php_out=${PHP_GRPC_CLIENT_PATH}/${GENERATED_FOLDER_NAME} \
  --grpc_out=generate_server:${PHP_GRPC_CLIENT_PATH}/${GENERATED_FOLDER_NAME} \
  --proto_path=${PWD}/${PROTO_PATH} \
  --plugin=protoc-gen-grpc=${GRPC_PHP_PLUGIN} \
  ${PWD}/${PROTO_PATH}/*.proto