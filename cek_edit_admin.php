<?php
  session_start();
 $link=mysqli_connect('localhost','root','','db_penjualan');
  
      $username = $_POST['username'];
      $password = $_POST['password'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      
      $diperbolehkan=array('png','jpg');
      $nama_foto=$_FILES['file']['name'];
      $x = explode('.', $nama_foto);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      if (in_array($ekstensi, $diperbolehkan)===true) {
        if ($ukuran <10000000) {
          $select="SELECT * FROM admin WHERE username='$username'";
          $hasil=mysqli_query($link, $select);
          
          move_uploaded_file($file_tmp, 'file/'.$nama_foto);
          $query = "UPDATE admin SET password='$password', nama='$nama', email='$email', foto='$nama_foto' WHERE username ='$username'";
          $hasil2 = mysqli_query($link,$query);
          
          if (!$hasil2){
            
            $_SESSION['pesan']="display:inline;";
            header("location:edit_admin.php");
              
            }else{
              $_SESSION['pesan_adm_ubah']=" ";
              header("location:Admin.php");
            }    
        }else{
          $_SESSION['pesan2']="display:inline;";
          header("location:edit_admin.php");
          
        }
      }else{
          $_SESSION['pesan2']="display:inline;";
          header("location:edit_admin.php");
      }
?>