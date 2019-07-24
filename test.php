<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
$link = mysqli_connect('localhost','root','','db_penjualan');
$total=0;
$query="SELECT * from invoice where no_inv=1";
        $hasil=mysqli_query($link,$query);
        if (mysqli_num_rows($hasil) > 0) {
            
            while($lihat=mysqli_fetch_array($hasil)){
                $total+=$lihat['jml'];
               
            }
        }else{
        }
        ?>
        <?php echo $total; ?>
</body>
</html>
