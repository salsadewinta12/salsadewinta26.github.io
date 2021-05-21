<?php
		include('koneksi.php'); 
			$id_paket			= $_POST['id_paket'];
			$jenis				= $_POST['jenis'];
			$nama_paket			= $_POST['nama_paket'];
			$harga				= $_POST['harga'];
			
			$sql = mysqli_query($kon, "UPDATE tb_paket SET id_paket='$id_paket', jenis='$jenis', nama_paket='$nama_paket', harga='$harga' WHERE id_paket='$id_paket'" ) or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="paket.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>