#!/bin/sh -e

echo $(phpenv version-name)

# PHP Extension :
if [ $(phpenv version-name) = "7.0" ]; then
  echo "extension = mongodb.so" >> ~/.phpenv/versions/$(phpenv version-name)/etc/php.ini
else
  echo "extension = mongo.so" >> ~/.phpenv/versions/$(phpenv version-name)/etc/php.ini
fi
