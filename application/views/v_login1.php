<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Invest-Ikan </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
     <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon" />
   
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
  </head>

   <body>
        <div class="wrap">
            <div class="container">
                <div class="row justify-content-between">
                        <div class="col d-flex align-items-center">
                            <p class="mb-0 phone"><span class="mailus">No Whatsapp:</span> <a href="#">+082223536896</a> / <span class="mailus">email :</span> <a href="#">fathurohman@email.com</a></p>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="social-media">
                            <p class="mb-0 d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>
                            </p>
                    </div>
                        </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Investasi<span>Ikan</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Home
          </button>


          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="<?= base_url()?>index.php/site/" class="nav-link">Investasi</a></li>
                <li class="nav-item"><a href="<?= base_url()?>index.php/site/panduanku" class="nav-link">Panduan</a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link">Tentang</a></li>
              <li class="nav-item"><a href="<?php echo base_url()?>index.php/member/login" class="nav-link">Masuk</a></li>
             
              
            </ul>
          </div>
        </div>
      </nav>


<div class="container">
            <div class="row">
                <div class="col-sm-offset-1">
                    <div class="pull-left">
                        <h3>Sebagai Investor</h3>
                    </div>
                </div>
                <div class="col-sm-2">
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Masuk Ke Akun Anda</h2>
                        <?php echo form_open('login_validation'); ?>
                            <input type="hidden" name="akses" value="member" />
                            <input type="text" class= "form-control" name="nama_member" placeholder="username" required="required"/>
                            <input type="password" class= "form-control" name="password_member" placeholder="password" required="required"/>
                            <button type="submit" class="btn btn-primary" style="background-color: #00BCD4">Masuk</button>
                                <br>
                            atau
                                <br>
                  <?php     
            if($this->input->get('gagal')==1){
        ?>
       
    
        </br>
        Username atau Password salah !!
        
        <?php
            }
        ?>          </form>

                    <a href="<?php echo base_url(); ?>index.php/pemilik/login/"><button type="submit" class="btn btn-danger">Sebagai Pemilik Lahan</button></a>
                        
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
                            <input type="text" class="form-control" name="nama_member" placeholder="Nama" required="required"/>
                            <input type="email"  class="form-control" name="email_member" placeholder="Email Address" required="required"/>
                            <input type="password" class="form-control" name="password_member" placeholder="Password" required="required"/>
                            <input type="text" class="form-control" name="no_hp" placeholder="NO. HP" required="required"/>
                            <textarea name="alamat" placeholder="Alamat" required="required" class="form-control"></textarea>
                            <input type="text" name="bank" placeholder="Nama Bank" required="required" class="form-control"/>
                            <input type="text" name="no_rek" placeholder="Nomor Rekening" required="required" class="form-control"/>
                            <input type="text" name="an" placeholder="Atas Nama" required="required" class="form-control"/>
                            <input type="file" name="ktp" placeholder="Foto KTP" title="Foto KTP" required="required" class="form-control"/>
                            <div class="col-sm-2"><input type="checkbox" name="persetujuan" class="form-control" required="required" value="menyetujui persyaratan"></div><div class="col-sm-10"><a href="<?php echo base_url(); ?>index.php/site/syarat">Setuju</a></div><br /><br />
                            
                            <button type="submit" class="btn btn-primary" style="background-color: #00BCD4">Daftar</button>
                        </form>
                        <br/>
                        <br/>
                        <br/>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
    <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                        <h2 class="footer-heading"><a href="#" class="logo">Investasi Ikan</a></h2>
                        <p>Website ini merupakan Investasi online ikan air tawar pendek yang berkerja sama dengan pemilik lahan 
                  kolam untuk ikan air tawar</p>
                        <a href="#">Read more <span class="fa fa-chevron-right" style="font-size: 11px;"></span></a>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                        <h2 class="footer-heading">Kebijakan</h2>
                        <ul class="list-unstyled">
              <li><a href="#" class="py-1 d-block">Syarat Penggunaan</a></li>
              <li><a href="#" class="py-1 d-block">Kebijakan Pribadi</a></li>
              <li><a href="#" class="py-1 d-block">Kebijakan Pengembalian</a></li>
              <li><a href="#" class="py-1 d-block">Sistem Pembayaran</a></li>
            </ul>
                    </div>
          <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
            <h2 class="footer-heading">Layanan</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-1 d-block">Bantuan Online</a></li>
              <li><a href="#" class="py-1 d-block">Hubungi Kami</a></li>
              <li><a href="#" class="py-1 d-block">Status Pemesanan</a></li>
             
            </ul>
          </div>
                
                    <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                        <h2 class="footer-heading">Subcribe</h2>
                        <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                <button type="submit" class="form-control submit rounded-right"><span class="sr-only">Submit</span><i class="fa fa-paper-plane"></i></button>
              </div>
            </form>
            <h2 class="footer-heading mt-5">Follow us</h2>
            <ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-5 border-top py-5">
                <div class="container">
                    <div class="row">
              <div class="col-md-6 col-lg-8">

                <p class="copyright mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Fathurohman </a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
             
            </div>
                </div>
            </div>
        </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.js"></script>
    
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
     <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=base_url()?>assets/js/popper.min.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap-datepicker.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.timepicker.min.js"></script>
  <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?=base_url()?>assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?=base_url()?>assets/js/google-map.js"></script>
  <script src="<?=base_url()?>assets/js/main.js"></script>
</body>
</html>