<?php
$getno = $_GET['no'];

include '../../config/koneksi.php';

$q1 = mysqli_query($koneksi,"delete from persyaratan where no_sementara='$getno'") or die("GAGAL HAPUS PERSYARATAN ".mysqli_error($koneksi));

$q2 = mysqli_query($koneksi,"delete from kesehatan where no_sementara='$getno'") or die("GAGAL HAPUS KESEHATAN ".mysqli_error($koneksi));

$q3 = mysqli_query($koneksi,"delete from bio_siswa where no_sementara='$getno'") or die("GAGAL HAPUS BIO ".mysqli_error($koneksi));

if(($q1 == 1) AND ($q2 == 1) AND ($q3 == 1)){
	echo "<script>alert('Berhasil Hapus');
	document.location.href='../index.php?halaman=Data-Siswa'</script>";
}else{
	echo "GAGAL HAPUS";
}

?>