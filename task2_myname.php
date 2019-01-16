<?php
	$strings=("Md,Mosfeq,Anik");
	echo "</br>";
	echo $strings;
	$newarray=explode(",",$strings );
	echo "</br>";
	print_r ($newarray);
	$fullsentence=implode(" ", $newarray );
	echo "</br>";
	echo $fullsentence;



?>