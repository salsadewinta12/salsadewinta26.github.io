<?php
		include('koneksi.php'); 
			$id_transaksi				= $_POST['id_transaksi'];
			$biaya_tambahan				= $_POST['biaya_tambahan'];
			$status						= $_POST['status'];
			$dibayar					= $_POST['dibayar'];
		
			$sql = mysqli_query($kon, "UPDATE tb_transaksi SET id_transaksi='$id_transaksi', biaya_tambahan='$biaya_tambahan', status='$status', dibayar='$dibayar' WHERE id_transaksi='$id_transaksi'" ) or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="transaksi.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>