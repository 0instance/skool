<?php
session_start();
if (!isset($_SESSION['login']) && !$_SESSION['login']) {
	$_SESSION['lastpath']= $_SERVER['REQUEST_URI'];

	# code...
	header('Location: login.php');
	die();
}