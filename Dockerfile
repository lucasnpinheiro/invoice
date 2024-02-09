FROM lucasnpinheiro/php-fpm:php8.2 as prod
WORKDIR /opt/www

ARG APP_STAGE
ENV APP_STAGE $APP_STAGE

RUN apk add --no-cache --update php82-fileinfo php82-iconv

COPY ./composer.* /opt/www/
RUN composer install --prefer-dist --no-dev --optimize-autoloader
COPY . /opt/www/

RUN if [ "$APP_STAGE" = "dev" ]; then \
    apk add --update --no-cache php82-pecl-pcov \
    && echo "opcache.enable=0" >> /etc/php82/conf.d/99_php.ini; \
fi

EXPOSE 8080