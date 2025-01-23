<?php

function sumOfTwo($a, $b, $v) {
	foreach($a as $numberA){
		foreach($b as $numberB){
			if($numberA + $numberB == $v) return true; 
		}
	}
	return false; 
}

$a = [1, 2, 3];
$b = [4, 5, 6];
$v = 10;
echo sumOfTwo($a, $b, $v); // true