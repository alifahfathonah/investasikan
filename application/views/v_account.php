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
								<?php if($akses == "member"){ ?> <li><a href="index.php/member/biling"><i class="fa fa-money"></i> Konfirmasi</a></li> <?php } ?>
								
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a class="active" href="<?php echo base_url(); ?>index.php/member/account/"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fas fa-power-off"></i>
								Keluar
								</a></li>

									<?php 
									if($akses == "member"){ $sql = "SELECT * FROM tbl_member where nama_member='$nama_member'";
									?>
									<li><a href="index.php/member/biling"><i class="fa fa-suitcase"></i> Keranjang</a></li>
									<span class="badge bg-theme">
									<?php
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
									<?php
									}elseif($akses == "pemilik"){ $sql = "SELECT * FROM tbl_pemilik where nama_pemilik='$nama_member'";
									$sts = $this->db->query($sql);
									foreach ($sts->result() as $keys) {
										# code...
									}
									}
						?>
									
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
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2></h2>
						<?php if($akses == "member"){ ?>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
							<h2>Menu Profil</h2>
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/member/history_order">Riwayat Pemesanan</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/member/history_investasi">Riwayat Investasi</a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/member/bagi_hasil">Bagi Hasil</a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/member/perbaruan_investasi">Pemberitahuan Investasi</a></h4>
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
							<h2 style="color:#FC456A">Menu Profil</h2>
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/pemilik/produk/">Produk Investasi</a></h4>
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
						<br><br>
	    				<h2 class="title text-center" style="color: #FC456A">AKUN ANDA</h2>
	    				
	    				<table>
	    					<tr>
	    						<td width="30%" align="center" valign="top"><img src="<?php echo base_url(); ?>assets/images/member.png" width="150"></td>
	    						<td width="10%">&nbsp;</td>
	    						<td width="60%">
	    						<table class="table table-condensed">
	    							<tr>
	    								<td>Nama Member</td>
	    								<td>:</td>
	    								<td><?php if($akses == "member") { echo $keys->nama_member; } elseif($akses == "pemilik"){ echo $keys->nama_pemilik; } ?></td>
	    							</tr>
	    							<tr>
	    								<td>Email</td>
	    								<td>:</td>
	    								<td><?php if($akses == "member") { echo $keys->email_member; }elseif($akses == "pemilik"){ echo $keys->email_pemilik; } ?></td>
	    							</tr>
	    							<tr>
	    								<td>Password</td>
	    								<td>:</td>
	    								<td><?php if($akses == "member") { echo $keys->password_member; }elseif($akses == "pemilik"){ echo $keys->password_pemilik;} ?></td>
	    							</tr>
	    							<tr>
	    								<td>NO HP</td>
	    								<td>:</td>
	    								<td><?php echo $keys->no_hp; ?></td>
	    							</tr>
	    							<tr>
	    								<td>Alamat</td>
	    								<td>:</td>
	    								<td><?php echo $keys->alamat; ?></td>
	    							</tr>
	    							<tr>
	    								<td>Bank</td>
	    								<td>:</td>
	    								<td><?php echo $keys->bank; ?></td>
	    							</tr>
	    							<tr>
	    								<td>Rekening</td>
	    								<td>:</td>
	    								<td><?php echo $keys->rekening; ?></td>
	    							</tr>
	    							<tr>
	    								<td>Atas Nama</td>
	    								<td>:</td>
	    								<td><?php echo $keys->nama_rekening; ?></td>
	    							</tr>
									<tr>
	    								<td>Foto KTP</td>
	    								<td>:</td>
	    								<td><?php if($akses == "member") { ?><a target="_blank" href="<?php echo base_url(); ?>application/views/photo/member/<?php echo $keys->foto_ktp; ?>">Lihat</a>&nbsp; <a href="<?php echo base_url(); ?>index.php/member/edit_foto/ktp/<?php echo $akses; ?>/<?php echo $keys->id_member; ?>">Edit</a> <?php } elseif($akses == "pemilik"){ ?><a target="_blank" href="<?php echo base_url(); ?>application/views/photo/pemilik/<?php echo $keys->photo_ktp; ?>">Lihat</a>&nbsp; <a href="<?php echo base_url(); ?>index.php/member/edit_foto/ktp/<?php echo $akses; ?>/<?php echo $keys->id_pemilik; ?>">Edit</a><?php } ?></td>
	    							</tr>
									<?php if($akses == "pemilik"){ ?>
									<tr>
	    								<td>Foto SIUP</td>
	    								<td>:</td>
	    								<td><a target="_blank" href="<?php echo base_url(); ?>application/views/photo/pemilik/<?php echo $keys->photo_siup; ?>">Lihat</a>&nbsp; <a href="<?php echo base_url(); ?>index.php/member/edit_foto/siup/<?php echo $akses; ?>/<?php echo $keys->id_pemilik; ?>">Edit</a></td>
	    							</tr>
									<tr>
	    								<td>Foto Lainnya</td>
	    								<td>:</td>
	    								<td><a target="_blank" href="<?php echo base_url(); ?>application/views/photo/pemilik/<?php echo $keys->photo_lainnya; ?>">Lihat</a>&nbsp; <a href="<?php echo base_url(); ?>index.php/member/edit_foto/lainnya/<?php echo $akses; ?>/<?php echo $keys->id_pemilik; ?>">Edit</a></td>
	    							</tr>
									<?php } ?>
	    							<tr>
	    								<td>Tanggal Bergabung</td>
	    								<td>:</td>
	    								<td><?php echo $keys->tanggal; ?></td>
	    							</tr>
	    							<tr>
	    								<td colspan="3">&nbsp;</td>
	    							</tr>
	    							<tr>
	    								<td colspan="3"><a href="<?php echo base_url(); ?>index.php/member/edit_akun/<?php echo $nama_member; ?>/<?php echo $akses; ?>"><button class="btn btn-danger">Edit Profil</button></a></td>
	    							</tr>
	    						</table>	
</td>
	    					</tr>
	    				</table>    					
	    			</div>
	    		</div>
	    		
	    				
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	


</body>
</html>