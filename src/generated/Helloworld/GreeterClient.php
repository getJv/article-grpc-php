<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Helloworld;

/**
 * The greeting service definition.
 */
class GreeterClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Sends a greeting
     * @param \Helloworld\HelloRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SayHello(\Helloworld\HelloRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/helloworld.Greeter/SayHello',
        $argument,
        ['\Helloworld\HelloReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Sends a stream of greetings from server to client
     * @param \Helloworld\HelloRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function StreamGreetings(\Helloworld\HelloRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/helloworld.Greeter/StreamGreetings',
        $argument,
        ['\Helloworld\HelloReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Sends a stream of greetings from client to server
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function EchoGreetings($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/helloworld.Greeter/EchoGreetings',
        ['\Helloworld\HelloReply','decode'],
        $metadata, $options);
    }

    /**
     * Sends a stream of greetings from client to server
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function OpenGreetings($metadata = [], $options = []) {
        return $this->_bidiRequest('/helloworld.Greeter/OpenGreetings',
        ['\Helloworld\HelloReply','decode'],
        $metadata, $options);
    }

}
