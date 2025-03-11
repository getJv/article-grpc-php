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
    // Start the stream for the OpenGreetings method
    $stream = $client->OpenGreetings();

    // Example array of messages
    $names = ['Alice', 'Bob', 'Charlie'];

    // Read server responses in parallel while sending client messages
    foreach ($names as $name) {
        echo "Sending: $name\n";

        // Create and configure the request
        $request = new HelloRequest();
        $request->setName($name);

        // Send the message to the server
        $stream->write($request);

        // Optional: Read a response while sending messages
        $response = $stream->read();
        if ($response) {
            echo "Server response: " . $response->getMessage() . PHP_EOL;
        }
    }

    // Finalize the stream (no more messages will be sent)
    $stream->writesDone();

    // Read any remaining responses from the server
    while ($response = $stream->read()) {
        echo "Additional server response: " . $response->getMessage() . PHP_EOL;
    }
} catch (Exception $e) {
    // Handle gRPC or connection errors
    echo "Error: " . $e->getMessage() . PHP_EOL;
}

