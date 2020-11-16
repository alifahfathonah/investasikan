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
						
						<div class="btn-group pull-right">
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
								<li><a href="index.php/site/product"><i class="fa fa-star"></i> Investasi</a></li>
								<li><a class="active" href="index.php/site/panduan"><i class="fa fa-list"></i> Panduan</a></li>
								<?php if($akses == "member"){ ?> <li><a href="index.php/member/biling"><i class="fa fa-money"></i> Konfirmasi</a></li> <?php } ?>
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a href="#"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fa fa-lock "></i>
								Keluar
								</a></li>

								<?php
								if($akses == "member"){ ?>
								<li><a href="index.php/member/biling"><i class="fa fa-suitcase"></i> Keranjang</a></li>
									<span class="badge bg-theme">
									<?php 

									$sql = "SELECT * FROM tbl_member where nama_member='$nama_member'";
									$sts = $this->db->query($sql);
									foreach ($sts->result() as $keys) {
										# code...
									}

									$data="SELECT * FROM tbl_cart WHERE id_member='$keys->id_member' AND konfirmasi='' "; 
							$rs=$this->db->query($data);
							$jml=$rs->num_rows();
							echo $jml;
								}
						?>
									</span>
									
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
					<h1></h1>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url(); ?>index.php/site/panduan/">Cara Berinvestasi</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url(); ?>index.php/site/panduan/pemilik"><font color="orange">Cara Menjadi Pemilik Lahan</font></a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url(); ?>index.php/site/panduan/saran">Saran dan Kritik</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url(); ?>index.php/site/syarat">Syarat dan Ketentuan</a></h4>
								</div>
							</div>
						</div><!--/category-products-->					
					</div>
				</div>
	
	 <div id="contact-page" class="container">
    	
    		<div class="row">  	
	    		<div class="col-sm-9">
					<center><h3>CARA MENJADI PEMILIK LAHAN</h3></center>
					Masuk halaman home SRIPILAN.ID
					<br /><img src="<?php echo base_url(); ?>assets/images/1.PNG"><br />
					Masuk halaman login atau daftar, pilih menu pemilik lahan
					<br /><img src="<?php echo base_url(); ?>assets/images/p2.PNG"><br />
					Masuk ke halaman profil, lalu pilih produk investasi klik tambah
					<br /><img src="<?php echo base_url(); ?>assets/images/p3.PNG"><br />
					Isikan data keterangan produk investasi, lalu simpan
					<br /><img src="<?php echo base_url(); ?>assets/images/p4.PNG"><br />
					Tambah stok investasi, di menu profil klik simpan
					<br /><img src="<?php echo base_url(); ?>assets/images/p5.PNG"><br />
					Isi data konfirmasi, klik selesai dan tunggu sampe admin selesai melakukan konfirmasi pembayaran
					<br /><img src="<?php echo base_url(); ?>assets/images/6.PNG"><br />
				</div>
			</div>
	    		
	    				
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	</br>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="pull-left">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-copyright"></i> Hakcipta © 2019 GIJ CORPORATION</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>  08818252423</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Sripilanid@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="pull-right">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>