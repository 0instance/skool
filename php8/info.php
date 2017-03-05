<?php

session_start();
if (!isset($_SESSION['timeOnSite'])) {
	$_SESSION['timeOnSite'] = time();
}

?>


<div class="container" id="content">
		<div class="alert alert-success">
			<div class="row">
				<div class="col-md-6 col-xs-6">
					Jūs aplankytų puslapių: <b>0</b>
				</div>
				<div class="col-md-6 col-xs-6">
					Tinklapyje Jūs prabuvote: <b><?= time() - $_SESSION['timeOnSite'] ?> s.</b>
				</div>
			</div>
		</div>
	</div>