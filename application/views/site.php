<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Investasi Ikan</title>
    <base href="<?php echo base_url() ?>" />
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon" />
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
</head><!--/head-->

<body>
		
		<header id="header"><!--header-->		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<img src="assets/images/logo.jpg" alt="">
						<div class="logo pull-left">
							
						</div>
						<div class="btn-group pull-right">
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a class="active" href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
								<li><a href="<?= base_url()?>index.php/site/product"><i class="far fa-handshake"></i> Investasi</a></li>
								<li><a href="<?= base_url()?>index.php/site/panduan"><i class="fa fa-list"></i> Panduan</a></li>
								<?php 
									if($this->session->userdata('user')){
										?>
							
								<?php if($akses == "member"){ ?><li><a href="index.php/member/biling"><i class="fa fa-list"></i> Konfirmasi</a></li><?php } ?>
								<li><a href="<?php echo base_url(); ?>index.php/<?php echo $akses; ?>/account/"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fa fa-lock "></i>
								Keluar
								</a></li>
								<?php if($akses == "member"){ ?>
								<li><a href="index.php/member/biling"><i class="fa fa-suitcase"></i> Keranjang</a></li>
									<span class="badge bg-theme pull-left">
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
						?>
									</span>
								<?php } ?>
							</ul>
										<?php 
											}else{
												?>
								<li><a href="<?= base_url()?>index.php/member/login"><i class="fa fa-lock">
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
	<div class="jumbotron" style="background-image: url('assets/images/lele1.jpg') ">
  <h2 class="display-4" style="color: #ffffff">Selamat Datang Di Website Investasi Ikan</h2>
  <p class="lead">.</p>
  <hr class="my-4">
  <p style="color: #ffffff"><b> Website ini merupakan investasi online ikan air tawar pendek yang bekerjasama dengan pemilik lahan atau kolam<b></p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="<?= base_url()?>index.php/member/login" role="button" style="background-color: #FC456A">Investor</a>
    <a class="btn btn-primary btn-lg" href="<?= base_url()?>index.php/member/login" role="button" style="background-color: #74b9ff">Pemilik Lahan</a>
  </p>
</div>
	
	<section class="" id="aboutme"><h2 class="text-center"> Tentang Kita</h2>
<div class="bd-example">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/images/image1.jpg" class="d-block w-100" style="padding: 5px" alt="...">
						<div class="carousel-caption d-none d-md-block" style="padding: 10px;">
							<h5>Gambar Slide Yang Pertama</h5>
							<p>Gambar pemandangan sungai.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/images/image2.jpg" class="d-block w-100" style="padding: 5px " alt="...">
						<div class="carousel-caption d-none d-md-block" style="padding: 10px">
							<h5>Gambar Slide Yang Kedua</h5>
							<p>Gambar pemandangan sawah di desa.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/images/image3.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Gambar Slide Yang Ketiga</h5>
							<p>Gambar pemandangan taman belakang rumah.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>


</section>
			


	

<div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Fathurohman | Investasi Ikan <i class="icon-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank" ></a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>

        
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>