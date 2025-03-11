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
    // start EchoGreetings
    $stream = $client->EchoGreetings();

    // Define names to send the requests
    $names = ['Alice', 'Bob', 'Charlie'];

    foreach ($names as $name) {
        // Prepare the request message
        $request = new HelloRequest();
        $request->setName($name);

        // Sent to the server
        $stream->write($request);
    }


    // Wait for the server confirmation
    $response = $stream->wait();

    if ($response[0] !== null) {
        /** @var \Helloworld\HelloReply $reply */
        $reply = $response[0];
        echo "Server reply: " . $reply->getMessage() . PHP_EOL;
    } else {
        echo "reply with error: " . $response[1]->details . PHP_EOL;
    }
} catch (Exception $e) {
    // Print eny error
    echo "Erro: " . $e->getMessage() . PHP_EOL;
}

