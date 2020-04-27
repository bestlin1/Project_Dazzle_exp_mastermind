#!/bin/bash

cur=`pwd`
cd $1

file_list=(`ls -SSr`)
#ls -SSr means that it arranges files in order of size:small -> big
count=0

for filename in ${file_list[@]}
do
	change_filename=`printf "%3d" $count`
	mv $filename ${change_filename}.php
	echo "$count"
	count=$(expr $count + 1)

done
cd $cur
