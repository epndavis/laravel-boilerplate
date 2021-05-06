FROM epndavis/php-8.0-apache

COPY composer.json ./

RUN composer install \
    --no-scripts

COPY . .

CMD php artisan serve --host=0.0.0.0 --port=8000

EXPOSE 8000
