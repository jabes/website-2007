#!/bin/bash

# https://github.com/scotch-io/scotch-box/issues/275
sudo rm /etc/apt/sources.list.d/ondrej-php5-5_6-trusty.list
sudo apt-get -y update

# This project is old.. and is not able to use the mysqli extension
# So downgrade to php5.6
sudo apt-get -y purge php.*
sudo apt-get -y autoremove
sudo apt-get -y install php5.6 \
                        php5.6-common \
                        php5.6-curl \
                        php5.6-json \
                        php5.6-mbstring \
                        php5.6-mcrypt \
                        php5.6-memcache \
                        php5.6-mysql \
                        libapache2-mod-php5.6 \
                        sendmail
sudo php5enmod mcrypt
sudo php5enmod memcache
sudo service apache2 restart

# Setup phpMyAdmin no interaction needed
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/dbconfig-install boolean true"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/app-password-confirm password root"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/admin-pass password root"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/app-pass password root"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2'"
sudo apt-get -q -y install phpmyadmin

# Migrate the database
mysql -uroot -proot -e "CREATE DATABASE IF NOT EXISTS cms"
mysql -uroot -proot cms < /var/www/public/sql/cms/schema.sql
mysql -uroot -proot cms < /var/www/public/sql/cms/seed.sql
