<?php
//buat dulu skrip koneksi kedatabase
$link=new mysqli("localhost","root","","db_penjualan");
	
//ingat, sebelumnya saya sudah memiliki data yang tersimpan di database

           if(isset($_POST['cari'])){ //Jika terpasang postingan dari "cari" maka
           $cari=$_POST['cari'];
           $cari=preg_replace("#[^a-z0-9]#i"," ", $cari);//fungsi ini untuk menghindari karakter selain dari huruf dan angka dengan mengubahnya menjadi spasi, misalkan karakter ' maka akan berubah menjadi space
           $data_pencarian=$link->query("SELECT * FROM barang WHERE kode_brg like '%$cari%' or nm_brg like '%$cari%' or merk_brg like '%$cari%' or spek_brg like '%$cari%' or satuan like '%$cari%'");
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
                    <th><center>Nama Barang</center></th>
                    <th><center>Merk Barang</center></th>
                    <th><center>Spesifikasi</center></th>
                    <th><center>Satuan</center></th>
                    <th><center>Harga</center></center></th>
                    <th><center>Edit | Hapus</center></th>
                </tr>
                <?php
                while($data = mysqli_fetch_array($data_pencarian)){?>
                <tr>
                	<td><center><?php echo $no++; ?></center></td>
                    <td><center><?php echo $data['nm_brg'];?></center></td>
                    <td><center><?php echo $data['merk_brg'];?></center></td>
                    <td><center><?php echo $data['spek_brg'];?></center></td>
                    <td><center><?php echo $data['satuan'];?></center></td>
                    <td><div align='right'><?php echo "Rp.". number_format($data['harga_brg'])?></div></td>
                    <td><center><a href=<?php echo "edit_barang.php?kode_brg=$data[kode_brg]";?> class='btn btn-warning btn-sm'>Edit</a> | <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_barang.php?kode_brg=$data[kode_brg]";?>" class="btn btn-danger btn-sm">Hapus</a></center></td>
                </tr>
                <?php }?>
            </table>
            <?php
        }else{
            echo 'Data tidak ditemukan';
        }
    }
    ?>