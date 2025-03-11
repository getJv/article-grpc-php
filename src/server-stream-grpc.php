<?php


use Grpc\ChannelCredentials;
use Helloworld\GreeterClient;
use Helloworld\HelloRequest;

require __DIR__ . '/../vendor/autoload.php';

// Client gRPC (for windows and mac use: host.docker.internal:50051)
$client = new GreeterClient('172.17.0.1:50051', [
    'credentials' => ChannelCredentials::createInsecure(),
]);

try {
    // set message (HelloRequest)
    $request = new HelloRequest();
    $request->setName('Jhonatan');

    // Call `StreamGreetings`
    $stream = $client->StreamGreetings($request);

    // Iterate each response
    foreach ($stream->responses() as $response) {
        /** @var \Helloworld\HelloReply $response */
        echo "server response: " . $response->getMessage() . PHP_EOL;
    }
} catch (Exception $e) {
    // Print any error
    echo "Erro: " . $e->getMessage() . PHP_EOL;
}
