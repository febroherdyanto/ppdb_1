<?php 
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3mUfvWB7dGwdyynSmZodXP9BOcepvIeL";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->

<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta content='noindex' name='robots'/>
<meta content='nofollow' name='robots'/> 


	<title>Penjaringan Siswa Baru SMK Negeri 1 Mejayan T/A 2016/2017 Gelombang 2</title>
	<link rel="shortcut icon" href="asset/img/smk.png">
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
<link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="asset/fancy/jquery.fancybox.css?v=2.1.0" type="text/css"/>


<script type="text/javascript" src="asset/js/jquery-1.9.1.js" defer="defer"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js" defer="defer"></script>
<script type="text/javascript" src="asset/js/google_maps.js" defer="defer"></script>
<script type="text/javascript" src="asset/fancy/jquery.js" defer="defer"></script>
<script type="text/javascript" src="asset/fancy/jquery.fancybox.pack.js?v=2.1.0" defer="defer"></script>
<script type="text/javascript">
$(document).ready(function() {
	/*
	 *  Simple image gallery. Uses default settings
	 */
	$('.fancybox').fancybox();
});
</script>
<script type="text/javascript">
    $(function() {
	    $("#datatable").dataTable();
    });
</script>

<style type="text/css">
	body{
		font-family: Arial;
	}
	.pengumuman1{
		color: red;
		font-weight: bold;
		font-size: 14px;
	}
	.pengumuman2{
		color: red;
		font-weight: bold;
		font-size: 14px;
	}
	.navbar-inverse{
		background-color: green;
		color: #FF0000;

	}
	.dropdown:hover .dropdown-menu {
    display: block;
	}
</style>

</head>
<body>
<div class="container">

	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse"
					 	data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Menu
					 	</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar">
					 	</span></button> <a class="navbar-brand" href="Utama"><font color="white"><b><i class="fa fa-home fa-fw"></i> HOME</b></font></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php include 'menu.php';?>
				</div>
			</nav>
		</div>
	</div>


<div class="clearfix"></div>
<br><hr>

<div class="row">
<div class="col-md-12">
	<center><img src="asset/img/2Header.gif" class="img-responsive"></center>
</div>	
</div>


<div class="row">
<div class="col-sm-12">
<table width="100%" class="table table-hover">
	<tr>
		<td width="10%" class="pengumuman1"><i class="fa fa-hand-o-right"></i> INFO : </td>
		<td width="90%" class="pengumuman2"><marquee><?php $queryjalan = mysqli_query($koneksi, "select * from info where untuk='jalan'") or die("GAGAL ".mysqli_error($koneksi)); while($jalan = mysqli_fetch_array($queryjalan)){ echo strtoupper($jalan['isi']); } ?></marquee></td>
	</tr>

</table>

<?php

$hal = $_GET['halaman'];

if($hal == 'Utama'){
	require_once 'isi/utama.php';
}else if($hal == 'Profil-SMK'){
	require_once 'isi/profil.php';
}

else if($hal == 'Pengumuman'){
	require_once 'isi/pengumuman.php';
}

else if($hal == 'Diterima-TO'){
	require_once 'isi/diterima-to.php';
}else if($hal == 'Diterima-RPL'){
	require_once 'isi/diterima-rpl.php';
}else if($hal == 'Diterima-TPHP'){
	require_once 'isi/diterima-tphp.php';
}else if($hal == 'Diterima-TKR'){
	require_once 'isi/diterima-tkr.php';
}

else if($hal == 'Galeri-Foto'){
	require_once 'isi/galeri-foto.php';
}
else if($hal == 'Kirim-Pesan'){
	require_once 'isi/pesan.php';
}
else if($hal == 'Kelas'){
	require_once 'isi/kelas.php';
}

else{
	require_once 'isi/utama.php';
}
 ?>


<div class="panel panel-danger">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-info"></i> 
		INFORMASI</h2>
</div>
<div class="panel-body">
<center><h1>PPDB SMKN 1 MEJAYAN<br>
<b>GELOMANG II</b><br>
<a href='http://gelombang2.psbsmkn1mejayan.id'>KLIK DISINI</a></h1></center>
</div>
</div>


</div>
</div>

<div class="row">
<div class="col-sm-12" align="center">
	&copy; 2016 - Dev Website Penjaringan Siswa Baru <a href="http://fb.com/smkn1mejayan" target="_blank">SMKN 1 Mejayan 2016/2017</a><br>
	<i class="fa fa-user"></i> <a href="http://fb.com/FebroHerdyantoAlmura" target="_blank">Febro Herdyanto</a> & Team - Komptensi Keahlian : <a href="http://faceboook.com/groups/rplsmkn1mejayan" target="_blank">Rekayasa Perangkat Lunak</a>
</div>
</div>



</div> <!-- ./container -->


</body>
</html>