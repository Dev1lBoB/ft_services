# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: wpersimm <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/03 06:59:26 by wpersimm          #+#    #+#              #
#    Updated: 2021/03/26 01:04:37 by wpersimm         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.12

RUN		apk update && apk upgrade

RUN		echo "http://dl-2.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories

RUN		apk add nginx
RUN		apk add telegraf supervisor
RUN		apk add openssl openssh libc6-compat

WORKDIR	/etc/telegraf

COPY	telegraf.conf .

WORKDIR	/

COPY	sc.sh .

COPY	supervisord.conf /etc/

COPY	nginx.conf ./etc/nginx/conf.d/default.conf

EXPOSE	80 443 22

RUN		openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/arbidol.key -out /etc/ssl/arbidol.crt -subj "/C=RF/ST=TATARSTAN/L=KAZAN/O=21S/CN=WPERSIMM"

RUN mkdir -p /run/nginx

CMD		sh sc.sh
