#!/bin/bash

#This Script runs commmand to Create, Add and Commit to Git repository

#remember no space
# to see list of already exiting alias run command ->$ alias

#you can create your own command using ->$ alias script="bash scrpt.sh"
#to remove alias run command ->$ unalias script

#notice no space netween path and pwd

sudo systemctl stop apache2

sudo service mysql stop

sudo /opt/lampp/lampp start


