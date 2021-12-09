<div class='rightpanel'>
       <div class='pageheader'>
          <div class='pageicon'><span class='iconfa-user'></span></div>
            <div class='pagetitle'>

<!-- Lainnya -->
Lihat Nilai Tertinggi Jurusan Lain ! <br>
<a href="index.php?halaman=Nilai-TO"><button class="btn-sm btn-danger">TO</button></a> | 
<a href="index.php?halaman=Nilai-RPL"><button class="btn-sm btn-primary">RPL</button></a> | 
<a href="index.php?halaman=Nilai-TPHP"><button class="btn-sm btn-success">TPHP</button></a> | 
<a href="index.php?halaman=Nilai-TKR"><button class="btn-sm btn-warning">TKR</button></a>
<!-- ./lainnya -->

                
                <h2>Nama Siswa TKR Berdasarkan Nilai Tertinggi</h2>
            </div>
        </div><!--pageheader-->

        <div class='maincontent'>
            <div class='maincontentinner'>
      
          <table id='datatable' class='table table-bordered' border="1">
                    <thead align="center">
                        <tr>
          <th>no</th>
          <th align="center">No. Siswa</th>
          <th>Nama Siswa</th>
          <th>Jenis Kelamin</th>
          <th>Asal Sekolah</th>
          <th>Nilai</th>
          <th>Diterima/Tidak</th>
      <th>Aksi</th>
          </tr></thead><tbody>
    <?php
    $tampil=mysqli_query($koneksi,"SELECT * FROM bio_siswa WHERE jurusan='TKR' ORDER BY rata_total DESC");

    $no = $posisi+1;
    while ($r=mysqli_fetch_array($tampil)){
    
      echo "<tr>
      <td class='left' width='25'>$no</td>
      <td>$r[no_sementara]</td>
      <td>$r[nama_siswa]</td>
      <td>$r[jenkel]</td>
      <td>$r[asal_sekolah]</td>
      <td>$r[rata_total]</td>
      <td>$r[diterima]</td>
      <td class='center'>";

$getterima = $_GET['halaman'];

        if($r['diterima'] == 'N'){
      echo "<a href=isi/pilihterima.php?no=$r[no_sementara]&hal=$getterima class='btn-sm btn-success btn-circle'>v</a>";
        }else{
          echo "<a href=isi/batalterima.php?no=$r[no_sementara]&hal=$getterima class='btn-sm btn-danger btn-circle'>x</a>";
        }
      echo "</td>
               </tr>";
    $no++;
    }

    echo "</tbody></table>";
    ?>