#!/bin/bash




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

for ((c=0; c<=147; c++))
	do
		echo $c
#		php ../../MALMAX/malmax-shipped/sandbox.php -f 0423_test_for_obfuscator_3/$c.php
#		php ../../../MALMAX/malmax-shipped/sandbox.php -f $c.php | grep "Non-white"
		php ../../../MALMAX/malmax-shipped/sandbox.php -f $c.php

	done


