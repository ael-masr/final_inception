#!/usr/bin/env bash

echo >> /etc/mysql/my.cnf
echo "[mysqld]" >> /etc/mysql/my.cnf
echo "bind-address=0.0.0.0" >> /etc/mysql/my.cnf

mysql_install_db --datadir=/var/lib/mysql

mysqld_safe &
mysql_pid=$!

until mysqladmin ping >/dev/null 2>&1; do
  echo -n "."; sleep 0.2
done

mysql -u root -e "CREATE DATABASE $MYSQL_DATABASE;
    ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';
    GRANT ALL ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';
    FLUSH PRIVILEGES;"

wait $mysql_pid


