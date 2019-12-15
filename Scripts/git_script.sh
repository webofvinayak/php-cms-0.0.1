#!/bin/bash

#This Script runs commmand to Create, Add and Commit to Git repository

#remember no space
# to see list of already exiting alias run command ->$ alias

#you can create your own command using ->$ alias script="bash scrpt.sh"
#to remove alias run command ->$ unalias script

#notice no space netween path and pwd

path=$(pwd)

#if [ ! -d .git ]; then
#        echo -e " git not exist \n\n.. "
#        echo "Creating git Repository in path: $path"
#        git init
#fi


sudo git add .

echo -e "\n"
echo -n "please add commit message-->"


read varName

sudo git commit -m "$varName"

sudo git push -u origin master

