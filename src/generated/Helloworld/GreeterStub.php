<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Helloworld;

/**
 * The greeting service definition.
 */
class GreeterStub {

    /**
     * Sends a greeting
     * @param \Helloworld\HelloRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Helloworld\HelloReply for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SayHello(
        \Helloworld\HelloRequest $request,
        \Grpc\ServerContext $context
    ): ?\Helloworld\HelloReply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Sends a stream of greetings from server to client
     * @param \Helloworld\HelloRequest $request client request
     * @param \Grpc\ServerCallWriter $writer write response data of \Helloworld\HelloReply
     * @param \Grpc\ServerContext $context server request context
     * @return void
     */
    public function StreamGreetings(
        \Helloworld\HelloRequest $request,
        \Grpc\ServerCallWriter $writer,
        \Grpc\ServerContext $context
    ): void {
        $context->setStatus(\Grpc\Status::unimplemented());
        $writer->finish();
    }

    /**
     * Sends a stream of greetings from client to server
     * @param \Grpc\ServerCallReader $reader read client request data of \Helloworld\HelloRequest
     * @param \Grpc\ServerContext $context server request context
     * @return \Helloworld\HelloReply for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function EchoGreetings(
        \Grpc\ServerCallReader $reader,
        \Grpc\ServerContext $context
    ): ?\Helloworld\HelloReply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Sends a stream of greetings from client to server
     * @param \Grpc\ServerCallReader $reader read client request data of \Helloworld\HelloRequest
     * @param \Grpc\ServerCallWriter $writer write response data of \Helloworld\HelloReply
     * @param \Grpc\ServerContext $context server request context
     * @return void
     */
    public function OpenGreetings(
        \Grpc\ServerCallReader $reader,
        \Grpc\ServerCallWriter $writer,
        \Grpc\ServerContext $context
    ): void {
        $context->setStatus(\Grpc\Status::unimplemented());
        $writer->finish();
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/helloworld.Greeter/SayHello' => new \Grpc\MethodDescriptor(
                $this,
                'SayHello',
                '\Helloworld\HelloRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/helloworld.Greeter/StreamGreetings' => new \Grpc\MethodDescriptor(
                $this,
                'StreamGreetings',
                '\Helloworld\HelloRequest',
                \Grpc\MethodDescriptor::SERVER_STREAMING_CALL
            ),
            '/helloworld.Greeter/EchoGreetings' => new \Grpc\MethodDescriptor(
                $this,
                'EchoGreetings',
                '\Helloworld\HelloRequest',
                \Grpc\MethodDescriptor::CLIENT_STREAMING_CALL
            ),
            '/helloworld.Greeter/OpenGreetings' => new \Grpc\MethodDescriptor(
                $this,
                'OpenGreetings',
                '\Helloworld\HelloRequest',
                \Grpc\MethodDescriptor::BIDI_STREAMING_CALL
            ),
        ];
    }

}
