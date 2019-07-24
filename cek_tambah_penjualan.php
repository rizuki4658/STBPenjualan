<?php
session_start();
  $link=mysqli_connect('localhost','root','','db_penjualan');
  
      $no = $_POST['no_po'];
      $tgl_po = $_POST['tgl_po'];
      $tgl = $_POST['tgl_deadline'];
      $id = $_POST['id_k'];
      $nama = $_POST['nm_k'];
      $alamat = $_POST['alamat_k'];
      $telp = $_POST['telp_k'];
      $email = $_POST['email_k'];
      $pekerjaan = $_POST['nm_pekerjaan'];
      $kode_brg = $_POST['kode_brg'];
      $nm_brg = $_POST['nm_brg'];
      $merk_brg = $_POST['merk_brg'];
      $spek_brg = $_POST['spek_brg'];
      $qty = $_POST['qty'];
      $satuan = $_POST['satuan'];
      $harga = $_POST['harga_satuan'];
      $jml = $_POST['jml'];
      $sub_total = $_POST['sub_total'];
      $ppn = $_POST['ppn'];
      $total = $_POST['total'];

      $query="SELECT * FROM penjualan WHERE no_po=$no";
      $hasil=mysqli_query($link,$query);
      if(mysqli_num_rows($hasil) > 0){
        $_SESSION['pesan_p_gagal']=" ";
        header('location:Tambah_Penjualan.php');
      }else{
      $query2 = "INSERT INTO penjualan(no_po,tgl_po,tgl_deadline,id_k,nm_k,alamat_k,telp_k,email_k,nm_pekerjaan,kode_brg,nm_brg,merk_brg,spek_brg,qty,satuan,harga_satuan,jml,sub_total,ppn,total) VALUES('".$no."','".$tgl_po."','".$tgl."','".$id."','".$nama."','".$alamat."','".$telp."','".$email."','".$pekerjaan."','".$kode_brg."','".$nm_brg."','".$merk_brg."','".$spek_brg."','".$qty."','".$satuan."','".$harga."','".$jml."','".$sub_total."','".$ppn."','".$total."')";
      $hasil2=mysqli_query($link,$query2);

      if (!$hasil2){
        $_SESSION['pesan_p_gagal']=" ";
        header('location:Tambah_Penjualan.php');
      }else{
        $_SESSION['pesan_p_berhasil']=" ";
        header("location:Penjualan.php");
      }
    }
?>