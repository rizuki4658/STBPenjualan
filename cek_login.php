<?php
session_start();

$link=mysqli_connect("localhost","root","","db_penjualan");

$v_user    = $_POST['User']; //membuat variabel, dimana email diambil dari nama text di kelas login
$v_pass     = $_POST['Pass']; //membuat variabel, dimana password diambil dari nama text di kelas login
$OP         = $_GET['OP']; //membuat variabel, dimana OP dibaca di action di kelas login


if($OP=="in"){ //kondisi apakah login
    $query="SELECT * FROM admin WHERE username='$v_user' AND password='$v_pass'";
    $cek    = mysqli_query($link,$query);
   
    if(mysqli_num_rows($cek)==1){ //jika berhasil akan bernilai 1
        $c      = mysqli_fetch_array($cek);
        $_SESSION['ses_user']  = $c['username'];
        $_SESSION['ses_pass']   = $c['password'];
        $_SESSION['ses_foto']   = $c['foto'];

        header("location:menu.php"); 
        
    }else{ //jika tidak bernilai 1 maka akan gagal login
        
         $_SESSION['pesan']= " ";
        header("location:Index.php");
}
}else if($OP=="out"){ //kondisi apakah logout
    unset($_SESSION['ses_user']);
    unset($_SESSION['ses_password']);
    header("location:Index.php");
}
?>