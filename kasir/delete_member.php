<?php
	//include file config.php
	include('koneksi.php');

	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$id_member = $_GET['id_member'];
	
	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek = mysqli_query($kon, "SELECT * FROM tb_member WHERE id_member='$id_member'") or die(mysqli_error($kon));
	
	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0)
	{
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del = mysqli_query($kon, "DELETE FROM tb_member WHERE id_member='$id_member'") or die(mysqli_error($kon));
		if($del)
		{
			echo '<script>alert("Berhasil menghapus data."); document.location="member.php";</script>';
		}
		else
		{
			echo '<script>alert("Gagal menghapus data."); document.location="member.php";</script>';
		}
	}
	else
	{
		echo '<script>alert("NIM tidak ditemukan di database."); document.location="member.php";</script>';
	}
?>