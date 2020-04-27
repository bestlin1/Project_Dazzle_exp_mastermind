#!/bin/bash

############
## test_2_for_MALMAX_benign_vs_malicious_through_obfuscator
############


#folder_name="benign"
#
#for ((c=1; c<=10; c++))
#	do
#		php main.php -f sample_for_test_2/$folder_name/$c.php
#		mv output.txt result_for_test_2/$folder_name/output_$folder_name-$c.txt
#		mv stats.txt result_for_test_2/$folder_name/stats_$folder_name-$c.txt
#	done


#folder_name="malicious"
#
#for ((c=1; c<=14; c++))
#	do
#		php main.php -f sample_for_test_2/$folder_name/$c.php
#		mv output.txt result_for_test_2/$folder_name/output_$folder_name-$c.txt
#		mv stats.txt result_for_test_2/$folder_name/stats_$folder_name-$c.txt
#	done






############
## test_2_for_MALMAX_benign_vs_malicious_through_obfuscator
## php_ob
############


folder_name="new_malicious_green_o_2_yak_pro"

#new_malicious_green
#new_malicious_green_o_1_php_obfuscator
#new_malicious_green_o_2_yak_pro
#new_malicious_green_o_3_best_php_obfuscator
#new_malicious_green_o_4_simple_php_obfuscator

#new_malicious
#new_malicious_o_1_php_obfuscator
#new_malicious_o_2_yak_pro
#new_malicious_o_3_best_php_obfuscator
#new_malicious_o_4_simple_php_obfuscator

for ((c=0; c<=33; c++))
	do
		php ../../MALMAX/malmax-shipped/sandbox.php -f 0423_test_for_obfuscator_3/$c.php
#		php sandbox.php -f sample_for_test_2/$folder_name/nmg_$c.php
#		mv output.txt result_for_test_2/$folder_name/output_$folder_name-$c.txt
#		mv stats.txt result_for_test_2/$folder_name/stats_$folder_name-$c.txt
#		echo "Hello, $c"
	done


############
## test_2_for_MALMAX_benign_vs_malicious_through_obfuscator
## yak_pro
############



############
## test_2_for_MALMAX_benign_vs_malicious_through_obfuscator
## best_php_obf(online)
############


############
## test_2_for_MALMAX_benign_vs_malicious_through_obfuscator
## simple_php_obfuscator(online)
############
