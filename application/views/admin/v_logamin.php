
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>.:LOGIN:.</title>
    <base href="<?php echo base_url(); ?>" />
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

  </head>

  <body>

	  <div id="login-page">
	  	<div class="container">
			<?php echo form_open('login_admin'); ?>	  	
		      <div class="form-login">
		        <h2 class="form-login-heading" style="background-color: #FC456A">Masuk Admin</h2>
		        <div class="login-wrap">
		            <input type="text" name="nama_admin" class="form-control" placeholder="username" required="Wajib Diisi">
		            <br>
		            <input type="password" name="password_admin" class="form-control" placeholder="password" required="Wajib Diisi">
		            <br>
					<button class="btn btn-theme btn-block" type="submit" style="background-color: #FC456A"><i class="fa fa-lock"></i> MASUK</button>
		            <hr>
		            
		   
		              <?php 
            if($this->input->get('gagal')==1){
        ?>
        <span style="color:green" >
        <small>
        Username atau Password salah !!
        </small>
        </span>
        <?php
            }
        ?>
		            <div class="registration">
		                Copyright &copy; 2020 Fathurohman 
		            </div></div>
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->

		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/images/back.jpg", {speed: 500});
    </script>


  </body>
</html>
