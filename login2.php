<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$sql   = mysqli_query($kon,$query);

$data  = mysqli_num_rows($sql);

if ($data == 1) {
	$res = mysqli_fetch_array($sql);
	$_SESSION['username'] = $username;
	$_SESSION['id_user'] = $res['id_user'];
	$_SESSION['level'] = $res['level'];

	if ($_SESSION['level'] == 'superadmin') {
		header("location: indexSA.php");
	}else if ($_SESSION['level'] == 'admin') {
		header("location: index.php");
	}
}else{
	header("location:login.php");
}
?>

