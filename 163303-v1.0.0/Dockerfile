FROM php:5.6-fpm
LABEL maintainer="SAMATE, NIST"
WORKDIR /sard
RUN apt-get update && apt-get install -y --no-install-recommends make
RUN docker-php-ext-install mysql pdo pdo_mysql
COPY . .
CMD ["/bin/bash"]
