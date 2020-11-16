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
						<h2 style="color: #FC456A">Menu Profil</h2>
						<?php if($akses == "member"){ ?>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/member/history_order">History Order</a></h4>
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
									<h4 class="panel-title"><a href="index.php/member/perbaruan_investasi">Perbaruan Investasi</a></h4>
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

	    				<h2 class="title text-center" style="color: #FC456A">AKUN ANDA</h2>
	    				<?php echo form_open('member/edit_akun') ?>
	    				<table>
	    					<tr>
	    						<td width="30%" align="center" valign="top"><img src="<?php echo base_url(); ?>assets/images/member.png" width="150"></td>
	    						<td width="10%">&nbsp;</td>
	    						<td width="60%">
	    						<table class="table table-condensed">
	    							<tr>
	    								<td>Nama Member</td>
	    								<td>:</td>
	    								<td><?php if($akses == "member") { echo $keys->nama_member; echo "<input type='hidden' name='id' value='$keys->id_member'>"; echo "<input type='hidden' name='username' value='$keys->nama_member'>"; echo "<input type='hidden' name='akses' value='$akses'>"; } elseif($akses == "pemilik"){ echo "<input type='hidden' name='id' value='$keys->id_pemilik'>"; echo $keys->nama_pemilik;  echo "<input type='hidden' name='username' value='$keys->nama_pemilik'>";  echo "<input type='hidden' name='akses' value='$akses'>"; } ?></td>
	    							</tr>
	    							<tr>
	    								<td>Email</td>
	    								<td>:</td>
	    								<td><?php if($akses == "member") { echo "<input type='text' name='email' value='$keys->email_member' class='form-control'>"; }elseif($akses == "pemilik"){ echo "<input type='text' name='email' value='$keys->email_pemilik' class='form-control'>"; } ?></td>
	    							</tr>
	    							<tr>
	    								<td>Password</td>
	    								<td>:</td>
	    								<td><?php if($akses == "member") {  echo "<input type='password' name='password' class='form-control'>";  }elseif($akses == "pemilik"){  echo "<input type='password' name='password' class='form-control'>"; } ?></td>
	    							</tr>
	    							<tr>
	    								<td>NO HP</td>
	    								<td>:</td>
	    								<td><?php  echo "<input type='text' name='hp' value='$keys->no_hp' class='form-control'>"; ?></td>
	    							</tr>
	    							<tr>
	    								<td>Alamat</td>
	    								<td>:</td>
	    								<td><?php  echo "<input type='text' name='alamat' value='$keys->alamat' class='form-control'>";?></td>
	    							</tr>
	    							<tr>
	    								<td>Bank</td>
	    								<td>:</td>
	    								<td><?php  echo "<input type='text' name='bank' value='$keys->bank' class='form-control'>";?></td>
	    							</tr>
	    							<tr>
	    								<td>Rekening</td>
	    								<td>:</td>
	    								<td><?php  echo "<input type='text' name='rekening' value='$keys->rekening' class='form-control'>";?></td>
	    							</tr>
	    							<tr>
	    								<td>Atas Nama</td>
	    								<td>:</td>
	    								<td><?php  echo "<input type='text' name='nama_rekening' value='$keys->nama_rekening' class='form-control'>";?></td>
	    							</tr>
	    							<tr>
	    								<td>Tanggal Bergabung</td>
	    								<td>:</td>
	    								<td><?php echo $keys->tanggal ?></td>
	    							</tr>
	    							<tr>
	    								<td colspan="3">&nbsp;</td>
	    							</tr>
	    							<tr>
	    								<td colspan="3"><input type="submit" name="edit_akun" class="btn btn-danger" value="Edit"></td>
	    							</tr>
	    						</table>	
</td>
	    					</tr>
	    				</table> 
						</form>
	    			</div>
	    		</div>
	    		
	    				
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	
	

  
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>