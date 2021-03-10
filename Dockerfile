FROM centos:latest
MAINTAINER leandro
RUN yum -y install httpd
RUN yum -y install php
CMD /usr/sbin/httpd -D FOREGROUND
WORKDIR /var/www/html
COPY index.php /var/www/html
EXPOSE 80
