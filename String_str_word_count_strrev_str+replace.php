<?php
	$strings="hi my name is anik";
	$a=strlen($strings);
	$b=str_word_count($strings);
	$c=strrev($strings);
	$d=str_replace("name", "full name", $strings);
	$e=strpos($strings,"name");


	
	echo "</br>";
	echo $a;
	echo "</br>";
	echo $b;
	echo "</br>";
	echo $c;
	echo "</br>";
	echo $d;
	echo "</br>";
	echo $e;

?>