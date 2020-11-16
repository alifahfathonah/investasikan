
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Halaman Admin Investasi Ikan</title>

    <!-- Bootstrap core CSS -->
    <base href="<?php echo base_url() ?>" />
    <link rel="shortcut icon" href="assets/images/admin.ico" type="image/x-icon" />
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg" style="background-color: #FC456A">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a style="font-family: courier" class="logo"><b>Investasi Ikan</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="" class="dropdown-toggle" href="index.php/ci_admin/konfirmasi" title="Notifikasi Konfirmasi">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">
                                

                                <?php 
                                    $sql = "SELECT * FROM tbl_konfirmasi WHERE konfirmasi='n'";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo $jum;

                                 ?>
                            </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="" class="dropdown-toggle" href="index.php/ci_admin/bagi_hasil"  title="Notifikasi Bagi Hasil">
                            <i class="fa fa-bell"></i>
                            <span class="badge bg-theme">
                                

                                <?php 
                                    $sql = "SELECT * FROM tbl_bagi_hasil WHERE konfirmasi='n'";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo $jum;

                                 ?>
                            </span>
                        </a>
                    </li>
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu" style="background-color: #2d3436">
                <ul class="nav pull-right top-menu">
                    <li><a style="color: black" class="logout" href="index.php/ci_amin/account_admin">Account</a></li>
                    <li><a style="color: black" class="logout" href="index.php/ci_admin/logout">Logout</a></li>
                </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
                
              <?php $this->load->view('admin/menu'); ?>

             <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">

              <?php $this->load->view($content) ?>

              </div><!-- row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
     <h2 class="title text-center">Halaman Menu Investasi Ikan</h2>
     <div class="panel-body"><p align="center">........................................................###Terdapat 5 Menu pada halaman Investasi Ikan ini yaitu Pemesanan untuk melihat dan daftar pemesanan produk investasi kedua investor untuk melihat daftar investor yang terlibat lalu ketiga pemilik yaitu untuk melihat daftar pemilik lahan keempat Konfirmasi Pembayaran dan terakhir Konfirmasi Bagi Hasil</p></div>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter-conf.js"></script>


    <!-- DataTables JavaScript -->
    
    <!--script for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>    
    <script src="<?php echo base_url(); ?>assets/js/zabuto_calendar.js"></script>    
    
    <script type="text/javascript">
      /*  $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to admin batik berkah jambi!',
            // (string | mandatory) the text inside the notification
            text: 'Silahkan Gunakan content yang tersedia',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });*/
    </script>
     <!-- jQuery -->

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
     
     <!-- Javascript -->
     <script type="text/javascript">
      $(window).load(function() { // makes sure the whole site is loaded
      $("#status").fadeOut(); // will first fade out the loading animation
      $("#preloader").delay(450).fadeOut("slow"); // will fade out the white DIV that covers the website.
      })
     </script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    
    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
