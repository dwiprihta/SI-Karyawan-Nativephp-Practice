<?php
//buat koneksi
$conn=mysqli_connect("localhost","root","","si_karyawan");

function show($query){
     global $conn;
     $result=mysqli_query($conn,$query);
     $rows=[];
     while ($row=mysqli_fetch_assoc($result)){
          $rows[]=$row;
     }
     return $rows;
}

 //tambah data karyawan
 function tambah($data){
     global $conn;
     $nip=$data["nip"];
     $nama=$data["nama"];
     $jenkal=$data["jk"];
     $tgl_lahir=$data["tgl_lahir"];
     $tgl_masuk=$data["tgl_masuk"];
     $grade=$data["grade"];
     // $gaji=$data["gaji"];

     $query="INSERT INTO tbl_karyawan VALUES ('$nip','$nama','$jenkal','$tgl_lahir','$tgl_masuk','$grade')";
     mysqli_query($conn,$query);
     return mysqli_affected_rows($conn);
 
}

//hapus data
function hapus($id){
     global $conn;
     mysqli_query($conn, "DELETE FROM tbl_karyawan WHERE nip=$id");
     return mysqli_affected_rows ($conn);
}

//cari data
function cari($search){
     $query="SELECT * FROM v_gajii where nama LIKE '%$search%' or nip LIKE '%$search%'";
     return show($query);  
}


//sort data
function sorting($sort){
     $tanggal_awal=$sort['t1'];
     $tanggal_akhir=$sort['t2'];
     $query="SELECT * FROM v_gajii wHERE tgl_masuk BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
     return show($query);  
}


//ubah data
function ubah($data){
     global $conn;
     $nip=$data["nip"];
     $nama=$data["nama"];
     $jenkal=$data["gender"];
     $tgl_lahir=$data["tgl_lahir"];
     $tgl_masuk=$data["tgl_masuk"];
     $grade=$data["grade"];
     // $gaji=$data["gaji"];

    
     $query ="UPDATE tbl_karyawan SET
          nip='$nip',
          nama='$nama',
          gender='$jenkal',
          tgl_lahir='$tgl_lahir',
          tgl_masuk='$tgl_masuk', 
          grade='$grade' 
          WHERE nip=$nip
          ";
     mysqli_query($conn,$query);
     return mysqli_affected_rows($conn);
}

?>