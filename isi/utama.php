<div class="panel panel-success">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-home"></i> 
		PSB SMK NEGERI 1 MEJAYAN, KAB. MADIUN</h2>
</div>
<div class="panel-body" align="center">

<h2>Selamat Datang di psbsmkn1mejayan.id</h2><h4>(Domain Baru)</h4>
<b>Selamat Datang di Website Penjaringan Siswa Baru SMK Negeri 1 Mejayan</b><br>
<b>Tahun Ajaran 2016/2017</b>
<br>

<hr><hr>

<div class="row">
<div class="col-sm-12">
<i class="fa fa-hand-o-right"></i> <b>Pengumuman !</b>
<?php /* <div id="hitungmundur"></div>
<script>
Hitung();
function Hitung()
{
tahun = 2016;
bulan = 03;
hari = 20;
jam = 10;
menit = 00;
detik = 00;

setTimeout(function()
{
tglTarget = new Date(tahun, (bulan - 1), hari, jam, menit, detik, 00);
tglSkrg  = new Date();
tglSkrg  = new Date(tglSkrg.getFullYear(), tglSkrg.getMonth(), tglSkrg.getDate(), tglSkrg.getHours(), tglSkrg.getMinutes(), tglSkrg.getSeconds(), 00, 00);
var sisaHari = parseInt((tglTarget-tglSkrg)/86400000);
var sisaJam = parseInt((tglTarget-tglSkrg)/3600000);
var sisaMenit = parseInt((tglTarget-tglSkrg)/60000);
var sisaDetik = parseInt((tglTarget-tglSkrg)/1000);
detik = sisaMenit*60;
detik = sisaDetik-detik;
menit = sisaJam*60;
menit = sisaMenit-menit;
jam = sisaHari*24;
jam = (sisaJam-jam) < 0 ? 0 : sisaJam-jam;
hari = sisaHari;
mulaiHitung(hari,jam, menit,detik,tahun);
}, 1000);
}
function mulaiHitung(hari, jam, menit, detik, tahun){
 document.getElementById("hitungmundur").innerHTML="<h1><font color=red><b>"+jam+" Jam, "+menit+" Menit, "+detik+" Detik </b></font><br>Menuju Pengumuman PPDB Jalur PMDK SMKN 1 Mejayan </h1>";
Hitung();
}
</script>
<h2>Dilakukan Serentak di Lokasi Sekolah & <i>Online</i></h2>
*/ ?>



<?php 
$query = mysqli_query($koneksi,"select * from info where untuk='utama'");
while($tampil = mysqli_fetch_array($query)){
	echo $tampil['isi'];
}
?>

</div>
</div>

</div></div>
