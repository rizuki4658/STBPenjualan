<?php
//buat dulu skrip koneksi kedatabase
$link=new mysqli("localhost","root","","db_penjualan");
	
//ingat, sebelumnya saya sudah memiliki data yang tersimpan di database

           if(isset($_POST['cari'])){ //Jika terpasang postingan dari "cari" maka
           $cari=$_POST['cari'];
           $cari=preg_replace("#[^a-z0-9]#i"," ", $cari);//fungsi ini untuk menghindari karakter selain dari huruf dan angka dengan mengubahnya menjadi spasi, misalkan karakter ' maka akan berubah menjadi space
           $data_pencarian=$link->query("SELECT * FROM barang WHERE no_referensi like '%$cari%' or no_inv like '%$cari%' or tanggal like '%$cari%'");
           $halaman = 10;
           $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
           $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
           $total = mysqli_num_rows($data_pencarian);
           $pages = ceil($total/$halaman);
           $query = mysqli_query($link,"select * from barang LIMIT $mulai, $halaman")or die(mysqli_error);
           $no =$mulai+1;

           if(mysqli_num_rows($data_pencarian) > 0){
            ?>
            <table class="table">
                <tr>
                    <th><center>No.</center></th>
                    <th><center>No. Referensi</center></th>
                    <th><center>No. Invoice</center></th>
                    <th><center>Tanggal</center></th>
                    <th><center>Jumlah Bayar</center></th>
                    <th><center>Edit | Hapus</center></th>
                </tr>
                <?php
                while($data = mysqli_fetch_array($data_pencarian)){?>
                <tr>
                	<td><center><?php echo $no++; ?></center></td>
                    <td><center><?php echo $data['no_referensi'];?></center></td>
                    <td><center><?php echo $data['no_inv'];?></center></td>
                    <td><center><?php echo $data['tanggal'];?></center></td>
                    <td><div align='right'><?php echo $data['jml_byr'];?></div></td>
                    <td><center><a href=<?php echo "edit_transfer.php?no_referensi=$data[no_referensi]";?> class='btn btn-warning btn-sm'>Edit</a> | <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_transfer.php?no_referensi=$data[no_referensi]";?>" class="btn btn-danger btn-sm">Hapus</a></center></td>
                </tr>
                <?php }?>
            </table>
            <?php
        }else{
            echo 'Data tidak ditemukan';
        }
    }
    ?>