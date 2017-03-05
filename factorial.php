<?php
function fac($x) {
	if($x == 1)
		return $x;
	return $x * fac($x-1);
}

echo fac(10);