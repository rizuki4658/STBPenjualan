<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['ses_user']) OR !isset($_SESSION['ses_pass']) ){ //cek apakah user sudah login
    $_SESSION['pesan']= " ";
        header("location:Index.php");
    } else {

    $link=mysqli_connect("localhost","root","","db_penjualan");
    $user=$_SESSION['ses_user'];
    $login=mysqli_query($link,"SELECT * FROM admin WHERE username = '$user'");
    $t=mysqli_fetch_array($login);

    }
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>SI | PENJUALAN</title>
    <link href='gambar/logo hi res.jpg' rel='shortcut icon'>
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    
    <script src="jquery-3.3.1.js"></script>
   
  <style type="text/css">
    .navbar-inversenew {
    background-color:transparent;
    font-size:15px;
    border-color: none;
    border-width: none;
    border-radius: none;
    height: 2px;
    }
    .navbar-inverse {
    background-color:#696969;
    font-size:15px;
    border-color: #DCDCDC;
    border-width: 2px;
    border-radius: 5px;
    height: 2px;
    }
      .container1 {
    width: 400px;
    margin: auto;
}
.dropdown-menu .sub-menu {
    left: 100%;
    margin-top: 1px;
    position: absolute;
    top: 2px;
    visibility: hidden;
}

.dropdown-menu li:hover .sub-menu {
    visibility: visible;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.navbar .sub-menu:before {
    border-bottom: 7px solid transparent;
    border-left: none;
    border-right: 7px solid rgba(0, 0, 0, 0.2);
    border-top: 7px solid transparent;
    left: -7px;
    top: 10px;
}
.navbar .sub-menu:after {
    border-top: 6px solid transparent;
    border-left: none;
    border-right: 6px solid #fff;
    border-bottom: 6px solid transparent;
    left: 10px;
    top: 11px;
    left: -6px;
}
</style>

  </head>
  <body>
