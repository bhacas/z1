FROM php:7.4-fpm

RUN docker-php-ext-install pdo_mysql

RUN pecl install apcu

RUN apt-get update && \
apt-get install -y \
    libzip-dev \
    curl \
    git \
    vim \
    libpq-dev \
    libxrender1 \
    libfontconfig1 \
    libx11-dev \
    libjpeg62 \
    libxtst6 \
    xvfb \
    libfontconfig \
    wkhtmltopdf \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.0.8

RUN useradd -m docker && echo "docker:docker" | chpasswd && adduser docker sudo

RUN curl -sL https://deb.nodesource.com/setup_14.x -o nodesource_setup.sh
RUN bash nodesource_setup.sh
RUN apt-get install nodejs -y
RUN npm install npm@6 -g
RUN npm install vue vue-loader@^15 vue-template-compiler --save-dev
RUN npm install vue-material --save
RUN npm install -g yarn

RUN docker-php-ext-install zip
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo_pgsql pgsql
RUN docker-php-ext-enable apcu

RUN apt-get -y update \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

RUN pecl install xdebug-2.9.8 \
    && docker-php-ext-enable xdebug

WORKDIR /usr/src/app

#RUN if [[ -z "$uid" &&  -z "$gid"]] ; then usermod -u $uid www-data ; fi
#
#RUN chmod 770 -R /usr/src/app
#RUN chown www-data:www-data -R /usr/src/app

RUN PATH=$PATH:/usr/src/app/vendor/bin:bin
