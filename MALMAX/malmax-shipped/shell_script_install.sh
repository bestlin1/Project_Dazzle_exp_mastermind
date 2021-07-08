#!/bin/bash

##############
## PHP 7.2 
##############
sudo apt-get update
sudo apt-get install php
#sudo apt-get install libapache2-mod-php7.0
sudo apt-get install php-mbstring php-gd php-curl php-xml php-mysql


##############
## php-Emul 
##############
git clone https://github.com/abiusx/php-emul
cd php-emul
git submodule init
git submodule update
cd ..


##############
## phpx 
##############
mv phpx phpx_temp
git clone https://github.com/abiusx/phpx
cd phpx
make clean
phpize clean
./configure
make
sudo make install
cd ..


