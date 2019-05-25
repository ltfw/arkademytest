<?php

function count_vowels($string)
{
	echo 'vowel(s) : '.preg_match_all('/[aeiou]/i',$string,$matches);
}

count_vowels('programmer');