<?php
include '../../config/koneksi.php';
$getno = $_GET['no'];
$gethal = $_GET['hal'];

$query = mysqli_query($koneksi,"update bio_siswa set diterima='N' where no_sementara='$getno'");
if($query == 1){
	echo "<script>document.location.href='../index.php?halaman=$gethal';</script>";
}
?>