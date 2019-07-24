<!DOCTYPE html>
<html>
<head>
<?php session_start(); ?>
	<title>SI | PENJUALAN</title>
	<link href='gambar/logo hi res.jpg' rel='shortcut icon'>
  	<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    
    <script src="jquery-3.3.1.js"></script>
</head>
<body>
	<div>
		<br>
		<br>
		<br>
		<br>
		<center>
			&nbsp;&nbsp;<img src="gambar/logo hi res3.jpg" width="150" height="140">
			<form action="cek_login.php?OP=in" method="Post">
				<table>
					<tr>
						<td>
							<br>
							<div class="input-group"><span class="input-group-addon" id="sizing-addon2">
		                    	<img src="gambar/user2.png" width="18" height="18"></font></span>
		                    	<input type="text" name="User" class="form-control" placeholder="@username"></div>
		                    <p></p>
		                    <div class="input-group"><span class="input-group-addon" id="sizing-addon2">
		                      	<img src="gambar/unlocked.png" width="20" height="20"></span>
		                      	<input type="password" name="Pass" class="form-control" placeholder="@Password"></div>
		                     <div class="alert" style="<?php
								if(isset($_SESSION['pesan'])){
 									echo $_SESSION['pesan'];
	 								unset($_SESSION['pesan']);
									}else{
									echo "display:none;";	
									}
									?>">
		                    		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
		                    		<font class="text-danger">login gagal ! coba lagi</font>
		                			</div>
		                	<div class="alert" style="<?php
								if(isset($_SESSION['pesan1'])){
 									echo $_SESSION['pesan1'];
	 								unset($_SESSION['pesan1']);
									}else{
									echo "display:none;";	
									}
									?>">
		                    		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
		                    		<font class="text-danger">Anda Belum Login !</font>
		                			</div>
		                		<?php if (isset($_SESSION['pesan'])) {
		                			echo "<br>";
		                		}else{echo "";} ?>
		                	<br>
                      		<p align="right">					
							<button type="submit" class="btn btn-success btn-sm">Login</button></p>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>

<?php
  require ('menu_bawah.php');
 ?>