<?php
session_start();
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

      $link=mysqli_connect('localhost','root','','db_penjualan');
      $query = "UPDATE penjualan SET tgl_po='$tgl_po', tgl_deadline='$tgl', id_k='$id', nm_k='$nama', alamat_k='$alamat', telp_k='$telp', email_k='$email', nm_pekerjaan='$pekerjaan', kode_brg='$kode_brg', nm_brg='$nm_brg', merk_brg='$merk_brg', spek_brg='$spek_brg',qty='$qty', satuan='$satuan', harga_satuan='$harga', jml='$jml', sub_total='$sub_total', ppn='$ppn', total='$total' WHERE no_po='$no'";

      $hasil = mysqli_query($link,$query);
      if (!$hasil) {
        header('location:edit_penjualan.php');
      }else{
        $_SESSION['pesan_p_ubah']=" ";    
        header("location:Penjualan.php");
      }
?>
