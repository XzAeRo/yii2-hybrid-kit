FROM composer/composer

ENV COMPOSER_HOME /root/.composer
ENV PATH /root/.composer/vendor/bin:$PATH
RUN composer global require "fxp/composer-asset-plugin"
USER www-data
