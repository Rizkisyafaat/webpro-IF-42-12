<?php
session_start();
 
include 'database.php';
 
$username = $_GET['username'];
$password = $_GET['password'];
 
$data = mysqli_query($database,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
 
if($cek > 0)
{
	$data_profil 			= mysqli_query($database,"select * from profile where username='$username'");
	$list_data 				= mysqli_fetch_array($data_profil);
	$_SESSION['username'] 	= $username;
	$_SESSION['status'] 	= "login";
	$_SESSION["name"] 		= $list_data["name"];
	$_SESSION["website"] 	= $list_data["website"];
	$_SESSION["bio"] 		= $list_data["bio"];
	$_SESSION["email"] 		= $list_data["email"];
	$_SESSION["nohp"] 		= $list_data["nohp"];
	$_SESSION["gender"] 	= $list_data["gender"];
	header("location:feed.php");	
}
else
{
	header("location:index.php?pesan=gagal");
}
?>