<?php
	$host = "localhost"; //host database
	$username = "root"; //username database
	$password = ""; //password databaase
	$db = "profile1";
	$koneksi = new mysqli($host, $username, $password, $db); //membuat koneksi ke server mysql

	if ($koneksi->connect_error){
		die("Koneksi ke database gagal");
	} 
?>