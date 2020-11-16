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
						<img src="assets/images/logo.jpg" alt="">
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
									<h4 class="panel-title"><a href="<?php echo base_url(); ?>index.php/site/panduan/pemilik">Cara Menjadi Pemilik Lahan</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url(); ?>index.php/site/panduan/saran">Saran dan Kritik</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url(); ?>index.php/site/syarat"><font color="orange">Syarat dan Ketentuan</font></a></h4>
								</div>
							</div>
						</div><!--/category-products-->					
					</div>
				</div>
	
	 <div id="contact-page" class="container">
    	
    		<div class="row">  	
	    		<div class="col-sm-9">
					<center><h3>SYARAT DAN KETENTUAN</h3></center>
					<div align="justify">
					Pihak Pertama : Investor<br />
Pihak Kedua  : Pemilik Lahan<br />
Pihak pertama dan pihak kedua harus sepakat melakukan perjanjian dengan melakukan check box di halaman konfirmasi pembayaran dan tambah produk investasi, jika anda sudah melakukan check box maka anda sudah setuju dengan syarat dan ketentuan kami. Jika melanggar akan ada pasal-pasal sebagai berikut  :<br />
Syarat dan Ketentuan :<br /><br />
INVESTOR :<br />
<li>Investor harus mengirimkan uang modal awal kepada pihak admin dengan cara membayar transaksi pembelian di menu konfirmasi.</li>
<li>Harus menaati peraturan dan kontrak bagi hasil yang kami berikan.</li><br />
PEMILIK LAHAN :<br />
<li>Pemilik lahan harus mengirimkan pemberitahuan data perkembangan investasi kepada investor setiap harinya untuk mengetahui proses pendapatan atau telor yang dihasilkan.</li>
<li>Pemilik lahan harus mengirimkan hasil dana pendapatan (bagi hasil) kepada investor, melalui admi setiap satu bulan sekali kepada pihak kami.</li>
<li>Pemilik lahan harus dapat menghasilakan minimal 20 telor dalam satu bulan per ayam. </li>
<li>Harus menaati peraturan dan kontrak bagi hasil yang kami berikan.</li>
<div align="center">P A S A L   1</div><br />Jika investor tidak mengirimkan uang modal investasi dalam waktu yang ditentukan maka investasi tersebut di tiadakan.<br />
<div align="center">P A S A L   2</div><br />Jika investor dan pemilik lahan tidak menaati peraturan yang kami berikan, maka akan dikenakan sanksi berupa blokir akun.<br />
<div align="center">P A S A L   3</div><br />Jika pihak pemilik lahan tidak memberikan laporan pemberitahuan investasi kepada pemilik lahan, dalam satu minggu maka proses investasi akan dibatalkan dan akan di kenakan sanksi berupa denda dua kali lipat modal investasi.<br />
<div align="center">P A S A L   4</div><br />Jika pihak pemilik lahan tidak mengirimkan hasil dana pendapatan (bagi hasil) kepada investor, melalui admin. Maka akan dibatalkan dengan persetujuan investor, serta dikenakan sanksi berupa denda dua kali lipat modal investasi atau pelaporan ke pihak yang berwajib.<br />
<div align="center">P A S A L   5</div><br />Pemilik lahan harus dapat menghasilakan minimal 20 telor dalam satu bulan per ayam dengan kondisi sehat, jika kondisi ayam tidak sehat maka pemilik lahan harus mengirimkan pemberitahuan kepada investor. Jika tidak maka akan dikenakan sanksi berupa pemblokiran akun dan pembatalan investasi dengan konfirmasi pihak investor.<br />
<div align="center">P A S A L   6</div><br />Bagi hasil yang diberlakukan disini adalah Jika hasil transaksi keuangan pada laporan laba-rugi dalam keadaan profit (untung) maka bagi hasil akan dibagi dengan komposisi Investor  sebesar 45% dan Pemilik lahan sebesar 55%. Jika hasil transaksi keuangan dalam keadaan tidak memperoleh keuntungan maka Investor tidak akan menuntut apapun Pemilik lahan.<br /><br /><br />

					</div>
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