<?php
switch ($_SESSION['language']) {
case 'Indonesia':
	include_once $path."langs/indonesia.php";
	break;
case 'English':
	include_once $path."langs/english.php";
	break;
default:
	$_SESSION['language'] = "Indonesia";
	include_once $path."langs/indonesia.php";
	break;
}
?>