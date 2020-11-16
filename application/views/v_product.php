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
								<li><a class="active" href="index.php/site/product"><i class="far fa-handshake"></i> Investasi</a></li>
								<li><a href="index.php/site/panduan"><i class="fas fa-book"></i> Panduan</a></li>
								<?php if($akses == "member"){ ?> <li><a href="index.php/member/biling"><i class="fa fa-money"></i> Konfirmasi</a></li> <?php } ?>
								
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a href="<?php echo base_url(); ?>index.php/member/account/"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fas fa-power-off"></i>
								Keluar
								</a></li>
								
								<?php if($akses == "member"){ ?>
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

				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
					<?php foreach ($photo->result() as $row) { ?>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="col-item">
								<div class="panel panel-default font-sm" style="border: 0px;margin:0px;box-shadow: 0px 0px 8px #808080;height: 340px;overflow: hidden;">
									<div class="panel-header">
										<div class="photo">
											<img style="border:2px; width: 100%; min-height: 200px; max-height: 200px;" alt="a" src="<?php echo base_url(); ?>application/views/photo/<?php echo $row->photo_url; ?>">
										</div>
									</div>
									<div class="panel-body">
										<div class="info">
											<div class="row">
												<div class="price col-md-12">
													<h6><?php echo $row->nama_barang; ?></h6>
													<h5 class="price-text-color">Rp. <?php echo number_format($row->harga ,2) ?></h5>
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
						<input type="hidden" name="jumlah_barang" value="1" />
						<button type="submit" name="chart" class="btn btn-xs btn-fefault cart" style="background-color: #FC456A "><i class="fa fa-suitcase"></i> Tambah Ke Keranjang</button>
						
						<style type="text/css">
						button:hover{
							background: white;
						}
						a:hover{
							background: white;
						}
						</style>
						</form>
                                     <a href="index.php/site/detail/<?php echo $row->kode_barang ?>" class="btn btn-default btn-xs cart" style="background-color: #FC456A"><i class="fa fa-info-circle"></i> Detail</a>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
                                </div>
								<br />
                            </div>
                        </div>
					<?php } ?>
					<ul class="pagination">
                                <li class="active"></li>
							<li class=""><a href=""><?php echo $this->pagination->create_links(); ?></a></li>
						</ul>

                        </div>
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