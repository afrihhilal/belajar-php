FROM php:7.3.14-apache

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN yes | pecl install xdebug-2.9.6 \
	&& docker-php-ext-enable xdebug
	
COPY . /var/www/html/
EXPOSE 80
