<?php
require 'koneksi.php';
  
if(isset($_POST['tambah'])) {
         
                            $nameEmployee = trim(mysqli_real_escape_string($koneksi, $_POST['nameEmployee']));
                            $title = trim(mysqli_real_escape_string($koneksi, $_POST['title']));
                            $salary = trim(mysqli_real_escape_string($koneksi, $_POST['salary']));

                            mysqli_query($koneksi, "INSERT INTO employee(idEmployee, nameEmployee, title, salary)
                            VALUES ('$idEmployee', '$nameEmployee', '$title', '$salary')")or die(mysqli_error($koneksi));

                            echo "<script>alert('Data Karyawan BERHASIL Disimpan');
                            window.location='informasidatakaryawan.php';</script>";
}

?>