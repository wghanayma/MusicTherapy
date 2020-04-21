FROM polinux/httpd-php:php72
# the two line below is to make the webserver server svg images
#RUN printf "AddType image/svg+xml svg svgz\nAddEncoding gzip svg" >> /etc/httpd/conf/httpd.conf
ADD ./httpd.conf /etc/httpd/conf
RUN printf "image/svg+xml svg svgz" >> /etc/mime.type