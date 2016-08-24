#!/bin/sh -e
#
# install mongodb

# MongoDB Server :

echo "MongoDB Server version:"
mongod --version

# PHP Extension :
if (php --version | grep -i 7.0 > /dev/null); then
  echo "extension = mongodb.so" >> ~/.phpenv/versions/$(phpenv version-name)/etc/php.ini
else
  echo "extension = mongo.so" >> ~/.phpenv/versions/$(phpenv version-name)/etc/php.ini
fi
