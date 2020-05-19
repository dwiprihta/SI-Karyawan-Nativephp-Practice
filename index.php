<?php 
     //panggil function
     require 'function.php';
     $karyawan=show("SELECT * FROM v_gajii ORDER BY nama ASC");
     //query for show data
     //  var_dump($karyawan);
     //  die;

if (isset($_POST['cari'])){
     $karyawan=cari($_POST['search']);
}

if (isset($_POST['sorting'])){
          $tanggal_awal=sorting($_POST['t1']);
          $tanggal_akhir=sorting($_POST['t2']);
}
 ?>

<!DOCTYPE html>
<html>
<head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>TEST DWI PRIHTAPAMBUDI</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel='stylesheet' type='text/css' media='screen' href='css/css/bootstrap.css'>
     <script src='js/bootstrap.js'></script>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>TEST DWI PRIHTAPAMBUDI</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel='stylesheet' type='text/css' media='screen' href='css/css/bootstrap.css'>
     <script src='js/jquery.js'></script>
     <script src='js/bootstrap.js'></script>
    
</head>
<body>

     <!-- NAVBAR -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <div class="container">
               <a class="navbar-brand" href="#"><b>SIKaryawan</b></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">BERANDA <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="tambah.php">TAMBAH DATA</a>
                    </div>
               </div>
          </div>
     </nav>

     <!-- CONTAIN -->
     <div class="container" style="margin-top: 30px;">
          <H3>DATA KARYAWAN</H3><hr><br>
          <div class="row">
          <div class="col col-lg">
          <form action="" mathod="post" class="form-inline">
               <label class="sr-only" for="inlineFormInputName2">Tanggal Awal Masuk</label>
               <input type="date" name="t1" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">

               <label class="sr-only" for="inlineFormInputGroupUsername2">Tanggal Akhir Masuk</label>
               <div class="input-group mb-2 mr-sm-2">
               <input type="date" name="t2" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
               </div>

               <button type="submit" name="sorting" class="btn btn-primary mb-2">Sorting</button>
          </form>
          </div>

          <form action="" method="POST" >
               <div class="form-group mx-sm-3 mb-2 form-inline" >    
               <input type="text" name="search" class="form-control" placeholder="Cari Data..." style="margin-right:10px;">
               <button type="submit" name="cari" class="btn btn-primary mb-2 mt-1" style="margin-right:30px;">cari</button>
               </div>
  
          </form>
          </div>
          <table div class="table" style="margin-top: 30px;">    
              <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>GENDER</th>
                    <th>TANGGAL LAHIR</th>
                    <th>TANGGAL MASUK</th>
                    <th>GRADE</th>
                    <th>GAJI</th>
                    <th>ACTION</th>
              </tr>
               <?php $i=1;?>
              <?php foreach($karyawan as $kry):?> 
              <tr>
                   <td><?=$i;?></td>
                   <td><?=$kry['nip'];?></td>
                   <td><?=$kry['nama'];?></td>
                   <td><?=$kry['gender'];?></td>
                   <td><?=$kry['tgl_masuk'];?></td>
                   <td><?=$kry['tgl_masuk'];?></td>
                   <td><?=$kry['grade'];?></td>
                   <td><?=$kry['gaji'];?></td>
                   
                   <td><a class="btn btn-sm btn-primary" href="ubah.php?id=<?=$kry["nip"];?>">ubah</a> | 
                   <a class="btn btn-sm btn-danger" onclick="return confirm('yakin ?');" href="hapus.php?id=<?= $kry["nip"];?>">hapus</a></td>
              </tr>
              <?php $i++;?>
               <?php endforeach;?> 
          </table>
     </div>   
</body>
</html>


