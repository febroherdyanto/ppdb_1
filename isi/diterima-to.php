<style type="text/css">
	#cadangan{
		background-color: yellow;
	}
	#bgc{
		background-color: #FF0000;
		color: white;
		font-size: 20px;
		text-align: center;
	}
	#bgh{
		background-color: cyan;
	}
	th{
		background-color: cyan;
	}
</style>
<div class="panel panel-success">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-code"></i> 
		DAFTAR NAMA SISWA DITERIMA DI SMKN 1 MEJAYAN, JURUSAN <b>TO</b></h2>
</div>
<div class="panel-body">

<center><h3>Daftar Nama Siswa yang diterima di Komptensi Keahlian <BR>
<b>TEKNIK OTOTRONIK</b> SMKN 1 Mejayan</h3></center>
<hr>
<div class="panel panel-default">
	<div class="panel-heading" align="center">
		<b><i class="fa fa-warning pengumuman1"></i> PENGUMUMAN / INFORMASI</b>
	</div>

	<div class="panel-body pengumuman2"><?php $queryjalan = mysqli_query($koneksi, "select * from info where untuk='to'") or die("GAGAL ".mysqli_error($koneksi)); while($jalan = mysqli_fetch_array($queryjalan)){ echo strtoupper($jalan['isi']); } ?>
	</div>
</div>
<hr>
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
	<th>No.</th>
	<th>No Siswa</th>
	<th>Nama Siswa</th>
	<th>Jenkel</th>
	<th>Asal Sekolah</th>
</thead>
<tbody>
<?php 
$query = mysqli_query($koneksi,"select * from bio_siswa where jurusan='TO' and diterima='Y' order by rata_total desc limit 64");
$no=1;
while($t = mysqli_fetch_array($query)){ ?>

<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $t['no_sementara']; ?></td>
	<td><?php echo strtoupper($t['nama_siswa']); ?></td>
	<td><?php if($t['jenkel']=='L'){echo "Laki-Laki";}else{echo "Perempuan";} ?></td>
	<td><?php echo strtoupper($t['asal_sekolah']); ?></td>
</tr>
<?php $no++; } ?>
<?php /*
		<tr>
			<td colspan="5" id="bgc"><b>CADANGAN</b></td>
		</tr>
	<?php 
	$query = mysqli_query($koneksi,"select * from bio_siswa where jurusan='TO' and diterima='N' order by rata_total desc limit 0,6"); $no=97; while($tampil = mysqli_fetch_array($query)){ ?>
		<tr>
			<td align="center" id="cadangan"><?php echo $no; ?>.</td>
			<td align="center" id="cadangan"><?php echo $tampil['no_sementara']; ?></td>
			<td id="cadangan"><?php echo strtoupper($tampil['nama_siswa']); ?></td>
			<td align="center" id="cadangan"><?php echo $tampil['jenkel']; ?></td>
			<td id="cadangan"><?php echo strtoupper($tampil['asal_sekolah']); ?></td>
		</tr>
	<?php $no++; } ?>
*/  ?>
</tbody>
</table>
</div>

</div>
</div>