# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: wpersimm <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/03 06:59:26 by wpersimm          #+#    #+#              #
#    Updated: 2021/03/26 00:01:06 by wpersimm         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.12

RUN		apk update && apk upgrade

RUN		echo "http://dl-2.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories

RUN		apk add nginx
RUN		apk add curl

RUN		apk add supervisor php7 php7-fpm libc6-compat openssl telegraf
RUN     apk add php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session

WORKDIR /etc/telegraf

COPY	telegraf.conf .

WORKDIR /var/www/

RUN		curl -O https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz && tar vfx phpMyAdmin-4.9.7-all-languages.tar.gz && rm -rf phpMyAdmin-4.9.7-all-languages.tar.gz

WORKDIR /

COPY	sc.sh .

COPY	supervisord.conf /etc/

COPY	nginx.conf ./etc/nginx/conf.d/default.conf

COPY	config.inc.php ./var/www/phpMyAdmin-4.9.7-all-languages

EXPOSE	5000

RUN openssl req -newkey rsa:2048 -nodes -keyout /etc/nginx/domain.key -x509 -days 365 -out /etc/nginx/domain.crt -subj "/C=RU/ST=TATARSTAN/L=KAZAN/O=school21/CN=wpersimm"

RUN 	mkdir -p /run/nginx

RUN		chmod +x ./sc.sh

CMD		sh sc.sh
