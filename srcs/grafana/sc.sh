#!/bin/sh
telegraf &
grafana-server -homepath /usr/share/grafana -config /etc/grafana.ini
