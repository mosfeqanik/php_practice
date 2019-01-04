<?php
	$the_first_name="Mosfeq";
	$the_second_name="md";
	$the_third_name="Anik";
	$the_first_len=strlen($the_first_name);
	$the_second_len=strlen($the_second_name);
	$the_third_len=strlen($the_third_name);
	

	if(($the_first_len%2)==0){
		echo $the_first_name." is the even and you are general";
	}
	elseif(($the_first_len%2)!=0){
		echo $the_first_name." is the odd and you are diffrent";
	}
	


	elseif(($the_second_len%2)==0){
		echo $the_second_name." is the even and you are general";
	}
	elseif(($the_second_len%2)!=0){
		echo $the_second_name." is the odd and you are diffrent";
	}



	elseif(($the_third_len%2)==0){
		echo $the_third_name." is the even and you are general";
	}
	elseif(($the_third_len%2)!=0){
		echo $the_third_name." is the odd and you are diffrent";
	}



?>