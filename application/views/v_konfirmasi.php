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
								<li><a class="active" href="index.php/member/biling"><i class="fa fa-money"></i> Konfirmasi</a></li>
								
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a href="<?php echo base_url(); ?>index.php/member/account/"><i class="fa fa-user"></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fas fa-power-off"></i>
								Keluar
								</a></li>

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

								<li><a href="index.php/member/cart"><i class="fa fa-suitcase"></i> Keranjang</a></li>
									<span class="badge bg-theme"></span>
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
     
	<section id="cart_items">
		<div class="container">
			<div class="row">
				
<style type="text/css">
    .single:hover{
        background: #FE980F;

    }
    .b:hover{
        background: black
    }
    .harga:hover{
        color: white
    }

    .nama:hover{
        color: white
    }
</style>

				<div class="col-sm-12">
					<div class="features_items"><!--features_items-->
						
						<div class="tab-content">
<div class="tab-pane active" id="biodata">
 <form method="post" name="form1" action="index.php/member/insert_konfirmasi"  enctype="multipart/form-data"  onSubmit="return validasi(this)"/>
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">KONFIRMASI PEMBAYARAN KODE CART : <b> <?php echo $kode_cart ?> </b></th></tr>
        <tr>
          <td width="150">Kode Barang</td>
          <td>
            <div class='col-sm-2'>
              <input type='text' name='kode_cart' value="<?php echo $kode_cart ?>" style="color:red" class='form-control' required='required' disabled="disable">
              <input type="hidden" name="kode_cart" value="<?php echo $kode_cart ?>">
            </div>             

        <tr>
          <td>Nama Anda</td>
          <td>

              <div class="col-md-4">
              <input type='text' name='nama_member' disabled="disabled" class='form-control'  value='<?php echo $nama_member; ?>' >
              <?php	
										$sql = "SELECT * FROM tbl_member where nama_member='$nama_member'";
										$rs  = $this->db->query($sql);
										foreach ($rs->result() as $key) {
											
										}

								?>
								<input type="hidden" name="id_member" value="<?php echo $key->id_member ?>">
              </div>
            </td>
        </tr>

        <tr>
          <td>No Rekening</td>
          <td>
              <div class="col-md-5">
              <input type='text' name='no_rekening' placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>

         <tr>
          <td>Gambar</td>
          <td>
              <div class="fileupload fileupload-new" data-provides="fileupload">
        <div class="fileupload-new thumbnail"><img src="assets/images/bg.jpg" width="300" alt=""/>
        </div>
        <div class="fileupload-preview fileupload-exists thumbnail"></div>
        <div>
        <div class="col-sm-4 control-label">
            <span class="btn btn-light-grey btn-file"><span class="fileupload-new">
            <i class="fa fa-picture-o "></i> Select image</span><span class="fileupload-exists">
            <i class="fa fa-picture-o"></i> Change</span>
                <input type="file"name="userfile" id="file" required>
        
            <a href="<?php echo base_url(); ?>index.php/member/konfirmasi/<?php echo $this->uri->segment('3'); ?>" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                <i class="fa fa-times"></i> Remove
            </a>
  </span>
            </td>
        </tr>

        <tr>
        <td>Alamat Lengkap Pengiriman</td>
          <td><textarea name="keterangan" id="news"></textarea>
            <script type="text/javascript">
              var editor = CKEDITOR.replace('news');  
            </script>
          </td>
      </tr>
	  <tr>
		<td>&nbsp;</div>
		<td><input type="checkbox" name="persetujuan" value="menyetujui persyaratan" required> <a href="<?php echo base_url(); ?>index.php/site/syarat">Setuju</a></div>
	  </tr>
	  <tr>
		<td colspan="2"><input type="submit" name="submit" value="KIRIM" class="btn btn-success"></div>
	  </tr>

    </table><br /><br />
    
</div>


           </form>
              </div>

                        </div>
                        </div>


					
						
			</div>
		</div>
		</div>
		</div>
		</div>
	</section> 
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="pull-left">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-copyright"></i> Hakcipta � 2019 GIJ CORPORATION</a></li>
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
	