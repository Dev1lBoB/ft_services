# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: wpersimm <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/03 06:59:26 by wpersimm          #+#    #+#              #
#    Updated: 2021/03/26 00:13:16 by wpersimm         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.12

RUN		apk update && apk upgrade

RUN		echo "http://dl-2.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories

RUN		apk add nginx
RUN		apk add curl

RUN		apk add supervisor mariadb mariadb-client openrc telegraf

WORKDIR	/etc/telegraf

COPY	telegraf.conf .

WORKDIR	/

COPY	sc.sh .

COPY	basa .

COPY	moi_site.sql .

COPY	supervisord.conf /etc/

COPY	my.cnf	/etc/

RUN 	mkdir -p /run/nginx

EXPOSE	3306

VOLUME	["/var/lib/mysql"]

RUN		chmod +x ./sc.sh

CMD		sh sc.sh
