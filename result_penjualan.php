<?php
//buat dulu skrip koneksi kedatabase
$link=new mysqli("localhost","root","","db_penjualan");
	
//ingat, sebelumnya saya sudah memiliki data yang tersimpan di database

           if(isset($_POST['cari'])){ //Jika terpasang postingan dari "cari" maka
           $cari=$_POST['cari'];
           $cari=preg_replace("#[^a-z0-9]#i"," ", $cari);//fungsi ini untuk menghindari karakter selain dari huruf dan angka dengan mengubahnya menjadi spasi, misalkan karakter ' maka akan berubah menjadi space
           $data_pencarian=$link->query("SELECT * FROM penjualan WHERE no_po like '%$cari%' or tgl_po like '%$cari%' or tgl_deadline like '%$cari%' or id_k like '%$cari%' or nm_pekerjaan like '%$cari%' or kode_brg like '%$cari%' or harga_satuan like '%$cari%' or jml like '%$cari%' or sub_total like '%$cari%' or ppn like '%$cari%' or total like '%$cari%'");
           $halaman = 10;
           $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
           $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
           $total = mysqli_num_rows($data_pencarian);
           $pages = ceil($total/$halaman);
           $query = mysqli_query($link,"select * from penjualan LIMIT $mulai, $halaman")or die(mysqli_error);
           $no =$mulai+1;

           if(mysqli_num_rows($data_pencarian) > 0){
            ?>
            <table class="table">
                <tr>
                    <th><center>No.</center></th>
                    <th><center>Tanggal PO</center></th>
                    <th><center>Tanggal Deadline</center></th>
                    <th><center>ID Konsumen</center></th>
                    <th><center>Nama Pekerjaan</center></th>
                    <th><center>Kode Barang</center></th>
                    <th><center>Harga Satuan</center></th>
                    <th>Jumlah</th>
                    <th>Sub Total</th>
                    <th>PPN</td>
                    <th><center>Total</center></th>
                    <th><center>Edit | Hapus</center></th>
                </tr>
                <?php
                while($data = mysqli_fetch_array($data_pencarian)){?>
                <tr>
                	<td><center><?php echo $no++; ?></center></td>
                    <td><center><?php echo $data['tgl_po'];?></center></td>
                    <td><center><?php echo $data['tgl_deadline'];?></center></td>
                    <td><center><?php echo $data['id_k'];?></center></td>
                    <td><center><?php echo $data['nm_pekerjaan'];?></center></td>
                    <td><center><?php echo $data['kode_brg'];?></center></td>
                    <td><div align='right'><?php echo "Rp.". number_format($data['harga_satuan']);?></div></td>
                    <td><center><?php echo "Rp.". number_format($data['jml']);?></center></td>
                    <td><center><?php echo "Rp.". number_format($data['sub_total']);?></center></td>
                    <td><center><?php echo "Rp.". number_format($data['ppn']);?></center></td>
                    <td><div align="right"><?php echo "Rp.". number_format($data['total']);?></div></td>
                    <td><center><a href=<?php echo "edit_penjualan.php?no_po=$data[no_po]";?> class='btn btn-warning btn-sm'>Edit</a> | <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_penjualan.php?no_po=$data[no_po]";?>" class="btn btn-danger btn-sm">Hapus</a></center></td>
                </tr>
                <?php }?>
            </table>
            <?php
        }else{
            echo 'Data tidak ditemukan';
        }
    }
    ?>