<?php
session_start();
  $link=mysqli_connect('localhost','root','','db_penjualan');
  if(!$link) {
    die('ada error'.mysql_connect_error());
  }
  if($_POST['daftar']){
      $time=time();
      $username = $_POST['username'];
      $password = $_POST['password'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $diperbolehkan=array('png','jpg');
      $nama_foto = $_FILES['file']['name'];
      $x = explode('.', $nama_foto);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      if (in_array($ekstensi, $diperbolehkan)===true) {
        if ($ukuran <10000000) {
          $select="SELECT * FROM admin WHERE username='$username'";
          $hasil=mysqli_query($link, $select);
          if (mysqli_num_rows($hasil) > 0) {
             $_SESSION['pesan_adm_gagal']=" ";
            header("location:register.php");
          }else{
          move_uploaded_file($file_tmp, 'file/'.$nama_foto);
          $query = "INSERT INTO admin(username,password,nama,email,foto) VALUES('".$username."','".$password."','".$nama."','".$email."','".$nama_foto."')";

            if (mysqli_query($link, $query)){
            $_SESSION['pesan_adm_berhasil']=" ";
            header("location:Admin.php");
            }    
          }
        }else{
          $_SESSION['pesan_adm_gagal']=" ";
          echo "Ukuran terlalu besar";
        }
      }else{
        $_SESSION['pesan_adm_gagal']=" ";
        echo "Format file tidak sesuai";
      }
    }
?>