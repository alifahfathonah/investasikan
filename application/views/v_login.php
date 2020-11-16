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
								<li><a href="index.php/site/panduan"><i class="fa fa-list"></i> Panduan</a></li>
								
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a href="#"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fa fa-lock "></i>
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
								<li><a class="active" href="index.php/member/login"><i class="fa fa-lock">
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
	
	
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-1">
					<div class="pull-left">
						<button type="submit" class="btn btn-default cart" style="background-color: #FC456A">Investor</button>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="pull-left">
						<a href="<?php echo base_url(); ?>index.php/pemilik/login/"><button type="submit" class="btn btn-default cart active">Pemilik Lahan</button></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Masuk Ke Akun Anda</h2>
						<?php echo form_open('login_validation'); ?>
							<input type="hidden" name="akses" value="member" />
							<input type="text" name="nama_member" placeholder="username" required="required"/>
							<input type="password" name="password_member" placeholder="password" required="required"/>
							<button type="submit" class="btn btn-default" style="background-color: #FC456A">Masuk</button>
				  <?php 
            if($this->input->get('gagal')==1){
        ?>
       
   
        </br>
        Username atau Password salah !!
        
        <?php
            }
        ?>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or" style="background-color: #FC456A">ATAU</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Daftar Investor Baru</h2>
						<?php echo form_open_multipart('login_validation/sigup'); ?>
							<input type="hidden" name="akses" value="member" />
							<input type="text" name="nama_member" placeholder="Nama" required="required"/>
							<input type="email" name="email_member" placeholder="Email Address" required="required"/>
							<input type="password" name="password_member" placeholder="Password" required="required"/>
							<input type="text" name="no_hp" placeholder="NO. HP" required="required"/>
							<textarea name="alamat" placeholder="Alamat" required="required"></textarea>
							<input type="text" name="bank" placeholder="Nama Bank" required="required"/>
							<input type="text" name="no_rek" placeholder="Nomor Rekening" required="required"/>
							<input type="text" name="an" placeholder="Atas Nama" required="required"/>
							<input type="file" name="ktp" placeholder="Foto KTP" title="Foto KTP" required="required"/>
							<div class="col-sm-2"><input type="checkbox" name="persetujuan" class="form-control" required="required" value="menyetujui persyaratan"></div><div class="col-sm-10"><a href="<?php echo base_url(); ?>index.php/site/syarat">Setuju</a></div><br /><br />
							<button type="submit" class="btn btn-default" style="background-color: #FC456A">Daftar</button>
						</form>
						<br/>
						<br/>
						<br/>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
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
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>