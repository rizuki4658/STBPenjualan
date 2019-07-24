<?php
      $nomor = $_POST['no_referensi'];
      $invoice = $_POST['no_inv'];
      $tanggal = $_POST['tanggal'];
      $jumlah = $_POST['jml_bayar'];

      $link=mysqli_connect('localhost','root','','db_penjualan');
      $query = "UPDATE transfer SET no_inv='$invoice', tanggal='$tanggal', jml_bayar='$jumlah' WHERE no_referensi ='$nomor'";

      $hasil = mysqli_query($link,$query);
      if (!$hasil) {
        echo "data gagal";
      }else{
        header("location:Transfer.php");
      }

      mysqli_close($link)
?>