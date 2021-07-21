# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: wpersimm <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/03 06:59:26 by wpersimm          #+#    #+#              #
#    Updated: 2021/03/21 04:22:25 by wpersimm         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.12

RUN		apk update && apk upgrade

RUN		echo "http://dl-2.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories

RUN		apk add nginx
RUN		apk add curl

RUN		apk add supervisor php-fpm openrc php7 php7-fpm telegraf

RUN		apk add lighttpd php7-common php7-session php7-iconv php7-json php7-gd php7-curl php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo php7-pdo_mysql php7-soap php7-xmlrpc php7-posix php7-mcrypt php7-gettext php7-ldap php7-ctype php7-dom

WORKDIR	/etc/telegraf

COPY	telegraf.conf .

WORKDIR	/var/www/

RUN		curl -O https://ru.wordpress.org/latest-ru_RU.tar.gz
RUN		tar vfx latest-ru_RU.tar.gz
RUN		rm -rf latest-ru_RU.tar.gz

WORKDIR	/

COPY	sc.sh .

COPY	supervisord.conf /etc/

COPY	nginx.conf ./etc/nginx/conf.d/default.conf

COPY	wp-config.php ./var/www/wordpress

EXPOSE	5050

RUN		mkdir -p /run/nginx

RUN		chmod +x ./sc.sh

CMD		sh sc.sh
