<?php
session_start();
      $id_D = $_POST['id'];
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

      $link=mysqli_connect('localhost','root','','db_penjualan');
      $query = "UPDATE invoice SET no_inv='$no', tgl_inv='$tgl_inv', no_po='$no_po', id_k='$id_k', nm_k='$nama', alamat_k='$alamat', telp_k='$telp', email_k='$email', nm_pekerjaan='$pekerjaan', kode_brg='$kode_brg', nm_brg='$nm_brg', merk_brg='$merk_brg', spek_brg='$spek_brg',qty='$qty', satuan='$satuan', harga_satuan='$harga', jml='$jml', sub_total='$sub_total', ppn='$ppn', total='$total' WHERE id='$id_D'";
      $query3= "INSERT INTO invoice_filter(nomor_inv,INV)VALUES('".$no."','1')";
      $query4= "INSERT INTO invoice_po(nomor_po,PO)VALUES('".$no_po."','1')";
      $hasil = mysqli_query($link,$query);
      $hasil3 = mysqli_query($link,$query3);
      $hasil4 = mysqli_query($link,$query4);
      if (!$hasil) {
        header('location:edit_invoice.php');
      }else{
        $_SESSION['pesan_inv_ubah']=" ";
        header('location:invoice.php');
      }
?>
