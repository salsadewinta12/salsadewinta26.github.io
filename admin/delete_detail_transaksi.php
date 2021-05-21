<?php 
include('koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($kon,"DELETE FROM tb_detail_transaksi WHERE id='$id'") or die(mysqli_error());

if ($query) {
            echo"
	            <script>
				alert('delete berhasil')
				location.href='detail_transaksi.php';
				</script>";
}
else{
    echo"
    <script>
    alert('delete gagal')
    location.href='detail_transaksi.php';
    </script>";
}
?>