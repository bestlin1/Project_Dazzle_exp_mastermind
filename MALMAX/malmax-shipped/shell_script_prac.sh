#!/bin/bash

############
## encoders
############

#for ((c=1; c<=4; c++))
#	do 
#		php main.php -f samples/encoders/$c.php
#		mv output.txt output_encoders_$c.txt
#		mv stats.txt stats_encoders_$c.txt
#
#	done

############
## malware
############

#for ((c=1; c<=53; c++))
#	do 
#		php main.php -f samples/malware/$c.php
#		mv output.txt output_malware_$c.txt
#		mv stats.txt stats_malware_$c.txt
#
#	done


############
## synthetic
############

for ((c=1; c<=5; c++))
	do 
		php main.php -f samples/synthetic/malicious$c.php
		mv output.txt output_synthetic_malicious$c.txt
		mv stats.txt stats_synthetic_malicious$c.txt

	done


############
## obfuscated
############

#folder_num=11

#for ((c=1; c<=1; c++))
#	do 
#		php main.php -f samples/obfuscated/$folder_num/$c.php
#		mv output.txt output_obfuscated_$folder_num-$c.txt
#		mv stats.txt stats_obfuscated_$folder_num-$c.txt
#
#	done

#for ((c=1; c<=5; c++))
#	do 
#		php main.php -f samples/obfuscated/$folder_num/benign$c.php
#		mv output.txt output_obfuscated_$folder_num-benign_$c.txt
#		mv stats.txt stats_obfuscated_$folder_num-benign_$c.txt

#	done

#for ((c=1; c<=5; c++))
#	do 
#		php main.php -f samples/obfuscated/$folder_num/malicious$c.php
#		mv output.txt output_obfuscated_$folder_num-malicious_$c.txt
#		mv stats.txt stats_obfuscated_$folder_num-malicious_$c.txt

#	done






