<?php
		include('koneksi.php'); 
			$id_member			= $_POST['id_member'];
			$nama				= $_POST['nama'];
			$alamat				= $_POST['alamat'];
			$jenis_kelamin		= $_POST['jenis_kelamin'];
			$tlp				= $_POST['tlp'];
			
			$sql = mysqli_query($kon, "UPDATE tb_member SET id_member='$id_member', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tlp='$tlp' WHERE id_member='$id_member'" ) or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="member.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>