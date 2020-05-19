<?php
    require 'function.php';

    //TANGKAP ID DARI FORM INDEX
    $id=$_GET["id"];
    $kry=show("SELECT * FROM tbl_karyawan WHERE nip=$id")[0];
    //var_dump($filem[0]["judul"]);
    
    
    //mulai logika simpan
    if ( isset($_POST["ubah"]) ){
//          var_dump($_POST);
//     var_dump($_FILES);die;
    
    if (ubah($_POST) > 0){
         echo "
         <script>
        alert ('data berhasil diubah');
         document.location.href='index.php';
        </script>";
        
    }else{
//         
          echo ".";
    }
}
    ?>

<!DOCTYPE html>
<html>
<head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>UBAH DATA KARYAWAN</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel='stylesheet' type='text/css' media='screen' href='css/css/bootstrap.css'>
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
                    <a class="nav-item nav-link" href="index.php">BERANDA </a>
                    <a class="nav-item nav-link active" href="tambah.php">TAMBAH DATA</a>
                    </div>
               </div>
          </div>
     </nav>

     
     <!-- CONTAIN -->
     <div class="container" style="margin-top: 30px;">
          <H3>UBAH DATA KARYAWAN</H3><hr>   
          <div class="col col-lg-6">   
          <form action="" method="POST">      
          <div class="form-group">
               <label for="inputAddress">NIP</label>
               <input type="text" class="form-control" required="" name="nip" id="inputAddress" placeholder="NIP" value="<?= $kry['nip'];?>">
               </div>

               <div class="form-group">
               <label for="inputAddress">Nama</label>
               <input type="text" class="form-control"  required="" name="nama" id="inputAddress" placeholder="Nama Karyawan" value="<?= $kry['nama'];?>">
               </div>

               <div class="form-group">
               <label for="exampleFormControlSelect1">Grade</label>
               <select class="form-control" required="" name="gender" id="exampleFormControlSelect1" placeholder="Grade">
                    <option><?= $kry['gender'];?></option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  
               </select>
               </div>

               <div class="form-row">
               <div class="form-group col-md-6">
                    <label for="inputEmail4">Tanggal Lahir</label>
                    <input type="date" class="form-control"  required="" name="tgl_lahir" id="inputEmail4" placeholder="Tanggal Lahir" value="<?= $kry['tgl_lahir'];?>">
               </div>
               <div class="form-group col-md-6">
                    <label for="inputPassword4">Tanggal Masuk</label>
                    <input type="date" class="form-control"  required="" name="tgl_masuk" id="inputPassword4" placeholder="" value="<?= $kry['tgl_masuk'];?>">
               </div>
               </div>

               <div class="form-group">
               <label for="exampleFormControlSelect1">Grade</label>
               <select class="form-control" required="" name="grade" id="exampleFormControlSelect1" placeholder="Grade">
                    <option><?=$kry['grade'];?></option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
               </select>
               </div>

               <!-- <div class="form-group">
               <label for="exampleFormControlSelect1">Gaji</label>
               <select class="form-control" name="hobi"  required="" id="exampleFormControlSelect1" placeholder="Jumlah Gaji">
                    <option>100000</option>
                    <option>200000</option>
                    <option>300000</option>
                    <option>400000</option>
               </select>
               </div> -->
               
               <button type="submit" name="ubah" class="btn btn-success">UBAH DATA</button>  
               <button type="RESET" class="btn btn-danger">RESET</button>
               </form>
               </div><br><br>
          
</body>
</html>