# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: wpersimm <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/03 06:59:26 by wpersimm          #+#    #+#              #
#    Updated: 2021/03/26 00:10:14 by wpersimm         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.12

RUN		apk update && apk upgrade

RUN		echo "http://dl-2.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories

RUN		apk add supervisor openssl vsftpd telegraf

RUN		openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/mykey.pem -out /etc/ssl/mykey2.pem -subj "/C=RF/ST=TATARSTAN/L=KAZAN/O=21S/CN=wpersimm"

RUN		printf "lolkekcheburek\nlolkekcheburek\n" | adduser wpersimm -s /bin/false -h /wpersimm

WORKDIR	/etc/telegraf

COPY	telegraf.conf .

WORKDIR	/

COPY	sc.sh .

COPY	supervisord.conf /etc/

RUN		chown wpersimm:wpersimm /wpersimm
COPY	vsftpd.conf /etc/vsftpd/vsftpd.conf

EXPOSE	21 21000

RUN		chmod +x ./sc.sh

CMD		sh sc.sh
