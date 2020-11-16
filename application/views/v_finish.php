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
								<li><a href="index.php/site/product"><i class="fa fa-star"></i> Investasi</a></li>
								<li><a href="index.php/site/panduan"><i class="fa fa-list"></i> Panduan</a></li>
								<li><a href="index.php/member/biling"><i class="fa fa-list"></i> Konfirmasi</a></li>
								
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a href="<?php echo base_url(); ?>index.php/member/account/"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fa fa-lock "></i>
								Keluar
								</a></li>

								<li><a class="active" href="index.php/member/biling"><i class="fa fa-suitcase"></i> Keranjang</a></li>
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

			
			<div class="checkout-options"><!-- 
				Kode Cart 	:<?php echo $kode_cart; ?> <br/>
				Total Belanja :<?php echo $total; ?> <br/>
				Jumlah Barang Yang di beli :<?php echo $jumlah_barang; ?> <br/> -->
			</div><!--/checkout-options-->

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu" style="">
							<td class="image">Photo</td>
							<td class="description">Nama Barang</td>
							<td class="description">Kode barang</td>
							<td class="quantity">Jumlah</td>
							<td class="price">Harga</td>
							<td class="total">Total</td>
							<td class="total">Action</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
						<?php 
						$sql = "SELECT * FROM tbl_cart where id_member='$id_member'";
						$rst = $this->db->query($sql);
						$total_belum = 0;
						foreach ($rst->result() as $row) : ?>
							
							<td class="cart_product">
								<?php   
                                         $image = array(
                                              'src' => 'application/views/photo/'.($row->photo_url),
                                              'class' => 'photo',
                                              'width' => '90',
                                              'height' => '50',
                                              'rel' => 'lightbox',
                                            ); echo img($image); ?>
							</td>
							<td class="cart_description">
								<h4><?php echo $row->nama_barang; ?></h4>
							</td>
							<td class="cart_price">
								<p><?php echo $row->kode_barang; ?></p>

							</td>
							<td class="cart_quantity">
								<p><?php echo $row->jumlah_barang; ?></p>
								
							</td>
							<td class="cart_quantity">
								<p><?php echo number_format($row->harga, 2); ?></p>
								
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format($row->total, 2); ?></p>
							</td>
						</tr>
					<?php $total_belum = $total_belum+$row->total; endforeach; ?>
						<tr>
							<td colspan="4">
								<h1>
									<div style="color:red">
										BELUM TERBAYAR !
									</div>

								</h1>
								Silahkan Melakukan konfirmasi <br/>
								Rekening Transfer (Fathurohman) 	: 	BRI 1232 - 3213232 - 2321312 - 32123 <br/>
								Kode Transaksi 	: 	<?php echo $row->kode_cart; ?> <br/>
								Total Investasi : Rp.<?php echo number_format($total_belum, 2); ?>
							</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Sub Total Investasi</td>
											<?php echo number_format($total_belum, 2); ?>
										<td>
										</td>
									</tr>
									<tr>
										<td>Total Investasi</td>
										<td><span>
											<?php echo number_format($total_belum, 2);
		                 
		                				 ?>
										</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	

  
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>