# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: wpersimm <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/03 06:59:26 by wpersimm          #+#    #+#              #
#    Updated: 2021/03/29 22:57:58 by wpersimm         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.12

RUN		apk update && apk upgrade

RUN		apk add curl

RUN		echo "http://dl-2.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories

RUN		apk add libc6-compat telegraf grafana

WORKDIR	etc/telegraf

COPY	telegraf.conf .

WORKDIR	/

COPY	sc.sh .

WORKDIR	/usr/share/grafana/data/

COPY	grafana.db .

WORKDIR	/

EXPOSE	3000

RUN		chmod +x ./sc.sh

CMD		sh sc.sh
