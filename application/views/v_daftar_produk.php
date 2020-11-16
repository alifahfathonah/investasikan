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
									<h4 class="panel-title"><a href="index.php/member/bagi_hasil">Bagi Hasil</a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/member/perbaruan_investasi"><font color="orange">Perbaruan Investasi</font></a></h4>
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
							<h2 class="title text-center label-warning" style="color: #FC456A">Menu Profil</h2>
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/pemilik/produk/"><font color="FC456A">Produk Investasi</font></a></h4>
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
									<h4 class="panel-title"><a href="index.php/pemilik/bagi_hasil">Bagi Hasil</a></h4>
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
						
	    				<h2> </h2>
						<div class="table-responsive cart_info">
				<table class="table table-bordered">
					<thead>
						<a href="<?php echo base_url();?>index.php/pemilik/produk/tambah/" class="btn btn-danger" style="color: FC456A">Tambah Produk</a>
						<br /><br />
						<tr class="cart_menu" style="background-color: #FC456A">
							<td class="description">Kode Produk</td>
							<td class="description">Nama Produk</td>
							<td class="quantity">Harga</td>
							<td class="quantity">Stok Produk</td>
							<td class="total">Action</td>
						</tr>
					</thead>
					<tbody>
						<tr>
						

								<?php	
										$sql = "SELECT * FROM tbl_pemilik where nama_pemilik='$nama_member'";
										$rs  = $this->db->query($sql);
										foreach ($rs->result() as $key) {
											
										}

								?>


								<?php 

									$id_member=$key->id_pemilik;
									$data = "SELECT * FROM tbl_barang where id_pemilik = '$nama_member' order by kode_barang DESC";
									$result = $this->db->query($data);

										foreach ($result->result() as $row) {
											?>
							
							
							<td class="cart_description">
								<h4><?php echo $row->kode_barang; ?></h4>
							</td>
							<td class="cart_quantity">
								<p><?php echo $row->nama_barang; ?></p>
								
							</td>
							<td class="cart_quantity">
								<p><?php echo number_format($row->harga, 0); ?></p>
								
							</td>
							</td>
							<td class="cart_quantity">
								<p><?php echo number_format($row->stok, 0); ?></p>
								
							</td>
						<td>
							<a href="index.php/pemilik/produk/edit/<?php echo $row->kode_barang; ?>" class="btn btn-info">Edit</a> &nbsp; <a href="index.php/pemilik/produk/hapus/<?php echo $row->kode_barang; ?>" onclick = "return confirm('Anda ingin menghapus data ini??')" class="btn btn-success">Hapus</a>
						</td>
						</tr>
											<?php
		}

 ?>

					</tbody>
				</table><br /><br /><br />
			</div>
	    				    					
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