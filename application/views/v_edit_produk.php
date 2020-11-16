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
								<li><a href="index.php/site/product"><i class="fa fa-home"></i> Investasi</a></li>
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
						<h2 style="color: #FC456A">Menu Profil</h2>
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
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/pemilik/produk/"><font color="orange">Produk Investasi</font></a></h4>
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
									<h4 class="panel-title"><a href="index.php/pemilik/history_order">Perbaruan Order</a></h4>
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

	    				<h2 class="title text-center" style="color: #FC456A">EDIT PRODUK INVESTASI</h2>
						<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<?php echo form_open_multipart('') ?>
										<table class="table table-bordered">
    <?php foreach ($data->result() as $row) : ?>
    	
        <tr class="success"><th colspan="2">EDIT DATA PRODUK INVESTASI</th></tr>
        <tr>
          <td width="150">Kode Produk</td>
          <td>
            <input type='text' name='kode_barang' value="<?php echo $row->kode_barang ?>" style="color:red" class='form-control' required='required' disabled="disable">
              <input type="hidden" name="kode_barang" value="<?php echo $row->kode_barang ?>">
            
        <tr>
          <td>Nama Produk</td>
          <td>
              <input type='text' name='nama_barang' placeholder='Nama Produk' class='form-control'  value="<?php echo $row->nama_barang ?>">
              
            </td>
        </tr>

        <tr>
          <td>Harga</td>
          <td>
              <input type='number' name='harga' placeholder='Harga' class='form-control' value="<?php echo $row->harga ?>" >
              </td>
        </tr>

         <tr>
           <td>Gambar</td>
          <td>
              <div class="fileupload fileupload-new" data-provides="fileupload">
        <div class="fileupload-new thumbnail"><?php       
										            $image = array(
										              'src' => 'application/views/photo/'.($row->photo_url),
										              'class' => 'photo',
										              'width' => '140',
										              'height' => '80',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
        </div>
        <div class="fileupload-preview fileupload-exists thumbnail"></div>
        <div>
         <span class="btn btn-light-grey btn-file"><span class="fileupload-new">
            <i class="fa fa-picture-o "></i> Select image</span><span class="fileupload-exists">
            <i class="fa fa-picture-o"></i> Change</span>
                <input type="file" name='userfile' id="file" value="">
        
            <a href="<?php echo base_url(); ?>index.php/pemilik/produk/edit/<?php echo $this->uri->segment('4'); ?>" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                <i class="fa fa-times"></i> Remove
            </a>
  </span>
            </td>

        <tr>
        <td>Keterangan</td>
          <td><textarea name="keterangan" id="news"><?php echo $row->keterangan ?></textarea>
            <script type="text/javascript">
              var editor = CKEDITOR.replace('news');  
            </script>
          </td>
      </tr>
<?php endforeach; ?>
    </table>
										<input type="submit" name="edit" class="btn btn-success pull-right" value="Simpan">
									</form>
									<br/>
									<br/>
									<br/>
								</div>
							</div>
	    		</div>
	    		
	    				
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	</section> <!--/#cart_items-->

	<!--/#do_action-->

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