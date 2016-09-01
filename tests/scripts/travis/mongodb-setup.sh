#!/bin/sh -e

echo $(phpenv version-name)

# PHP MongoDB Extension
echo "extension = mongodb.so" >> ~/.phpenv/versions/$(phpenv version-name)/etc/php.ini
echo "MongoDB PHP Extension version:"
php -i |grep mongodb -4 |grep -2 version
