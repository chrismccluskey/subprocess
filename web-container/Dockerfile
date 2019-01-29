FROM alpine:latest

RUN apk --update add \
    nginx \
    php7-cli \
    php7-dom \
    php7-xml \
    php7-xmlwriter \
    php7-tokenizer \
    php7-iconv \
    php7-phar \
    php7-mbstring \
    php7-fpm \
    php7-json \
    php7-openssl \
    php7-mysqli \
    php7-mcrypt \
    php7-ctype \
    php7-zlib \
    php7-redis \
    supervisor

RUN mkdir -p /var/log/sp
RUN sed -i 's/nobody/www/' /etc/php7/php-fpm.d/www.conf
RUN sed -i 's/display_errors = Off/display_errors = On/' /etc/php7/php.ini

RUN adduser -D -g 'www' www && \
    mkdir /www && \
    chown -R www:www /www && \
    chown -R www:www /var/log/sp

RUN mkdir -p /etc/nginx
RUN mkdir -p /var/run/php-fpm
RUN mkdir -p /run/nginx
RUN mkdir -p /var/log/supervisor
RUN rm /etc/nginx/nginx.conf

COPY default /etc/nginx/sites-enabled/default
COPY init.sh /tmp/init.sh

RUN chmod +x /tmp/init.sh && /tmp/init.sh

ADD nginx.conf /etc/nginx/nginx.conf
ADD nginx-supervisor.ini /etc/supervisor.d/nginx.ini

EXPOSE 80

CMD ["/usr/bin/supervisord"]