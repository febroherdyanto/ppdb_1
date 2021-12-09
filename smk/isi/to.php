<div class='rightpanel'>
       <div class='pageheader'>
       <a href='index.php?halaman=Tambah-Siswa' class='btn btn-primary'>Tambah Data Siswa</a>
       <hr>
       <h4>Lihat Data Berdasarkan Jurusan Lain :</h4>
       <a href="index.php?halaman=TO"><button class="btn-sm btn-success">TO</button></a> | <a href="index.php?halaman=RPL"><button class="btn-sm btn-success">RPL</button></a>
       <a href="index.php?halaman=TPHP"><button class="btn-sm btn-success">TPHP</button></a> | <a href="index.php?halaman=TKR"><button class="btn-sm btn-success">TKR</button></a>
       <hr>
          <div class='pageicon'><span class='iconfa-user'></span></div>
            <div class='pagetitle'>
                <h2>Data Calon Siswa SMKN 1 Mejayan Jur. TO</h2>
            </div>
        </div><!--pageheader-->

        <div class='maincontent'>
            <div class='maincontentinner'>
      
          <table id='datatable' class='table table-bordered' border="1">
                    <thead align="center">
                        <tr>
          <th>no</th>
          <th align="center">No. Sementara</th>
          <th>Nama Siswa</th>
          <th>Jenis Kelamin</th>
          <th>Asal Sekolah</th>
      <th>Aksi</th>
          </tr></thead><tbody>
    <?php
    $tampil=mysqli_query($koneksi,"SELECT * FROM bio_siswa WHERE jurusan='TO'");

    $no = $posisi+1;
    while ($r=mysqli_fetch_array($tampil)){
    
      echo "<tr>
      <td class='left' width='25'>$no</td>
      <td>$r[no_sementara]</td>
      <td>$r[nama_siswa]</td>
      <td>$r[jenkel]</td>
      <td>$r[asal_sekolah]</td>
      <td class='center'><a href=index.php?halaman=Edit-Siswa&no=$r[no_sementara] title='Edit' class='btn-sm btn-info btn-circle'>
        Edit<i class='iconfa-pencil'></i></a> &nbsp;&nbsp;
      </td>
               </tr>";
    $no++;
    }

    echo "</tbody></table>";
    ?>