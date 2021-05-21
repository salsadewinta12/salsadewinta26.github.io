<?php
			include('koneksi.php'); 
		
			$id_outlet			= $_POST['id_outlet'];
			$nama				= $_POST['nama'];
			$alamat				= $_POST['alamat'];
			$tlp 				= $_POST['tlp'];
			
			
			
			$cek = mysqli_query($kon, "SELECT * FROM tb_outlet WHERE nama='$nama'") or die(mysqli_error($kon));
			
			if(mysqli_num_rows($cek) == 0)
			{
				$sql = mysqli_query($kon, "INSERT INTO tb_outlet(id_outlet, nama,  alamat, tlp) VALUES('$id_outlet', '$nama','$alamat','$tlp')") or die(mysqli_error($kon));
				
				if($sql)
				{
					echo '<script>alert("Berhasil menambahkan data."); document.location="outlet.php";</script>';
				}
				else
				{
					echo '<script>alert("Gagal melakukan proses tambah data"); document.location="tambah_outlet.php";</script>';
					//echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}
			else
			{
				//echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
				echo '<script>alert("Gagal, NIM sudah terdaftar."); document.location="tambah_oulet.php";</script>';
			}
?>