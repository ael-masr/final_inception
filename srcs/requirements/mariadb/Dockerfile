FROM debian:bullseye

USER root

RUN apt update && apt install -y \
    mariadb-server \
    mariadb-client

COPY 50-server.cnf  /etc/mysql/mariadb.conf.d/
COPY ./conf/script.sh /usr/local/bin/
RUN chmod 777 /usr/local/bin/script.sh
RUN chown -R mysql:mysql /var/lib/mysql
RUN /usr/local/bin/script.sh

CMD [ "mysqld" ]

