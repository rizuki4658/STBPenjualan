<?php
session_start();
      $kode = $_POST['kode_brg'];
      $nama = $_POST['nm_brg'];
      $merk = $_POST['merk_brg'];
      $spek = $_POST['spek_brg'];
      $satuan = $_POST['satuan'];
      $harga = $_POST['harga_brg'];

      $link=mysqli_connect('localhost','root','','db_penjualan');
      $query = "UPDATE barang SET nm_brg='$nama', merk_brg='$merk', spek_brg='$spek', satuan='$satuan', harga_brg='$harga' WHERE kode_brg='$kode'";

      $hasil = mysqli_query($link,$query);
      if (!$hasil) {
        echo "Data Gagal Diubah!";
      }else{
        $_SESSION['pesan_brg_ubah']=" ";
        header("location:list_barang.php");
      }

      mysqli_close($link)

?>