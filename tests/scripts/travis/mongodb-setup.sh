#!/bin/sh -e

echo $(phpenv version-name)

# PHP Extension :
if [ $(phpenv version-name) = "7.0" ]; then
  echo "extension = mongodb.so" >> ~/.phpenv/versions/$(phpenv version-name)/etc/php.ini
else
  pecl install -f mongodb
  echo "extension = mongodb.so" >> ~/.phpenv/versions/$(phpenv version-name)/etc/php.ini
  echo "MongoDB PHP Extension version:"
  php -i |grep mongodb -4 |grep -2 version
fi
