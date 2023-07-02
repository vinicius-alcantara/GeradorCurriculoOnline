FROM ubuntu:latest

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && \
    apt-get install locales \
    software-properties-common \
    language-pack-en-base -y && \
    locale-gen en_US.UTF-8 && \
    export LANG=en_US.UTF-8 && \
    LC_ALL=en_US.UTF-8 add-apt-repository -y ppa:ondrej/php && \
    apt-get update -y && \
    apt-get install -y php7.4 libapache2-mod-php7.4 \
    php7.4-mysql php7.4-zip php7.4-gd php7.4-mbstring \
    php7.4-curl php7.4-xml php7.4-bcmath && \
    cd /var/www/html && rm -rf index.html

ENV APACHE_RUN_USER=www-data
ENV APACHE_RUN_GROUP=www-data
ENV APACHE_LOG_DIR=/var/log/apache2
ENV APACHE_PID_FILE=/var/run/apache2.pid
ENV APACHE_RUN_DIR=/var/run/apache2
ENV APACHE_LOCK_DIR=/var/lock/apache2

RUN mkdir -p $APACHE_RUN_DIR $APACHE_LOCK_DIR $APACHE_LOG_DIR

WORKDIR /var/www/html

COPY . .

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
