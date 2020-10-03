#!/bin/bash

docker build -t k8-main .
docker run -d -p 80:80 --name my-k8-main k8-main
