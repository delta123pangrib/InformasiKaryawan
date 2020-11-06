<html>
<head>
	<title>Halaman Tambah Karyawan</title>	
</head>
<body>
<form action="prosesdatakaryawan.php" method="post">
<h3 align="left"> Isilah Data Karyawan yang ada di bawah ini : </h3>
                <table>
                    <tr>
                        <td>Name : </td>
						<td><input type="text" class="form-control" name="nameEmployee" required="text"></td>
                    </tr>
                    <tr>
                        <td>Title : </td>
						<td><input type="text" class="form-control" name="title" required="text"></td>
                    </tr>
                    <tr>
                        <td>Salary: </td>
						<td><input type="number" class="form-control" name="salary" required="number"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="tambah" value="Tambah"></td>
                    </tr>
                    </body>
</html>