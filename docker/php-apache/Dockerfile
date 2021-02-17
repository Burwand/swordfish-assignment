FROM php:7.2-apache

RUN apt-get update

# 2. apache configs + document root
COPY apache.conf /etc/apache2/sites-enabled/apache.conf

COPY cert /etc/cert

# 3. mod_rewrite for URL rewrite and mod_headers for .htaccess extra headers like Access-Control-Allow-Origin-
RUN a2enmod rewrite headers

# 4. start with base php config, then add extensions
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN ln -s /etc/apache2/mods-available/ssl.load  /etc/apache2/mods-enabled/ssl.load

## 5. composer
#COPY --from=composer:latest /usr/bin/composer /usr/bin/composer