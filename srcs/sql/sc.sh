#!/bin/sh
rc default
/etc/init.d/mariadb setup
rc-service mariadb start
mysql -u root mysql < basa
mysql -u root moi_site < moi_site.sql
rc-service mariadb stop
/usr/bin/supervisord -c /etc/supervisord.conf
