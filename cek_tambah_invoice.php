<?php
session_start();
  $link=mysqli_connect('localhost','root','','db_penjualan');
  
      $id = $_POST['id'];
      $no = $_POST['no_inv'];
      $tgl_inv = $_POST['tgl_inv'];
      $no_po = $_POST['no_po'];
      $id_k = $_POST['id_k'];
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

      $query="SELECT * FROM invoice WHERE id=$id";
      $hasil=mysqli_query($link,$query);
      if(mysqli_num_rows($hasil) > 0){
        echo "Nomor Sudah Digunakan";
      }else{
      $query2 = "INSERT INTO invoice(id,no_inv,tgl_inv,no_po,id_k,nm_k,alamat_k,telp_k,email_k,nm_pekerjaan,kode_brg,nm_brg,merk_brg,spek_brg,qty,satuan,harga_satuan,jml,sub_total,ppn,total) VALUES('".$id."','".$no."','".$tgl_inv."','".$no_po."','".$id_k."','".$nama."','".$alamat."','".$telp."','".$email."','".$pekerjaan."','".$kode_brg."','".$nm_brg."','".$merk_brg."','".$spek_brg."','".$qty."','".$satuan."','".$harga."','".$jml."','".$sub_total."','".$ppn."','".$total."')";
      $query3= "INSERT INTO invoice_filter(nomor_inv,INV)VALUES('".$no."','1')";
      $query4= "INSERT INTO invoice_po(nomor_po,PO)VALUES('".$no_po."','1')";
      $hasil2=mysqli_query($link,$query2);
      $hasil3=mysqli_query($link,$query3);
      $hasil4=mysqli_query($link,$query4);
      if (!$hasil2){
        header("location:tambah_invoice.php");
      }else{
        $_SESSION['pesan_inv_berhasil']=" ";
        header("location:invoice.php");
      }
    }
?>