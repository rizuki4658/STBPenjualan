<html>
<head>
	<title>Laporan Penjualan</title>
</head>
<body>
<br>
<br>
<br>
<form action="Laporan_Penjualan_Barang.php" method="post">
<select name="id_barang">
	<option>Pilih</option>
	<?php
    $link1=mysqli_connect('localhost','root','','db_penjualan');
    $hasil1 = mysqli_query($link1,"select * from barang");
    while ($row1 = mysqli_fetch_array($hasil1)) { 
        echo "<option value='".$row1['kode_brg']."'>".$row1['kode_brg']."</option>";
    }
    ?>
</select>
<button>Show</button>
</form> 
</body>
</html>