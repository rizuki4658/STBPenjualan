
<nav class="navbar navbar-inversenew">
<div class="container-fluid">
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav">
    <li class="active"><a href="Menu.php" style="color: white; background-color:transparent;">Beranda</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" 
      	style="color: white; background-color:transparent; border-color: white; border-width: 1px;">Master
      <span class="caret"></span></a>
      <ul class="dropdown-menu"  
      		style="color: white; background-color:transparent; border-radius: 5px; border-color: white; border-width: 1px;">
        <li><a style="color: #DCDCDC; background-color:auto;" href="list_barang.php">Barang</a></li>
        <li><a style="color: #DCDCDC; background-color:auto;" href="Konsumen.php">Konsumen</a></li>
        <li><a style="color: #DCDCDC; background-color:auto;" href="Penjualan.php">Penjualan</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" 
      	style="color: white; background-color:transparent; border-color: white; border-width: 1px;">Transaksi
      <span class="caret"></span></a>
      <ul class="dropdown-menu" 
      	style="color: transparent; background-color:transparent; border-radius: 5px;  border-color: white; border-width: 1px;">
        <li><a style="color: #DCDCDC; background-color:auto;" href="delivery_order.php">Delivery Order</a></li>
        <li><a style="color: #DCDCDC; background-color:auto;" href="invoice.php">Invoice</a></li>
        <li><a style="color: #DCDCDC; background-color:auto;" href="kwitansi.php">Kwitansi</a></li>
        <li><a style="color: #DCDCDC; background-color:auto;" href="transfer.php">Transfer</a></li>
      </ul>
    </li>
    
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" 
      	style="color: white; background-color:transparent; border-color: white; border-width: 1px;">Laporan
      <span class="caret"></span></a>
      <ul class="dropdown-menu" 
      	style="color: transparent; background-color:transparent;  border-radius: 5px; border-color: white; border-width: 1px;">
        <li>
          <a style="color: #DCDCDC; background-color:auto;" 
            data-toggle="modal" data-target="#ModalDO" href="#">Laporan Delivery</a></li>
        <li>
          <a style="color: #DCDCDC; background-color:auto;" 
            data-toggle="modal" data-target="#ModalINV" href="#">Laporan Invoice</a></li>
        <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color: #DCDCDC; background-color:auto;">Laporan Penjualan<i class="caret"></i></a>
       
            <ul class="dropdown-menu sub-menu" style="color: transparent; background-color:transparent; border-radius: 5px;  border-color: white; border-width: 1px;">
                <li><a style="color: #DCDCDC; background-color:auto;" data-toggle="modal" data-target="#ModalNPO" href="#">Nomor PO</a></li>
                <li><a style="color: #DCDCDC; background-color:auto;" data-toggle="modal" data-target="#ModalTGPO" href="#">Tanggal PO</a></li>
                <li><a style="color: #DCDCDC; background-color:auto;" data-toggle="modal" data-target="#ModalTGDL" href="#">Tanggal Deadline</a></li>
                <li><a style="color: #DCDCDC; background-color:auto;" data-toggle="modal" data-target="#ModalK" href="#">Konsumen</a></li>
                <li><a style="color: #DCDCDC; background-color:auto;" data-toggle="modal" data-target="#ModalBB" href="#">Barang</a></li>
            </ul>
        </li>
     
      </li>
      </ul>
    </li>




    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" 
      style="color: white; background-color:transparent; border-radius: 5px; border-color: white; border-width: 1px;">Pengaturan
      <span class="caret"></span></a>
      <ul class="dropdown-menu" 
      style=" color: transparent; background-color:transparent; border-radius: 5px; border-color: white; border-width: 1px;">
        <li><a style="color: #DCDCDC; background-color:auto;" href="Admin.php">Administrator</a></li>
      </ul>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white; background-color:transparent;">
      	<img src="file/<?php echo $_SESSION['ses_foto'];?>" class="img img-circle img-sm" style="width: 50px;">&nbsp;<?php echo $_SESSION['ses_user'];?>
      <span class="caret"></span></a>
      <ul class="dropdown-menu" style="color: transparent; background-color:transparent; border-radius: 5px; border-color: white; border-width: 1px;">
        <li><a style="color: #DCDCDC; background-color:auto;" href="logout.php?OP=Out">Logout</a></li>
      </ul>
    </li>
  </ul>
</div>
</div>
</nav>