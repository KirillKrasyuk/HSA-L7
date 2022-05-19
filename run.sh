#!/usr/bin/env bash

sudo docker-compose build --no-cache --force-rm

sudo docker-compose -f docker-compose.yml -p l7 up -d

sudo docker ps