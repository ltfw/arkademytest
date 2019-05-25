<?php
function ganti_kata($string, $a, $b)
{
	for ($i=0; $i < strlen($string); $i++) { 
		if($string[$i]==$a) $string[$i]=$b;
	}

	echo $string;
}

ganti_kata('purwakarta','a','o');