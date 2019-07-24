<?php
session_start();
      $id_do = $_POST['id_d'];
      $no = $_POST['no_do'];
      $tgl_do = $_POST['tgl_do'];
      $id = $_POST['id_k'];
      $nama = $_POST['nm_k'];
      $alamat = $_POST['alamat_k'];
      $telp = $_POST['telp_k'];
      $email = $_POST['email_k'];
      $no_po = $_POST['no_po'];
      $kode = $_POST['kode_brg'];
      $nm_brg = $_POST['nm_brg'];
      $jml = $_POST['jml_brg'];
      $satuan = $_POST['satuan'];

      $link=mysqli_connect('localhost','root','','db_penjualan');
      $query = "UPDATE delivery SET no_do='$no', tgl_do='$tgl_do', id_k='$id', nm_k='$nama', alamat_k='$alamat', telp_k='$telp', email_k='$email', no_po='$no_po', kode_brg='$kode', nm_brg='$nm_brg', jml_brg='$jml', satuan='$satuan' WHERE id='$id_do'";
      $query3= "INSERT INTO delivery_filter(nomor_do,do)VALUES('".$no."','1')";
      $query4= "INSERT INTO delivery_po(nomor_po,PO)VALUES('".$no_po."','1')";
      $hasil = mysqli_query($link,$query);
      $hasil3=mysqli_query($link,$query3);
      $hasil4=mysqli_query($link,$query4);
      if (!$hasil) {
        header('location:edit_delivery.php');
      }else{
            $_SESSION['pesan_do_ubah']=" ";
        header('location:delivery_order.php');
      }
?>
