<?php 
$database = mysqli_connect("localhost","root","","myvietgram");
//berhasil

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>