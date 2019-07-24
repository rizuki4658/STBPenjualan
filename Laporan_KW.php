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
        $this->Cell(20,10,"KWITANSI",0,0,'C');
        $this->Ln(5);
        $this->SetFont('Arial','B',10);
        $link = mysqli_connect('localhost','root','','db_penjualan');
        $no3=$_GET['Kwitansi'];
        $query2="SELECT * from kwitansi WHERE no_kw='$no3'";
        $hasil2=mysqli_query($link,$query2);
        $lihat2=mysqli_fetch_array($hasil2);
        $this->Cell(1,10,"No.".$lihat2['no_kw'],0,0,'C');
        //pindah baris
        $this->Ln(20);

    }
    
    //Page Content
    function Content()
    {


        $this->SetFont('Times','',11);
        $link = mysqli_connect('localhost','root','','db_penjualan');
        $no1=$_GET['Kwitansi'];
        $query1="SELECT * from kwitansi WHERE no_kw='$no1'";
       	$hasil1=mysqli_query($link,$query1);
        if (mysqli_num_rows($hasil1) > 0) {
        	$lihat1=mysqli_fetch_array($hasil1);
        	$this->Cell(35,5, "Telah Diterima Dari",0, 0, 'L');
        	$this->Line(50,70,180,70);
        	$this->Cell(5,5, ":",0, 0, 'C');
            $this->Cell(50,5, $lihat1['nm_k'],0, 0, 'L');
            $this->ln(10);
            include ('fungsi_terbilang.php');
            $uang = $lihat1['jml_byr'];
            $terbilang = ucwords(terbilang($uang));
            $this->Cell(35,5, "Terbilang",0, 0, 'L');
            $this->Line(50,80,180,80);
        	$this->Cell(5,5, ":",0, 0, 'C');
            $this->Cell(20,5, $terbilang." Rupiah");
            $this->ln(10);
            $this->Cell(35,5, "Untuk Pembayaran",0, 0, 'L');
            $this->Line(50,90,180,90);
        	$this->Cell(5,5, ":",0, 0, 'C');
            $this->Cell(30,5, $lihat1['nm_pekerjaan'],0, 0, 'L');
            $this->Line(10,100,180,100);
            $this->Line(10,110,180,110);
    		
           
        }else{
            $_SESSION['kosong']="display: inline;";
        }
        $this->Ln(50);
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
	        //$this->SetFont('Times','',9);
	        //nomor halaman
	        //$this->Cell(0,10,'Page '.$this->PageNo().' of {nb}',0,0,'R');
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