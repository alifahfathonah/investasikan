<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Investasi Ikan</title>
    <base href="<?php echo base_url(); ?>" />
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<img src="assets/images/logo.jpg" alt="">
						<div class="btn-group pull-right">
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
								<li><a href="index.php/site/product"><i class="far fa-handshake"></i> Investasi</a></li>
								<li><a href="index.php/site/panduan"><i class="fas fa-book"></i> Panduan</a></li>
								
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a class="active" href="<?php echo base_url(); ?>index.php/member/account/"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fas fa-power-off"></i>
								Keluar
								</a></li>

								
							</ul>
										<?php 
											}else{
												?>
								<li><a href="index.php/member/login"><i class="fa fa-lock">
								</i>
								<?php echo $nama_member; ?>
								</a></li>

								
							</ul>
												<?php
											}

										 ?>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2></h2>
						<?php if($akses == "member"){ ?>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a class="active" href="index.php/member/history_order">History Order</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/member/history_investasi">History Investasi</a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/member/perbaruan_investasi">Perbaruan Investasi</a></h4>
								</div>
							</div>
						</div>
						<?php
						}
						elseif($akses == "pemilik")
						{
						?>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
							<h2 style="color: #FC456A">Menu Profil</h2>
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/pemilik/produk/">Produk Investasi</a></h4>
								</div>
							</div>								
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/pemilik/stok/">Stok Produk Investasi</a></h4>
								</div>
							</div>	
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/pemilik/perbaruan/">Perbaruan Investasi</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/pemilik/history_order">Pemberitahuan Pemesanan</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/pemilik/bagi_hasil"><font color="#FC456A">Bagi Hasil</font></a></h4>
								</div>
							</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>
	
	 <div id="contact-page" class="container">
    	
    		<div class="row">  	
	    		<div class="col-sm-8">
						<br><br>
	    				<h2 class="title text-center" style="color: #FC456A">DAFTAR INVESTOR</h2>
						<div class="table-responsive cart_info">
				<table class="table table-bordered">
					<thead>
						<tr class="cart_menu">
							<td class="description">Kode Barang</td>
							<td class="description">Nama Barang</td>
							<td class="description">Jumlah Barang</td>
							<td class="quantity">Tanggal</td>
							<td class="total">Total</td>
							<td class="total">Nama Member</td>
							<td class="total">Action</td>
						</tr>
					</thead>
					<tbody>
						<?php 
									$data = "SELECT * FROM tbl_barang where id_pemilik = '$nama_member'";
									$result = $this->db->query($data);

										foreach ($result->result() as $row) {
											$d_invest = "SELECT * FROM tbl_cart WHERE kode_barang = '$row->kode_barang' AND konfirmasi='1' ORDER BY tanggal_belanja DESC";
											$r_invest = $this->db->query($d_invest);
											foreach ($r_invest->result() as $row_invest) {
												$d_member = "SELECT nama_member FROM tbl_member WHERE id_member='$row_invest->id_member'";
												$r_member = $this->db->query($d_member)->row();
											?>
							<tr>
											<td class="cart_description">
								<h4><?php echo $row_invest->kode_barang; ?></h4>
							</td>
							<td class="cart_quantity">
								<p><?php echo $row_invest->nama_barang; ?></p>
								
							</td>
							<td class="cart_quantity">
								<p><?php echo $row_invest->jumlah_barang; ?></p>
								
							</td>
							<td class="cart_quantity">
								<p><?php echo $row_invest->tanggal_belanja; ?></p>
								
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format($row_invest->total, 2); ?></p>
							</td>
							<td>
								<p><?php echo $r_member->nama_member; ?></p>
							</td>
							<td>
								<a href="index.php/pemilik/bagi_hasil/lihat/<?php echo $row_invest->id_cart; ?>" class="btn btn-danger">Lihat</a>
							</td>
							<!-- perintah konfirmasi bila iya maka terbayar -->
							
											<?php
								}

							 ?>
						</tr>
											<?php
		}

 ?>

					</tbody>
				</table>
			</div>
	    				    					
	    			</div>
	    		</div>
	    		
	    				
	    	</div> 	
    </div><!--/#contact-page-->
	</section> <!--/#cart_items-->

	<!--/#do_action-->

  
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>