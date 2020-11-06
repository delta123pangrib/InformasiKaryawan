<?php
session_start();
    //koneksi ke database 
include 'koneksi.php';
?>

<h1>Daftar Karyawan</h1>
<br>
<a href="datakaryawan.php" class="link-button">[+Tambah Karyawan]
</br>
<br>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Title</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM employee";
        $query = mysqli_query($koneksi, $sql);

        while($datakaryawan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$datakaryawan['idEmployee']."</td>";
            echo "<td>".$datakaryawan['nameEmployee']."</td>";
            echo "<td>".$datakaryawan['title']."</td>";
            echo "<td>".$datakaryawan['salary']."</td>";

            echo "<td>";
            echo "<a href='formeditdatakaryawan.php?idEmployee=".$datakaryawan['idEmployee']."'>Edit</a> | ";
            echo "<a href='hapusdatakaryawan.php?idEmployee=".$datakaryawan['idEmployee']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
</br>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
