#!/bin/bash
minikube start --vm-driver=virtualbox --disk-size="10000mb" --memory="4000mb"

eval $(minikube docker-env)

minikube addons enable metallb

kubectl delete -f ./srcs/nginx/nginx.yaml
kubectl delete -f ./srcs/wp/wp.yaml
kubectl delete -f ./srcs/phpmyadmin/php.yaml
kubectl delete -f ./srcs/sql/sql.yaml
kubectl delete -f ./srcs/ftps/ftps.yaml
kubectl delete -f ./srcs/influx/influx.yaml
kubectl delete -f ./srcs/grafana/grafana.yaml

kubectl delete svc nginx-serv
kubectl delete svc wp-serv
kubectl delete svc php-serv
kubectl delete svc sql-serv
kubectl delete svc ftps-serv
kubectl delete svc influxdb-serv
kubectl delete svc grafana-serv

kubectl delete deploy nginx-depl
kubectl delete deploy wp-depl
kubectl delete deploy php-depl
kubectl delete deploy sql-depl
kubectl delete deploy ftps-depl
kubectl delete deploy influxdb-depl
kubectl delete deploy grafana-depl

docker build -t nginx_image ./srcs/nginx

docker build -t wp_image ./srcs/wp

docker build -t php_image ./srcs/phpmyadmin

docker build -t sql_image ./srcs/sql

docker build -t ftps_image ./srcs/ftps

docker build -t influxdb_image ./srcs/influx

docker build -t grafana_image ./srcs/grafana


kubectl apply -f ./srcs/configmap.yaml

kubectl apply -f ./srcs/nginx/nginx.yaml

kubectl apply -f ./srcs/wp/wp.yaml

kubectl apply -f ./srcs/phpmyadmin/php.yaml

kubectl apply -f ./srcs/sql/sql.yaml

kubectl apply -f ./srcs/ftps/ftps.yaml

kubectl apply -f ./srcs/influx/influx.yaml

kubectl apply -f ./srcs/grafana/grafana.yaml



kubectl get pods
kubectl get svc
