<?php
  session_start();
  $link=mysqli_connect('localhost','root','','db_penjualan');

  
      $kode_brg = $_POST['kode_brg'];
      $nm_brg = $_POST['nm_brg'];
      $merk_brg = $_POST['merk_brg'];
      $spek_brg = $_POST['spek_brg'];
      $satuan = $_POST['satuan'];
      $harga_brg = $_POST['harga_brg'];

      $query="SELECT * FROM barang WHERE kode_brg=$kode_brg";
      $hasil=mysqli_query($link,$query);
      if(mysqli_num_rows($hasil) > 0){
        $_SESSION['pesan_brg_gagal']="display:inline;";
        header("location:tambah_barang.php");
      }else{
      if ($kode_brg ="" ||$nm_brg ="" || $merk_brg="" || $spek_brg ="" || $satuan="" || $harga_brg="") {
            $_SESSION['pesan_brg_kosong']="display:inline;";
            header("location:tambah_barang.php");
      }
      $query2 = "INSERT INTO barang(kode_brg,nm_brg,merk_brg,spek_brg
      ,satuan,harga_brg) VALUES('".$kode_brg."','".$nm_brg."','".$merk_brg."','".$spek_brg."','".$satuan."','".$harga_brg."')";
      $hasil2=mysqli_query($link,$query2);
        if (!$hasil){
        $_SESSION['pesan_brg_gagal']="display:inline;";
        header("location:tambah_barang.php");
         }else{
            $_SESSION['pesan_brg_berhasil']=" ";
            header("location:list_barang.php");
      }
    }
?>
