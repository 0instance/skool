<?php
require_once 'auth.php';
?>
<textarea style="width: 100%; height: 200px">
	<?= readfile($_GET['p']) ?>
</textarea>