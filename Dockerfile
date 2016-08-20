FROM ubuntu:14.04

RUN apt-get update
#\
#  apt-get update && \
#  apt-get install -y \
#  curl

RUN apt-get install -y software-properties-common python-software-properties
#RUN apt-get install python-software-properties -y
#RUN add-apt-repository ppa:webupd8team/y-ppa-manager
#RUN apt-get update
#RUN apt-get install -y y-ppa-manager
#RUN apt-get update

RUN sudo apt-get -y install apache2

RUN sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C
RUN add-apt-repository ppa:ondrej/php

RUN \
  apt-get update && \
  apt-get install -y \
  php7.0 \
  php7.0-mysql \
  php7.0-gd \
  php7.0-curl \
  php7.0-cli \
  php7.0-intl \
  php7.0-json \
  php7.0-mcrypt \
  php7.0-common \
  php7.0-memcached

RUN mkdir -p /var/www/html/fiscalizacao_transito

CMD /usr/sbin/apache2ctl -D FOREGROUND
