FROM php:8.0.3-fpm
RUN pecl install apcu-5.1.20 \
    && docker-php-ext-enable apcu \
    # && echo 'extension="apcu.so"' > "$PHP_INI_DIR/php.ini" \
    && cat "$PHP_INI_DIR/php.ini-production" >> "$PHP_INI_DIR/php.ini"

