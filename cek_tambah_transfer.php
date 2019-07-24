<?php
  $link=mysqli_connect('localhost','root','','db_penjualan');
  
      $nomor = $_POST['no_referensi'];
      $invoice = $_POST['no_inv'];
      $tanggal = $_POST['tanggal'];
      $jumlah = $_POST['jml_bayar'];

      $query="SELECT * FROM transfer WHERE no_referensi=$nomor";
      $hasil=mysqli_query($link,$query);
      if(mysqli_num_rows($hasil) > 0){
        echo "Nomor Sudah Digunakan";
      }else{
      $query2 = "INSERT INTO transfer(no_referensi,no_inv,tanggal,jml_bayar) VALUES('".$nomor."','".$invoice."','".$tanggal."','".$jumlah."')";
      $hasil2=mysqli_query($link,$query2);

      if (!$hasil){
        echo "Data Gagal Disimpan!";
      }else{
        echo "Data Berhasil Disimpan!";
        header("location:Transfer.php");
      }
    }
?>