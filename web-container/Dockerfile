FROM alpine:latest

RUN apk --update add \
    nginx \
    php7-fpm \
	php7-json \
	php7-openssl \
	php7-mysqli \
	php7-mcrypt \
	php7-ctype \
	php7-zlib \
	php7-redis \
	supervisor

RUN adduser -D -g 'www' www && \
    mkdir /www && \
    chown -R www:www /www

RUN mkdir -p /etc/nginx
RUN mkdir -p /var/run/php-fpm
RUN mkdir -p /run/nginx
RUN mkdir -p /var/log/supervisor
RUN rm /etc/nginx/nginx.conf

COPY default /etc/nginx/sites-enabled/default

ADD nginx.conf /etc/nginx/nginx.conf
ADD nginx-supervisor.ini /etc/supervisor.d/nginx.ini

EXPOSE 80

CMD ["/usr/bin/supervisord"]