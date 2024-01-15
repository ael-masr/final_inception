FROM debian:bullseye

RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y \
    curl \
    vim    \
    less \
    php \
    php-fpm \
    php-mysql \
    php-mysqli \
    mariadb-client

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

EXPOSE 9000

COPY script.sh /tmp
COPY conf/www.conf /etc/php/7.4/fpm/pool.d/www.conf
COPY ./conf/index.php    /var/www/html/wordpress/index.php
RUN chmod 777 /tmp/script.sh



CMD ["/tmp/script.sh"]




