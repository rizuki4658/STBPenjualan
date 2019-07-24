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
        $this->Cell(1,10,"Laporan Penjualan",0,0,'L');
        $this->Ln(5);
        $this->SetFont('Arial','B',10);
        
        $this->Cell(1,10,"Periode.".date('d M Y'),0,0,'L');
       
        $this->Ln(20);

    }
    //Page Content
    function Content()
    {


        $this->SetFont('Arial','B',10);
        $this->SetX(10);
        $this->Cell(10,5,"No",1,0,'C');
        $this->Cell(20,5,"Nomor PO",1,0,'C');
        $this->Cell(120,5,"Nama Barang",1,0,'C');
        $this->Cell(30,5,"Jumlah",1,0,'C');
        $this->Ln();
        $this->SetFont('Times','',10);
        $link = mysqli_connect('localhost','root','','db_penjualan');
        $no=1;
        $sub=0;
        $tg1=$_POST['dari'];
        $tg2=$_POST['sampai'];
        $query1="SELECT * from penjualan WHERE tgl_po>='$tg1' AND tgl_po<='$tg2'";
       	$hasil1=mysqli_query($link,$query1);
        if (mysqli_num_rows($hasil1) > 0) {
        while($lihat1=mysqli_fetch_array($hasil1)){
            	
            $this->Cell(10,5, $no , 1, 0, 'C');
            $this->Cell(20,5, $lihat1['no_po'],1, 0, 'C');
            $this->Cell(120,5, $lihat1['nm_brg'],1, 0, 'C');
            $sub+=$lihat1['jml'];
            $this->Cell(30,5, "Rp. ".number_format($lihat1['jml']),1, 0, 'C');
            
            $this->ln(5);
            $no++;
            }
            $ppn= $sub *0.1;
            $tot=$sub+$ppn;
            $this->SetX(40);
            $this->Cell(150,5,"Sub Total",1,0,'L');
            $this->SetX(86);
            $this->Cell(100,5,"Rp. ".number_format($sub),0, 0, 'R');
            $this->ln(5);
            $this->SetX(40);
            $this->Cell(150,5,"PPN 10%",1,0,'L');
            $this->SetX(86);
            $this->Cell(100,5,"Rp. ".number_format($ppn),0, 0, 'R');
            $this->ln(5);
            $this->SetX(40);
            $this->Cell(150,5,"Total",1,0,'L');
            $this->SetX(86);
            $this->Cell(100,5,"Rp. ".number_format($tot),0, 0, 'R');
            
        }else{
            $_SESSION['kosong']="display: inline;";
        }
        
        $this->Ln(25);
        $this->SetX(130);
        $this->Cell(1,10,"Bandung, ".date("d M Y"),0,0,'L');
        $this->Ln(5);
        $this->SetX(130);
        $this->Cell(1,10,"PT. Solusi Teknis Bandung",0,0,'L');
        $this->Ln(35);
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