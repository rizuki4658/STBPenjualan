<?php
//buat dulu skrip koneksi kedatabase
$link=new mysqli("localhost","root","","db_penjualan");
	
//ingat, sebelumnya saya sudah memiliki data yang tersimpan di database

           if(isset($_POST['cari'])){ //Jika terpasang postingan dari "cari" maka
           $cari=$_POST['cari'];
           $cari=preg_replace("#[^a-z0-9]#i"," ", $cari);//fungsi ini untuk menghindari karakter selain dari huruf dan angka dengan mengubahnya menjadi spasi, misalkan karakter ' maka akan berubah menjadi space
           $data_pencarian=$link->query("SELECT * FROM delivery WHERE no_do like '%$cari%' or tgl_do like '%$cari%' or id_k like '%$cari%' or nm_k like '%$cari%' or alamat_k like '%$cari%' or telp_k like '%$cari%' or email_k like '%$cari%' or no_po like '%$cari%' or kode_brg like '%$cari%' or nm_brg like '%$cari%' or jml_brg like '%$cari%' or satuan like '%$cari%'");
           $halaman = 10;
           $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
           $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
           $total = mysqli_num_rows($data_pencarian);
           $pages = ceil($total/$halaman);
           $query = mysqli_query($link,"select * from delivery LIMIT $mulai, $halaman")or die(mysqli_error);
           $no =$mulai+1;

           if(mysqli_num_rows($data_pencarian) > 0){
            ?>
            <table class="table">
                <tr>
                    <td><center><b>No.</b></center></td>
                    <td><center><b>No. DO</b></center></td>
                    <td><center><b>Tanggal DO</b></center></td>
                    <td><center><b>No. PO</b></center></td>
                    <td><center><b>Kod. Barang</b></center></td>
                    <td><center><b>Nama Barang</b></td>
                    <td><center><b>Jumlah Barang</b></center></td>
                    <td><center><b>Satuan</b></center></td>
                    <td><center><b>Edit | Hapus</b></center></td>
                </tr>
                <?php
                while($data = mysqli_fetch_array($data_pencarian)){?>
                <tr>
                    <td><center><?php echo $no++; ?></center></td>
                    <td><center><?php echo $data['no_do'];?></center></td>
                    <td><center><?php echo $data['tgl_do'];?></center></td>
                    <td><center><?php echo $data['no_po'];?></center></td>
                    <td><center><?php echo $data['kode_brg'];?></center></td>
                    <td><center><?php echo $data['nm_brg'];?></center></td>
                    <td><div align="right"><?php echo $data['jml_brg'];?></div></td>
                    <td><center><?php echo $data['satuan'];?></center></td>
                    <td><center><a href=<?php echo "edit_delivery.php?id=$data[id]";?> class='btn btn-warning btn-sm'>Edit</a> | <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_delivery.php?id=$data[id]";?>" class="btn btn-danger btn-sm">Hapus</a></center></td>
                </tr>
                <?php }?>
            </table>
            <?php
        }else{
            echo 'Data tidak ditemukan';
        }
    }
    ?>