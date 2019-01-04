<?php
	$the_first_name="Mosfeq";
	$the_second_name="md";
	$the_third_name="Anik";
	$the_first_len=strlen($the_first_name);
	$the_second_len=strlen($the_second_name);
	$the_third_len=strlen($the_third_name);
	if($the_first_len<$the_second_len){
		echo $the_first_name." is the shortest name";
	}
	elseif($the_second_len<$the_third_len){
		echo $the_second_name." is the shortest name";
	}
	else{
		echo $the_third_name." is the shortest name";
	}




?>