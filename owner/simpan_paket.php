<?php
	include "koneksi.php";
	$id_outlet		=$_POST['id_outlet'];
	$jenis			=$_POST['jenis'];
	$nama_paket		=$_POST['nama_paket'];
    $harga			=$_POST['harga'];
		
		$query=mysqli_query($kon, "INSERT INTO tb_paket VALUES ('','$id_outlet','$jenis','$nama_paket','$harga')");
        //$query = mysqli_query($sql);
        
        if($query===TRUE)
        {
			echo"
			<script>
				alert('Data Berhasil Di Simpan');
				location.href='paket.php';
			</script>";
		}
		else
		{
			echo"
			<script>
				alert('Data Gagal Di Simpan');
				location.href='tambah_paket.php';
			</script>";
		}
?>