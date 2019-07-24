<?php 

require('menu_atas.php'); ?>

<div style="background-image: url('gambar/Desktop.gif'); 
      height: 250px;
      background-repeat: no-repeat; 
      background-position: center;
      ">
      <div align="left"><?php require('dropdown.php'); ?></div>
  
  <center>
    <p style="text-align: center;
      font-family: sans-serif;
      color: #ffffff;">

      <img src="gambar/logo hi res5.png" width="150" height="150">
      <nav aria-label="Page navigation example">
  
    </p>
    <br>
    <div style="height: 768px;">
<center>
  <h1>Silahkan isi data di bawah ini!</h1>
  <br>
  <div class="alert alert-danger" role="alert" style="<?php
    if(isset($_SESSION['pesan_adm_gagal'])){
    echo " ";
    unset($_SESSION['pesan_adm_gagal']);
    }else{
    echo "display: none;";  
    }
    ?>">Gagal di tambahkan<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </div>

  <br>
  <form action="cek_register.php" method="Post" enctype="multipart/form-data">
    <table>
      <tr>
      <td>Username&nbsp;&nbsp;</td>
      <td>:&nbsp;&nbsp;</td>
      <td><input name="username" type="text" class="form-control"></td>
      </tr>

      <tr>
        <td colspan="3"><br></td>
      </tr>


      <tr>
        <td>Password&nbsp;&nbsp;</td>
        <td>:&nbsp;&nbsp;</td>
        <td><input name="password" type="password" class="form-control"></td>
      </tr>

      <tr>
        <td colspan="3"><br></td>
      </tr>

      <tr>
      <td>Nama&nbsp;&nbsp;</td>
      <td>:&nbsp;&nbsp;</td>
      <td><input name="nama" type="text" class="form-control"></td>
      </tr>

      <tr>
        <td colspan="3"><br></td>
      </tr>

      <tr>
      <td>Email&nbsp;&nbsp;</td>
      <td>:&nbsp;&nbsp;</td>
      <td><input name="email" type="text" class="form-control"></td>
      </tr>

      <tr>
        <td colspan="3"><br></td>
      </tr>

      <tr>
      <td>Foto&nbsp;&nbsp;</td>
      <td>:&nbsp;&nbsp;</td>
      <td><input type="file" name="file" class="form-control"></td>
      </tr>

      <tr>
        <td colspan="3"><br></td>
      </tr>

      <tr>
      <td colspan="3">
        <p align="right"><input type="submit" class="btn btn-primary btn-sm" value="Daftar" name="daftar" onclick="('Admin ditambahkan !')">&nbsp;
        <input type="reset" class="btn btn-light btn-sm" value="Batal" name="daftar"></p>
      </td>
      </tr>
    </table>
  </form>
  
</div>
</center>
</div>

<script src="jquery-3.3.1.js"></script>
  <script src="bootstrap 4/js/bootstrap.js"></script>
    <script src="bootstrap 4/js/bootstrap.min.js"></script>

<?php require('modal_filter.php');?>

<?php require('menu_bawah.php');?>