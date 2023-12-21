FROM php:7.4-fpm
LABEL maintainer="SAMATE, NIST"
WORKDIR /sard
RUN apt-get update && apt-get install -y --no-install-recommends make libldap2-dev
RUN docker-php-ext-install ldap
COPY . .
CMD ["/bin/bash"]
