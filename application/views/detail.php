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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
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
								<li><a class="active" href="index.php/site/product"><i class="far fa-handshake"></i> Investasi</a></li>
								<li><a href="index.php/site/panduan"><i class="fa fa-list"></i> Panduan</a></li>
								<?php if($akses == "member"){ ?> <li><a href="index.php/member/biling"><i class="fa fa-money"></i> Konfirmasi</a></li> <?php } ?>
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a href="<?php echo base_url(); ?>index.php/<?php echo $akses; ?>/account/"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fa fa-lock "></i>
								Logout
								</a></li>
										<?php 
											}else{
												?>
								<li><a href="index.php/member/login"><i class="fa fa-lock"></i>
								<?php echo $nama_member; ?>
								</a></li>
												<?php
											}

										 ?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
							<?php foreach ($data->result() as $row) : ?>
								<?php   
                                         $image = array(
                                              'src' => 'application/views/photo/'.($row->photo_url),
                                              'class' => 'photo',
                                              'width' => '300',
                                              'height' => '380',
                                              'rel' => 'lightbox',
                                            ); echo img($image); ?>
								<h3>ZOOM</h3>

							<?php endforeach; ?>	
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<!-- <div class="item active">
										  <a href=""><img src="assets/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div> -->
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="assets/images/product-details/new.jpg" class="newarrival" alt="" />
								
									<h2><?php echo $row->nama_barang ?></h2>
								Kode barang : <?php echo $row->kode_barang ?>
								<img src="assets/images/product-details/rating.png" alt="" />
								
								<span>
									<span>Rp. <?php echo number_format($row->harga,2)  ?></span>
									<?php echo form_open('site/cart'); ?>
<!-- mengambil id member -->
<?php 
			error_reporting(0);

	$sql = "SELECT * FROM tbl_member where nama_member='$nama_member'";
	$rs  = $this->db->query($sql);
	foreach ($rs->result() as $v ){
		
	}
			error_reporting(0);

 ?>
<!--  -->

				<input type="hidden" name="kode_barang" value="<?php echo $row->kode_barang; ?>">
				<input type="hidden" name="id_member" value="<?php echo $v->id_member; ?>">
				<input type="hidden" name="harga" value="<?php echo $row->harga; ?>">
				<input type="hidden" name="nama_barang" value="<?php echo $row->nama_barang; ?>">
				<input type="hidden" name="photo_url" value="<?php echo $row->photo_url; ?>">

			<?php if($akses == "member"){ ?> <button type="submit" name="chart" class="btn btn-fefault cart" style="background-color: #FC456A">
				<i class="fa fa-shopping-cart"></i>
				Add to cart
			</button>
			<?php } ?>
			<?php echo form_close() ?>
		</span>
		<p><b>STOK &nbsp; &nbsp;&nbsp;:</b> &nbsp;<?php echo $row->stok; ?><input type="hidden" name="jumlah_barang" value="<?php echo $row->stok ?>" /></p>
		<?php
		$pemilik = "SELECT * FROM tbl_pemilik where nama_pemilik='$row->id_pemilik'";
		$d_pemilik  = $this->db->query($pemilik)->row();
		?>
		<p><b>Pemilik &nbsp; &nbsp;&nbsp;:</b> &nbsp;<?php echo $row->id_pemilik; ?></p>
		<p><b>KTP &nbsp; &nbsp;&nbsp;:</b> &nbsp;<a target="_blank" href="<?php echo base_url(); ?>application/views/photo/pemilik/<?php echo $d_pemilik->photo_ktp; ?>">Lihat</a></p>
		<p><b>SIUP &nbsp; &nbsp;&nbsp;:</b> &nbsp;<a target="_blank" href="<?php echo base_url(); ?>application/views/photo/pemilik/<?php echo $d_pemilik->photo_siup; ?>">Lihat</a></p>
		<p><b>Lain-lain &nbsp; &nbsp;&nbsp;:</b> &nbsp;<a target="_blank" href="<?php echo base_url(); ?>application/views/photo/pemilik/<?php echo $d_pemilik->photo_lainnya; ?>">Lihat</a></p>
		
	
		</p>
		<p><b>Keterangan :</b> <?php echo $row->keterangan; ?></p>
		<a href=""><img src="assets/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
	</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Sripilan</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i><?php echo date('d'.'-'.'m'.'-'.'y') ?></a></li>
									</ul>
									<p>Silahkan berkomentar di from ini</p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="assets/images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right" style="background-color: #FC456A">
											Submit
										</button>
									</form>
									<br/>
									<br/>
									<br/>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	
	
	

  
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>