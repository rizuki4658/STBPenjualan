<?php
  $link=mysqli_connect('localhost','root','','db_penjualan');
  
      $nomor = $_POST['no_kw'];
      $no_ref = $_POST['no_referensi'];
      $tanggal = $_POST['tgl_kw'];
      $id = $_POST['id_k'];
      $nama = $_POST['nm_k'];
      $pekerjaan = $_POST['nm_pekerjaan'];
      $jumlah = $_POST['jml_byr'];

      $query="SELECT * FROM kwitansi WHERE no_kw=$nomor";
      $hasil=mysqli_query($link,$query);
      if(mysqli_num_rows($hasil) > 0){
        echo "Nomor Sudah Digunakan";
      }else{
      $query2 = "INSERT INTO kwitansi(no_kw,no_referensi,tgl_kw,id_k,nm_k,nm_pekerjaan,jml_byr) VALUES('".$nomor."','".$no_ref."','".$tanggal."','".$id."','".$nama."','".$pekerjaan."','".$jumlah."')";
      $hasil2=mysqli_query($link,$query2);

      if (!$hasil2){
        echo "Data Gagal Disimpan!";
      }else{
        echo "Data Berhasil Disimpan!";
        header("location:Kwitansi.php");
      }
    }
    mysqli_close($link);
?>