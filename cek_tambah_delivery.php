<?php
session_start();
  $link=mysqli_connect('localhost','root','','db_penjualan');
  
      $id_do = $_POST['id'];
      $no = $_POST['no_do'];
      $tgl_do = $_POST['tgl_do'];
      $id = $_POST['id_ko'];
      $nama = $_POST['nm_k'];
      $alamat = $_POST['alamat_k'];
      $telp = $_POST['telp_k'];
      $email = $_POST['email_k'];
      $no_po = $_POST['no_po'];
      $kode = $_POST['kode_bar'];
      $nama = $_POST['nm_brg'];
      $jml = $_POST['jml_brg'];
      $satuan = $_POST['satuan'];

      $query="SELECT * FROM delivery WHERE id='$id_do'";
      $hasil=mysqli_query($link,$query);
      if(mysqli_num_rows($hasil) > 0){
        echo "Nomor Sudah Digunakan";
      }else{
      $query2 = "INSERT INTO delivery(id,no_do, tgl_do, id_k, nm_k, alamat_k, telp_k, email_k, no_po, kode_brg, nm_brg, jml_brg, satuan) VALUES('".$id_do."','".$no."','".$tgl_do."','".$id."','".$nama."','".$alamat."','".$telp."','".$email."','".$no_po."','".$kode."','".$nama."','".$jml."','".$satuan."')";
      $query3= "INSERT INTO delivery_filter(nomor_do,do)VALUES('".$no."','1')";
      $query4= "INSERT INTO delivery_po(nomor_po,PO)VALUES('".$no_po."','1')";
      $hasil2=mysqli_query($link,$query2);
      $hasil3=mysqli_query($link,$query3);
      $hasil4=mysqli_query($link,$query4);
      if (!$hasil2){
        echo "Data Gagal Disimpan!";
      }else{
        $_SESSION['pesan_do_berhasil']=" ";
        header("location:delivery_order.php");
      }
    }
?>