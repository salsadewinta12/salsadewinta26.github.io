<?php
	include "koneksi.php";
			
	$id_outlet				=$_POST['id_outlet'];
	$kode_invoice			=$_POST['kode_invoice'];
    $id_member				=$_POST['id_member'];
    $tgl					=$_POST['tgl'];
    $batas_waktu			=$_POST['batas_waktu'];
    $tgl_bayar				=$_POST['tgl_bayar'];
	$biaya_tambahan			=$_POST['biaya_tambahan'];
	$diskon					=$_POST['diskon'];
	$pajak					=$_POST['pajak'];
	$status					=$_POST['status'];
	$dibayar				=$_POST['dibayar'];
	$id_user				=$_POST['id_user'];

		
		$query=mysqli_query($kon, "INSERT INTO tb_transaksi VALUES ('','$id_outlet','$kode_invoice','$id_member','$tgl','$batas_waktu', '$tgl_bayar', '$biaya_tambahan', '$diskon', '$pajak', '$status', '$dibayar', '$id_user')");
        //$query = mysqli_query($sql);
        
        if($query===TRUE)
        {
			echo"
			<script>
				alert('Data Berhasil Di Simpan');
				location.href='transaksi.php';
			</script>";
		}
		else
		{
			echo"
			<script>
				alert('Data Gagal Di Simpan');
				location.href='tambah_transaksi.php';
			</script>";
		}
?>