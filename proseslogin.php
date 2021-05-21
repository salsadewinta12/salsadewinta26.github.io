<?php
session_start();
include "koneksi.php";

$username = $_POST["username"];
$password = md5($_POST["password"]);
	//cek validasi
	// buka tabel dan periksa isinya

	$sql = "select * FROM tb_user WHERE username='$username' AND password='$password' ";
	$query = mysqli_query($kon,$sql);
	$count = mysqli_num_rows($query);
	$data = mysqli_fetch_array($query);
	
	if ($count==0)
	{
		echo "
		<script>
				alert('Maap data anda tidak valid')
				location.href='login.php';
				</script>";
	}
	if($data['role']=="admin")
			{
				$_SESSION['username']=$username;
				$_SESSION['role']="admin";
				echo"
				<script>
				alert('Login sukses anda sebagai admin')
				location.href='admin/beranda.php';
				</script>";
			}
		else if($data['role']=="kasir")
			{
				$_SESSION['username']=$username;
				$_SESSION['role']="kasir";
				echo"
				<script>
				alert('Login sukses anda sebagai kasir')
				location.href='kasir/beranda.php';
				</script>";
			}
			else 
			{
				$_SESSION['username']=$username;
				$_SESSION['role']="owner";
				echo"
				<script>
				alert('Login sukses anda sebagai owner')
				location.href='owner/beranda.php';
				</script>";
			}
?>