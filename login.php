<!-- https://ra-biitch.blogspot.com/ - Kunjungi Blog Kami Untuk Mendapatkan Update Script Lainnya -->
<?php

session_start();

$username = $_POST['username'];
$username = mysql_real_escape_string($username);


if (mysql_num_rows($q) == 1) {

	$_SESSION['username'] = $username;
	$user = $_REQUEST['user'];
	$_SESSION['username'] = $user;
	header('location:/');
} else {
	header('location:/processing_request.php');
}
?>