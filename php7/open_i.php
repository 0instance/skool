<?php

$p = $_GET['p'];
$p = str_replace('/home/me/public_html/', 'http://127.0.0.1/~me/', $p);


?>



<img src="<?= $p ?>" style="width: 100%; height: 600px">