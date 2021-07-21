# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: wpersimm <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/03 06:59:26 by wpersimm          #+#    #+#              #
#    Updated: 2021/03/26 00:17:02 by wpersimm         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.12

RUN		apk update && apk upgrade

RUN		echo "http://dl-2.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories

RUN		apk add supervisor influxdb mariadb mariadb-client libc6-compat openrc telegraf

WORKDIR	/etc/telegraf

COPY	telegraf.conf .

WORKDIR	/

COPY	sc.sh .

COPY	supervisord.conf /etc/

COPY	influxdb.conf /etc/

EXPOSE	8086

RUN		chmod +x ./sc.sh

CMD		sh sc.sh
