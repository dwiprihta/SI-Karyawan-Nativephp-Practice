<?php
     //PANGIL FUNGSI
     require 'function.php';

     //cek apakah tombol simpan ditekan
     if(isset($_POST["tambah"])){
         // var_dump($_POST);die;
          if (tambah($_POST) > 0) {
               echo "<script>
                    alert ('data berhasil ditambahkan');
                    document.location.href='index.php';
                    </script>";}       
               else {
                    // echo "<script>
                    // alert ('data gagal ditambahkan');
                    // document.location.href='tambah.php';
                    // </script>";
                    echo "data gagal ditambahkan";
          }
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
          <H3>TAMBAH DATA KARYAWAN</H3><hr>   
          <div class="col col-lg-6">   
          <form action="" method="POST">      
          <div class="form-group">
               <label for="inputAddress">NIP</label>
               <input type="text" class="form-control" required="" name="nip" id="inputAddress" placeholder="NIP">
               </div>

               <div class="form-group">
               <label for="inputAddress">Nama</label>
               <input type="text" class="form-control"  required="" name="nama" id="inputAddress" placeholder="Nama Karyawan">
               </div>

               <div class="form-group"  required="">
               <label>Gender</label><br>
               <div class="custom-control custom-radio custom-control-inline">
               <input type="radio" id="customRadioInline1" name="jk" value="laki-laki" class="custom-control-input">
               <label class="custom-control-label" for="customRadioInline1">LAKI-LAKI</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
               <input type="radio" id="customRadioInline2" name="jk" value="perempuan" class="custom-control-input">
               <label class="custom-control-label" for="customRadioInline2">PEREMPUAN</label>
               </div></div> 

               <div class="form-row">
               <div class="form-group col-md-6">
                    <label for="inputEmail4">Tanggal Lahir</label>
                    <input type="date" class="form-control"  required="" name="tgl_lahir" id="inputEmail4" placeholder="Tanggal Lahir">
               </div>
               <div class="form-group col-md-6">
                    <label for="inputPassword4">Tanggal Masuk</label>
                    <input type="date" class="form-control"  required="" name="tgl_masuk" id="inputPassword4" placeholder="">
               </div>
               </div>

               <div class="form-group">
               <label for="exampleFormControlSelect1">Grade</label>
               <select class="form-control" required="" name="grade" id="exampleFormControlSelect1" placeholder="Grade">
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
               
               <button type="submit" name="tambah" class="btn btn-primary">SIMPAN DATA</button>  <button type="RESET" class="btn btn-danger">RESET</button>
               </form>
               </div><br><br>
          
</body>
</html>