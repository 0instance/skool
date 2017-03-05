
<!DOCTYPE html>
<html>
	<head>
	

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>
	<body>

	

		<div class="container">

		
				<?php


function display($dir_path) {
	$r = opendir($dir_path);
	echo '<ul class="list-group">';
	while($f = readdir($r))	
	{	
		if($f == '.' || $f == '..') continue;

			$p_full = $dir_path . '/' . $f;
			
			echo "<li class='list-group-item'>";

			if (is_file($p_full)) {
				$ext = pathinfo($p_full, PATHINFO_EXTENSION);
				$last_m = stat($p_full)['mtime'];

				if(!$ext)
					$ext = 'unknown';

				echo "<img src='http://www.privatklinik-meiringen.ch/plugins/muraDynamicContent/public/assets/img/document.png' style='    height: 15px;     margin: 0 5px;'>";

				if(in_array($ext, ['txt','php']))
					echo "<a href='open_f.php?p=" . $p_full  . "' >$f</a>";
				elseif(in_array($ext, ['jpg', 'png', 'gif']))
					echo "<a href='open_i.php?p=" . $p_full  . "'>$f</a>";
				else
					echo "<a href='open_r.php?p=" . $p_full . "'>$f</a>";
				echo " <span style='color: #f00'>ext: $ext</span>";
				echo ", <span style='color: #00bb03'>date: " . date ("Y-m-d H:i:s", $last_m) . "</span>";
				
			} else {
				echo "<img src='http://thewindowsclub.thewindowsclubco.netdna-cdn.com/wp-content/uploads/2010/08/Windows-Explorer-Icon.png' style='    height: 15px;    margin: 0 5px;'>";
				echo "<a href='?dir=$p_full'>$f</a>";
				
			}			
			if(is_dir($p_full))
				display($p_full);

			echo "</li>";
	}
	echo "</ul>";
	closedir($r);
}
if (isset($_GET['dir'])) {
	$dir = $_GET['dir'];
} else {
	$dir = '/home/me/public_html';
}

display($dir);

?>
			</ul>

		</div>

		<div id="footer">
		
		</div>

	</body>
</html>