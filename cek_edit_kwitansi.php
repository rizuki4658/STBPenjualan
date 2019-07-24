<?php
      $nomor = $_POST['no_kw'];
      $no_ref = $_POST['no_referensi'];
      $tanggal = $_POST['tgl_kw'];
      $id = $_POST['id_k'];
      $nama = $_POST['nm_k'];
      $pekerjaan = $_POST['nm_pekerjaan'];
      $jumlah = $_POST['jml_byr'];

      $link=mysqli_connect('localhost','root','','db_penjualan');
      $query = "UPDATE kwitansi SET no_referensi='$no_ref', tgl_kw='$tanggal', id_k='$id', nm_k='$nama', nm_pekerjaan='$pekerjaan', jml_byr='$jumlah' WHERE no_kw ='$nomor'";

      $hasil = mysqli_query($link,$query);
      if (!$hasil) {
        echo "data gagal";
      }else{
        header("location:Kwitansi.php");
      }

      mysqli_close($link)
?>