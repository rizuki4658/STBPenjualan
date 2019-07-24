<?php
 session_start();
require('phpfpdf/fpdf.php');
        
       
 		

class PDF extends FPDF
{
    //Page header
    function Header()
    {
        //Logo
        $this->Image('gambar/514-3.jpg',105,2,100,20);
        
        $this->Line(10,25,200,25);
        
        $this->SetFont('Arial','B',15);
        
        $this->Cell(80);
        $this->Ln(30);
        $this->Cell(1,10,"INVOICE",0,0,'L');
        $this->Ln(5);
        $this->SetFont('Arial','B',10);
        $link = mysqli_connect('localhost','root','','db_penjualan');
        $no_d=$_GET['Kondisi1'];
        $no_p=$_GET['Kondisi2'];
        $query2="SELECT * from invoice WHERE no_inv='$no_d' AND no_po='$no_p'";
         $hasil2=mysqli_query($link,$query2);
        $lihat2=mysqli_fetch_array($hasil2);

        $this->Cell(1,10,"No.".$lihat2['no_inv'],0,0,'L');
        $this->SetX(120);
        $this->SetFont('Arial','',10);
        $this->Cell(1,10,"Perusahaan : ".$lihat2['nm_k'],0,0,'L');
        $this->Ln(5);
        $this->SetX(120);
        $this->Cell(1,10,"Alamat         : ".$lihat2['alamat_k'],0,0,'L');
        $this->Ln(5);
        $this->SetX(120);
        $this->Cell(1,10,"Telepon       : ".$lihat2['telp_k'],0,0,'L');
        $this->Ln(5);
        $this->SetX(120);
        $this->Cell(1,10,"Email           : ".$lihat2['email_k'],0,0,'L');
       
        //pindah baris
        $this->Ln(20);

    }
    //Page Content
    function Content()
    {


        $this->SetFont('Arial','B',10);
        $this->SetX(10);
        $this->Cell(10,5,"No",1,0,'C');
        $this->Cell(60,5,"Nama Barang",1,0,'C');
        $this->Cell(20,5,"Satuan",1,0,'C');
        $this->Cell(20,5,"Kuantitas",1,0,'C');
        $this->Cell(30,5,"Harga Barang",1,0,'C');
        $this->Cell(30,5,"Jumlah",1,0,'C');
        $this->Ln();
        $this->SetFont('Times','',10);
        $link = mysqli_connect('localhost','root','','db_penjualan');
        $no=1;
        $sub=0;
        $no1=$_GET['Kondisi1'];
        $no2=$_GET['Kondisi2'];
        $query1="SELECT * from invoice WHERE no_inv='$no1' AND no_po='$no2'";
       	$hasil1=mysqli_query($link,$query1);
        if (mysqli_num_rows($hasil1) > 0) {
        while($lihat1=mysqli_fetch_array($hasil1)){
            	
            $this->Cell(10,5, $no , 1, 0, 'C');
            $this->Cell(60,5, $lihat1['nm_brg'],1, 0, 'C');
            $this->Cell(20,5, $lihat1['satuan'], 1, 0,'C');
            $this->Cell(20,5, $lihat1['qty'],1, 0, 'C');
            $this->Cell(30,5, "Rp. ".number_format($lihat1['harga_satuan']),1, 0, 'C');
            $sub+=$lihat1['jml'];
            $this->Cell(30,5, "Rp. ".number_format($lihat1['jml']),1, 0, 'C');
            
            $this->ln(5);
            $no++;
            }
            $ppn= $sub *0.1;
            $tot=$sub+$ppn;
            $this->SetX(120);
            $this->Cell(60,5,"Sub Total     :     "."Rp. ".number_format($sub),1, 0, 'L');

            $this->ln(5);
            $this->SetX(120);
            $this->Cell(60,5,"PPN 10%     :      "."Rp. ".number_format($ppn),1,0,'L');
            $this->ln(5);
            $this->SetX(120);
            $this->Cell(60,5,"Total     :      "."Rp. ".number_format($tot),1,0,'L');
            
        }else{
            $_SESSION['kosong']="display: inline;";
        }
        $this->Ln(5);
        $this->SetX(10);
        $this->SetFont('Arial','',10);
       
        $this->SetX(10);
        $this->Cell(1,10,"Transfer ke Rekening :",0,0,'L');
        $this->Ln(5);
        $this->Cell(1,10,"Bank BRI KC. Soekarno-Hatta",0,0,'L');
        $this->Ln(5);
        $this->Cell(1,10,"No. Rekening : XXX-XXXXX-XXXXX",0,0,'L');
        $this->Ln(5);
        $this->Cell(1,10,"Atas Nama : PT. Solusi Teknis Bandung",0,0,'L');
        $this->SetX(130);
        $this->Cell(1,10,"Bandung, ".date("d M Y"),0,0,'L');
        $this->Ln(5);
        $this->SetX(130);
        $this->Cell(1,10,"PT. Solusi Teknis Bandung",0,0,'L');
        $this->Ln(25);
        $this->SetX(120);
        $this->Cell(1,10,"(.........................................................)",0,0,'L');

    }
  //Page footer
	function Footer()
	    {
	        //atur posisi 1.5 cm dari bawah
	        $this->SetY(-15);
	        //buat garis horizontal
	        $this->Line(10,$this->GetY(),200,$this->GetY());
	        //Arial italic 9
	        $this->SetFont('Times','',9);
	        //nomor halaman
	        $this->Cell(0,10,'Page '.$this->PageNo().' of {nb}',0,0,'R');
	    }
	}
 
//contoh pemanggilan class
$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content();
$pdf->Output();
?>


$pdf->Output();


?>
