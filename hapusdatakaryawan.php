<?php
session_start();
    //koneksi ke database 
include 'koneksi.php';


if( isset($_GET['idEmployee']) ){

    // ambil id dari query string
    $idEmployee = $_GET['idEmployee'];

    // buat query hapus
    $sql = "DELETE FROM employee WHERE idEmployee=$idEmployee";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: informasidatakaryawan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>