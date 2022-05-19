#!/usr/bin/env bash

./stop.sh

sudo docker-compose -f docker-compose.yml -p l7 up -d

sudo docker ps