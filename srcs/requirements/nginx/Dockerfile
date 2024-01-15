FROM debian:bullseye

# Update the package repository and install required packages
RUN apt-get update && \
    apt-get install -y nginx openssl

# Copy default web page configuration
COPY ./conf/default /etc/nginx/sites-available/default

# Generate SSL certificate and configure NGINX
RUN openssl req \
        -x509 \
        -nodes \
        -days 365 \
        -newkey rsa:2048 \
        -keyout /etc/ssl/private/nginx-selfsigned.key \
        -out /etc/ssl/certs/nginx-selfsigned.crt \
        -subj '/C=FR/ST=Ile-de-France/L=Paris/O=42/OU=42Paris/CN=ael-masr/UID=TTT' && \
    echo "ssl_certificate /etc/ssl/certs/nginx-selfsigned.crt;\nssl_certificate_key /etc/ssl/private/nginx-selfsigned.key;" > /etc/nginx/snippets/self-signed.conf && \
    openssl dhparam -out /etc/nginx/dhparam.pem 2048

# Copy SSL params configuration
COPY ./conf/ssl-params.conf /etc/nginx/snippets/

# Set NGINX as the entrypoint
ENTRYPOINT ["nginx", "-g", "daemon off;"]
