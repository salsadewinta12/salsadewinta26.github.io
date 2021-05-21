<?php
session_start();
include "koneksi.php";

$username = $_POST["username"];
$password = md5($_POST["password"]);

$sql = "select * from tb_user where username='".$username."' and password='".$password."' limit 1";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);

	if ($jumlah>0) 
	{
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["username"]=$row["username"];
		header("Location:beranda.php");
	}
	else 
	{
		echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
	}
?>
