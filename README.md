# Basic example of using GRPC with PHP

This project was used as a reference to write the article [How to start using grpc with PHP][1]
it is self-conteined and docker based project it offers:
1. A docker image to compile the `grpc_php_plugin` and `protoc-29.0.0` from php 8.3
2. A sh file to generate the static code
3. A valid example of using each of [grpc services from server][2] 

## How to use this project

1. After cloning the repo, go to root project folder and execute to:
```bash
docker compose up -d
```
2. That will automatically pull the images from docker hub and set your containers up. 
3. [optional] in case of error in step 2 you can clone the [grpc services from the repo][2] and 
   locally build the grpc base with following command. after build both try step 2 again:
```bash
docker build  -f ./grpc-base.dockerfile -t getjv/grpc-php-base .
```
4. Now go inside the php container:
```bash
docker exec -it php sh
```
5. Once inside the container you can use the `grpc-generate.sh` to build the static files:
```bash
sh grpc-generate.sh
```
6. And finally, execute the php clients examples:
```bash
php src/client-grpc.php #output: Unary call, Server answer: Hello Jhonatan 
```
```bash
php src/server-stream-grpc.php #output: server stream server answer 10 messages 
```
```bash
php src/client-stream-grpc.php #output: client streaming server answer after all requests 
```
```bash
php src/open-stream-grpc.php #output: bi-diretional streamingm server answer after each requests   
```


[1]: https://dev.to/getjv/how-to-start-using-grpc-with-php-part-14-29i4
[2]: https://github.com/getJv/go-grpc-server/tree/main

