<?php
			include('koneksi.php'); 
			$id_member			= $_POST['id_member'];
			$nama				= $_POST['nama'];
			$alamat				= $_POST['alamat'];
			$jenis_kelamin		= $_POST['jenis_kelamin'];
			$tlp 				= $_POST['tlp'];
			
			
			
			$cek = mysqli_query($kon, "SELECT * FROM tb_member WHERE id_member='$id_member'") or die(mysqli_error($kon));
			
			if(mysqli_num_rows($cek) == 0)
			{
				$sql = mysqli_query($kon, "INSERT INTO tb_member(id_member, nama,  alamat, jenis_kelamin, tlp) VALUES('$id_member', '$nama','$alamat', '$jenis_kelamin', '$tlp')") or die(mysqli_error($kon));
				
				if($sql)
				{
					echo '<script>alert("Berhasil menambahkan data."); document.location="member.php";</script>';
				}
				else
				{
					echo '<script>alert("Gagal melakukan proses tambah data"); document.location="tambah_member.php";</script>';
					//echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}
			else
			{
				//echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
				echo '<script>alert("Gagal, NIM sudah terdaftar."); document.location="tambah_member.php";</script>';
			}
?>