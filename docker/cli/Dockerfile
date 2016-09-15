FROM php:7-cli
MAINTAINER Eugene Terentev <eugene@terentev.net>

RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get --yes install \
        git \
        openssl \
        curl \
        wget \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libicu-dev

RUN docker-php-ext-install zip mcrypt intl mbstring pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd

RUN curl -sL https://deb.nodesource.com/setup_6.x | bash -

RUN DEBIAN_FRONTEND=noninteractive apt-get --yes install \
        nodejs \
        build-essential

RUN curl -sL https://www.npmjs.org/install.sh | bash -

RUN apt-get autoremove -y \
        && rm -r /var/lib/apt/lists/*

RUN npm install -g uglifyjs yuicompressor

COPY . /app
RUN chown www-data:www-data -R /app
USER www-data
