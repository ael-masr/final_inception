#!/bin/bash
cd /var/www/html/wordpress

wp core download  --path="/var/www/html/wordpress" --allow-root

wp config create --path="/var/www/html/wordpress" --allow-root \
    --dbname=$MYSQL_DATABASE \
    --dbuser=$MYSQL_USER \
    --dbpass=$MYSQL_PASSWORD \
    --dbhost=mariadb \
    --dbcharset="utf8" \
    --dbprefix=wp_

wp core install     --path="/var/www/html/wordpress" --allow-root \
                    --title="INCEPTION" \
                    --url=$DOMAIN_NAME \
                    --title="INCEPTION" \
                    --admin_user=$WP_ADMIN_USER \
                    --admin_password=$WP_ADMIN_PASSWORD \
                    --admin_email=$WP_ADMIN_EMAIL
# wp option home value
# wp option 
wp user create      --path="/var/www/html/wordpress" --allow-root \
                    $WP_USER $WP_EMAIL \
                    --user_pass=$WP_USER_PASS \
                    --role=author

mkdir -p /run/php/
php-fpm7.4 -F
