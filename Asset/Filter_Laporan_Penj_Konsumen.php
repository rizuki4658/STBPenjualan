<html>
<head>
	<title>Laporan Penjualan</title>
</head>
<body>
<br>
<br>
<br>
<form action="Laporan_Penjualan_Konsumen.php" method="post">
<select name="id_konsumen">
	<option>Pilih</option>
	<?php
    
    $link=mysqli_connect('localhost','root','','db_penjualan');
    $hasil = mysqli_query($link,"select * from konsumen");
    while ($row = mysqli_fetch_array($hasil)) { 
    echo "<option value='".$row['id_k']."'>".$row['id_k']."</option>";
       
    }
    ?>  
</select>
<button>Show</button>
</form> 
</body>
</html>