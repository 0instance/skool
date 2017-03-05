<?php

function dbd($a, $b) {
	if($a == $b)
		return $a;
	return $a < $b ? dbd($a, $b - $a) : dbd($a - $b, $b);
}


$x = 4;
$y = 28;

#441
#42


$dalik = dbd($x, $y);


echo "$x & $y daliklis $dalik";