FROM lucasnpinheiro/php-fpm:php8.2 as prod
WORKDIR /opt/www

ARG APP_STAGE
ENV APP_STAGE $APP_STAGE

ARG COMPOSER_AUTH
ENV COMPOSER_AUTH $COMPOSER_AUTH

RUN apk add --no-cache --update php82-fileinfo php82-iconv

COPY ./composer.* /opt/www/
RUN composer install --prefer-dist --no-dev --optimize-autoloader
COPY . /opt/www/

EXPOSE 8080