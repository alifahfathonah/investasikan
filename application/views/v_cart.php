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
								<li><a href="index.php/member/biling"><i class="fa fa-list"></i> Konfirmasi</a></li>
								
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a href="<?php echo base_url(); ?>index.php/member/account/"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fas fa-power-off"></i>
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
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu" style="background-color: #FC456A">
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
										$sql = "SELECT * FROM tbl_member where nama_member='$nama_member'";
										$rs  = $this->db->query($sql);
										foreach ($rs->result() as $key) {
											
										}

								?>


								<?php 

									$id_member=$key->id_member;
									$data = "SELECT * FROM tbl_cart where id_member = '$id_member' and konfirmasi='' ";
									$result = $this->db->query($data);
$totalinvestasi = 0;
$jml_barang = 0;
										foreach ($result->result() as $row) {
											?>
							
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
							<td class="cart_total">
								<p class="cart_total_price">Rp. <?php echo number_format($row->harga,2); ?></p>
							</td>

							<td class="cart_total">
								<p class="cart_total_price">Rp. <?php echo number_format($row->total,2); ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="index.php/site/edit_beli/<?php echo $row->id_cart; ?>"><i class="fa fa-pencil"></i></a>
								<a class="cart_quantity_delete" href="index.php/site/hapus_beli/<?php echo $row->id_cart; ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
											<?php
											$totalinvestasi = $totalinvestasi+$row->total;
											$jml_barang = $jml_barang+$row->jumlah_barang;
		}

 ?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Apa yang anda lakukan selanjutnya ?</h3>
				<p>Silahkan transfer ke rekening yang tertera di bawah ini sertakan struk pembayaran</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							
							<table>
								<tr>
									<td>Nama Member</td>
									<td>:</td>
									<td><?php echo $nama_member ?></td>
								</tr>
								<tr>
									<td>Rekening Transfer (Fathurohman)</td>
									<td>:</td>
									<td>BRI 1232 - 3213232 - 2321312 - 32123</td>
								</tr>
								<tr>
									<td>Kode Transaksi</td>
									<td>:</td>
									<td><b><?php echo $kodeunik; ?></td>
								</tr>
							</table>
					 	<div class="alert alert-success">
					 	Total Belanja :  <?php  echo 'Rp. '.number_format($totalinvestasi,2); ?>

						</div>
						</ul>
					</div>
						
				</div>

				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Sub Total Investasi <span>
								<?php  echo 'Rp. '.number_format($totalinvestasi,2); ?>
							</span></li>
							<li>Diskon <span>-</span></li>
							<li>Total Investasi<span>
							<?php  echo 'Rp. '.number_format($totalinvestasi,2); ?>
							</span></li>
						</ul>
						<!-- perintah mengitung jumlah barang -->
						
							<?php echo form_open('site/finish'); ?>	
							<a class="btn btn-default update" href="index.php/site/product" style="background-color: #FC456A">Pilih Produk Investasi Lagi</a>
							<input type="hidden" name="id_member" value="<?php echo $id_member; ?>" >
							<input type="hidden" name="total" value="<?php echo $totalinvestasi; ?>">
							<input type="hidden" name="jumlah_barang" value="<?php echo $jml_barang; ?>" >
							<input type="hidden" name="kode_cart" value="<?php echo $kodeunik; ?>">
							<button type="submit" name="finish" class="btn btn-default check_out" style="background-color: #FC456A">
								Selesai
							</button>
							</form>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	
	

  
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>