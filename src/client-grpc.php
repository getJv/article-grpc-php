<?php


use Grpc\ChannelCredentials;
use Helloworld\GreeterClient;
use Helloworld\HelloRequest;

require __DIR__ . '/../vendor/autoload.php';

// Client gRPC (for windows and mac use: host.docker.internal:50051)
$client = new GreeterClient('172.17.0.1:50051', [
    'credentials' => ChannelCredentials::createInsecure(),
]);

$helloRequest = new HelloRequest();
$helloRequest->setName("Jhonatan");


// Unary call sample
list($reply, $status) = $client->SayHello($helloRequest)->wait();

if ($status->code === Grpc\STATUS_OK) {
    echo "Server answer: " . $reply->getMessage() . PHP_EOL;
} else {
    echo "Erro: gRPC failure status " . $status->code . " - " . $status->details . PHP_EOL;
}