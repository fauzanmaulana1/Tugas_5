<?php
$host = "localhost";
$user = "admin_klinik";
$pass = "312010115";
$db = "klinik_312010115";
$conn = mysqli_connect('localhost','admin_klinik','312010115','klinik_312010115');

if ($conn == false)
{

	echo "Koneksi ke server gagal.";
	die();

} else echo "Koneksi berhasil";
