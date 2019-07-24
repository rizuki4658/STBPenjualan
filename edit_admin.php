
<?php session_start(); ?>
<?php require('menu_atas.php'); ?>

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
      <br>
<div style="height: 768px;">
  <center>
    <h1></h1>
  <h1>Edit Data Admin</h1>
  <p>Silahkan isi data di bawah ini!</p>
<?php
  $link=mysqli_connect('localhost','root','','db_penjualan');

  $username= $_GET['username'];
  $query="SELECT * FROM admin WHERE username='$username'";
  $hasil = mysqli_query($link,$query);
  if (mysqli_num_rows($hasil) > 0){

    while ($data = mysqli_fetch_assoc($hasil)) {
    echo "<form action='cek_edit_admin.php' method='post' enctype='multipart/form-data'>
        <td colspan='3'><input value='".$data['username']."' name='username' type='hidden' class='form-control'>
    <table>
      <tr>
        <td>Password&nbsp;&nbsp;</td>
        <td>:&nbsp;&nbsp;</td>
        <td><input value='".$data['password']."' name='password' type='password' class='form-control'></td>
      </tr>

      <tr>
        <td colspan='3'><br></td>
      </tr>
      
      
      <tr>
        <td>Nama&nbsp;&nbsp;</td>
        <td>:&nbsp;&nbsp;</td>
        <td><input value='".$data['nama']."' name='nama' type='text' class='form-control'></td>
      </tr>

      <tr>
        <td colspan='3'><br></td>
      </tr>
      
      <tr>
        <td>Email&nbsp;&nbsp;</td>
        <td>:&nbsp;&nbsp;</td>
        <td><input value='".$data['email']."' name='email' type='text' class='form-control'></td>
      </tr>

      <tr>
        <td colspan='3'><br></td>
      </tr>
      
      <tr>
        <td>Foto&nbsp;&nbsp;</td>
        <td>:&nbsp;&nbsp;</td>
        <td><input type='file' name='file' value='".$data['foto']."' class='form-control'></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td colspan='3'><p align='right'>";?>
          <br>
          <input type='submit' name='edit' value='Edit' class='btn btn-warning btn-sm' onclick="return confirm('Anda yakin mengubah data !')">&nbsp;
         <a href="Admin.php" class="btn btn-primary btn-sm">Batal</a></p></td>
      </tr>
    </table>
  </form>
<?php
}
}
?>

 <div class="alert" style="<?php
                if(isset($_SESSION['pesan'])){
                  echo $_SESSION['pesan'];
                  unset($_SESSION['pesan']);
                  }else{
                  echo "display:none;"; 
                  }
                  ?>">
     <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
     <font class="text-danger">Edit gagal ! coba lagi</font>
  </div>

  <div class="alert" style="<?php
                if(isset($_SESSION['pesan2'])){
                  echo $_SESSION['pesan2'];
                  unset($_SESSION['pesan2']);
                  }else{
                  echo "display:none;"; 
                  }
                  ?>">
     <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
     <font class="text-danger">format gambar atau ukuran tidak sesuai !</font>
  </div>
</center>
</div>
<?php require('modal_filter.php');?>

<?php require('menu_bawah.php'); ?></div>