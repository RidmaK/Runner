FROM mysql:5.7

LABEL MAINTAINER="Ridma Kancahana"

ENV MYSQL_ROOT_PASSWORD root

COPY devdb.cnf /etc/mysql/conf.d/

RUN mkdir -p /var/log/mysql && \
    chmod 777 /var/log/mysql && \
    touch /var/log/mysql/mysql.err && \
    touch /var/log/mysql/mysql.queries && \
    chmod 666 /var/log/mysql/mysql.err && \
    chmod 666 /var/log/mysql/mysql.queries

RUN apt-get update && apt-get install -y less

# ENV TZ=Australia/Sydney
# RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
