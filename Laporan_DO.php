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
        $link = mysqli_connect('localhost','root','','db_penjualan');
        $no_d=$_GET['Kondisi'];
        $no_p=$_GET['Kondisi_2'];
        $query="SELECT * from delivery WHERE no_do= '$no_d' AND no_po='$no_p'";
        $hasil=mysqli_query($link,$query);
        $lihat=mysqli_fetch_array($hasil);
        $this->Cell(1,10,"DELIVERY ORDER",0,0,'L');
        $this->Ln(5);
        $this->SetFont('Arial','B',10);
        $this->Cell(1,10,"No.".$lihat['no_do'],0,0,'L');
        $this->SetX(120);
        $this->SetFont('Arial','',10);
        $this->Cell(1,10,"Perusahaan : ".$lihat['nm_k'],0,0,'L');
        $this->Ln(5);
        $this->SetX(120);
        $this->Cell(1,10,"Alamat         : ".$lihat['alamat_k'],0,0,'L');
        $this->Ln(5);
        $this->SetX(120);
        $this->Cell(1,10,"Telepon       : ".$lihat['telp_k'],0,0,'L');
        $this->Ln(5);
        $this->SetX(120);
        $this->Cell(1,10,"Email           : ".$lihat['email_k'],0,0,'L');
       
        //pindah baris
        $this->Ln(20);

    }
 
    //Page Content
    function Content()
    {


        $this->SetFont('Arial','B',10);
        $this->SetX(10);
        $this->Cell(10,5,"No",1,0,'C');
        $this->Cell(100,5,"Nama Barang",1,0,'C');
        $this->Cell(30,5,"Satuan",1,0,'C');
        $this->Cell(30,5,"Jumlah Barang",1,0,'C');
        $this->Ln();
        $this->SetFont('Times','',10);
        
        $no=1;
        $link = mysqli_connect('localhost','root','','db_penjualan');
        $no_d=$_GET['Kondisi'];
        $no_p=$_GET['Kondisi_2'];

        $query="SELECT * from delivery WHERE no_do= '$no_d' AND no_po='$no_p'";
        $hasil=mysqli_query($link,$query);
        if (mysqli_num_rows($hasil) > 0) {
            while($lihat=mysqli_fetch_array($hasil)){
            $this->Cell(10,5, $no , 1, 0, 'C');
            $this->Cell(100,5, $lihat['nm_brg'],1, 0, 'C');
            $this->Cell(30,5, $lihat['satuan'], 1, 0,'C');
            $this->Cell(30,5, $lihat['jml_brg'],1, 0, 'C');
            $this->ln();
            $no++;
                }
            
        }else{
            $_SESSION['kosong']="display: inline;";
        }
        $this->Ln(5);
        $this->SetX(10);
        $this->SetFont('Arial','',10);
        $this->Cell(1,10,"Bandung, ".date("d M Y"),0,0,'L');
        $this->Ln(5);
        $this->SetX(10);
        $this->Cell(1,10,"Delivered by,",0,0,'L');
        $this->SetX(120);
        $this->Cell(1,10,"Received by,",0,0,'L');
        $this->Ln(20);
        $this->SetX(10);
        $this->Ln(15);
        $this->SetX(10);
        $this->Cell(1,10,"(.......................................................)",0,0,'L');
        $this->SetX(120);
        $this->Cell(1,10,"(.......................................................)",0,0,'L');

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
