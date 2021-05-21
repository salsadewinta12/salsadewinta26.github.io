<?php 
include('koneksi.php');

$id_paket = $_GET['id_paket'];

$query = mysqli_query($kon,"DELETE FROM tb_paket WHERE id_paket='$id_paket'") or die(mysqli_error());

if ($query) {
            echo"
	            <script>
				alert('delete berhasil')
				location.href='paket.php';
				</script>";
}
else{
    echo"
    <script>
    alert('delete gagal')
    location.href='paket.php';
    </script>";
}
?>