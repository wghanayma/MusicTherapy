FROM polinux/httpd-php:php72
COPY ./php.ini /etc/php.ini
RUN yum -y install nano
ENV EDITOR=nano
RUN ln -s /etc/httpd/conf.d/php72-php.conf /etc/httpd/conf.d/php.conf
RUN mkdir -p /data/tmp/php/sessions