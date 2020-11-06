<?php
session_start();
    //koneksi ke database 
include 'koneksi.php';

// cek apakah tombol simpan sudah diklik atau blum?  
if(isset($_POST['simpan'])) {
                            
              
                            $nameEmployee = $_POST['nameEmployee'];
                            $title = $_POST['title'];
                            $salary = $_POST['salary'];

//query untuk update  
$sql = "UPDATE employee SET nameEmployee='$nameEmployee', title='$title', salary='$salary' WHERE idEmployee='$idEmployee'";


$query =mysqli_query($koneksi, $sql);

  // apakah query update berhasil?
  if( $query ) {
    // kalau berhasil alihkan ke halaman 
    header('Location: informasidatakaryawan.php');
} else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
}


} else {
die("Akses dilarang...");
}


?>