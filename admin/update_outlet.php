<?php
		include('koneksi.php'); 
			$id_outlet			= $_POST['id_outlet'];
			$nama				= $_POST['nama'];
			$alamat				= $_POST['alamat'];
			$tlp				= $_POST['tlp'];

			
			$sql = mysqli_query($kon, "UPDATE tb_outlet SET id_outlet='$id_outlet', nama='$nama', alamat='$alamat', tlp='$tlp' WHERE id_outlet='$id_outlet'" ) or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="outlet.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>