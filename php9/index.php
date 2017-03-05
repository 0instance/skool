<?php
define('UL_DIR', '/home/me/public_html/php9/uploads/' );


if (isset($_FILES) && !empty($_FILES)) {


	$base_name = $_FILES['file']['name'];
	$base_name = str_replace(' ', '_', $base_name);
	$new_path = UL_DIR . $base_name;
	$ext = pathinfo($new_path, PATHINFO_EXTENSION);


	if ($_FILES['file']['size'] > 10000000) {
		echo "<a href='./'>return</a><br>";
		die('file size is too big, max size 10m!');

	}

	if (!in_array($ext, ['mp4'])) {
		echo "<a href='./'>return</a><br>";
		die('only mp4 allowed!');

		# code...
	}

	if (is_file($new_path)) {
		unlink($new_path);
		echo "OLD FILE REMOVED";
	}
	move_uploaded_file($_FILES['file']['tmp_name'], $new_path);
	?>
	<span>File uploaded: </span><video width="100%" height="400px" src="uploads/<?= $base_name ?>" autoplay controls></video>
	<?php
}
?>
<form action method="POST" enctype="multipart/form-data">
<fieldset>
	<label>Pasirinkit file</label>	
	<input type="file" name="file[]">
	<input type="file" name="file[]">
	<input type="file" name="file[]">
	<br>
	<input type="submit" name="Upload!">
</fieldset>
	


</form>