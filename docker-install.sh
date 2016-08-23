#!/bin/bash

cp .env.docker.dist .env
docker-compose build
docker-compose up -d
composer install --prefer-dist --optimize-autoloader
docker-compose run cli console/yii app/setup --interactive=0
