<html>

<head>
  <meta charset="utf-8">
  <meta name="robots" content="all,follow">
  <meta name="googlebot" content="index,follow,snippet,archive">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="FRK Olshop e-commerce">
  <meta name="author" content="Taufan Dardiry">
  <meta name="keywords" content="">
  <title> FRK Olshop : e-commerce </title>
  <meta name="keywords" content="">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" type="text/css">
  <!-- styles -->
  <link href="<?php echo base_url() ?>assets/front-end/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/front-end/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/front-end/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/front-end/css/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/front-end/css/owl.theme.css" rel="stylesheet">
  <!-- theme stylesheet -->
  <link href="<?php echo base_url() ?>assets/front-end/css/style.default.css" rel="stylesheet" id="theme-stylesheet">
  <!-- your stylesheet with modifications -->
  <link href="<?php echo base_url() ?>assets/front-end/css/custom.css" rel="stylesheet">
  <script src="<?php echo base_url() ?>assets/front-end/js/respond.min.js"></script>
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/front-end/favicon.png"> </head>

<body>
  <!-- *** TOPBAR ***
 _________________________________________________________ -->
  <div id="top">
    <div class="container">
      <div class="col-md-12" data-animate="fadeInDown">
        <ul class="menu">
          <li>
            <a href="#" data-toggle="modal" data-target="#login-modal">Hai, <?php echo $this->session->userdata('nama_depan') ?></a>
          </li>
          <li>
            <a href="<?php echo base_url()."index.php/MyControllerUser/logout" ?>">Logout</a>
          </li>
          <li>
            <a href="<?php echo base_url()."index.php/MyControllerUser/contactpage" ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- *** TOP BAR END *** -->
  <!-- *** NAVBAR ***
 _________________________________________________________ -->
  <div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand home" href="<?php echo base_url()."index.php/MyControllerUser/index" ?>" data-animate-hover="bounce">
          <img src="<?php echo base_url() ?>assets/front-end/img/logo1.png" alt="Obaju logo" class="hidden-xs">
          <img src="<?php echo base_url() ?>assets/front-end/img/logo-small1.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span> </a>
        <div class="navbar-buttons">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"> <span class="sr-only">Toggle navigation</span> <i class="fa fa-align-justify"></i> </button>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search"> <span class="sr-only">Toggle search</span> <i class="fa fa-search"></i> </button>
          <a class="btn btn-default navbar-toggle" href="<?php echo base_url()."index.php/MyControllerUser/basketpage" ?>"> <i class="fa fa-shopping-cart"></i> <span class="hidden-xs">View items in cart</span> </a>
        </div>
      </div>
      <!--/.navbar-header -->
      <div class="navbar-collapse collapse" id="navigation">
        <ul class="nav navbar-nav navbar-left">
          <li>
            <a href="<?php echo base_url()."index.php/MyControllerUser/index" ?>">Home</a>
          </li>
          <li class="dropdown yamm-fw">
            <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Product <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <div class="yamm-content">
                  <div class="row">
                    <div class="col-sm-6">
                      <h5>Ladies</h5>
                      <ul>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>">Jilbab</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>">Ciput</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>">Kaos Kaki</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>">Accessories</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <h5>Accessories</h5>
                      <ul>
                        <li>
                          <a href="#">Coming Soon :)</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /.yamm-content -->
              </li>
            </ul>
          </li>
          <li class="dropdown yamm-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">INFO<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <div class="yamm-content">
                  <div class="row">
                    <div class="col-sm-3">
                      <h5>User</h5>
                      <ul>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyControllerUser/customeraccountpage" ?>">Customer account / change password</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-3">
                      <h5>Order process</h5>
                      <ul>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyControllerUser/basketpage" ?>">Shopping cart</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyControllerUser/checkout1page" ?>">Checkout</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-3">
                      <h5>Pages</h5>
                      <ul>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyControllerUser/textpage" ?>">About Us</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyControllerUser/faqpage" ?>">FAQ</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyControllerUser/contactpage" ?>">Contact</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-3">
                      <h5>Blog</h5>
                      <ul>
                        <li>
                          <a href="#" >Coming Soon :)</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /.yamm-content -->
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
      <div class="navbar-buttons">
        <div class="navbar-collapse collapse right" id="basket-overview">
          <a href="<?php echo base_url()."index.php/MyControllerUser/basketpage" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">View items in cart</span></a>
        </div>
        <!--/.nav-collapse -->
        <div class="navbar-collapse collapse right" id="search-not-mobile">
          <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search"> <span class="sr-only">Toggle search</span> <i class="fa fa-search"></i> </button>
        </div>
      </div>
      <div class="collapse clearfix" id="search">
        <form class="navbar-form" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search"> <span class="input-group-btn">

      <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

        </span> </div>
        </form>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /#navbar -->
  <!-- *** NAVBAR END *** -->
  <div id="all">
    <div id="content">
      <div class="container">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li>
              <a href="#">Home</a>
            </li>
            <li>Contact</li>
          </ul>
        </div>
        <div class="col-md-3">
          <!-- *** PAGES MENU ***
 _________________________________________________________ -->
          <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
              <h3 class="panel-title">Pages</h3>
            </div>
            <div class="panel-body">
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <a href="<?php echo base_url()."index.php/MyControllerUser/textpage" ?>">About Us</a>
                </li>
                <li>
                  <a href="<?php echo base_url()."index.php/MyControllerUser/contactpage" ?>">Contact</a>
                </li>
                <li>
                  <a href="<?php echo base_url()."index.php/MyControllerUser/faqpage" ?>">FAQ</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- *** PAGES MENU END *** -->
          <div class="banner">
            <a href="#">
              <img src="<?php echo base_url() ?>assets/front-end/img/banner.jpg" alt="sales 2014" class="img-responsive"> </a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="box" id="contact">
            <h1>Contact</h1>
            <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
            <p>Please feel free to contact us :)</p>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <h3><i class="fa fa-map-marker"></i> Address</h3>
                <p>F.R.K Olshop. &nbsp;&nbsp;
                  <br>Perumahan Nyalabu Permai IV Pamekasan, Madura &nbsp;&nbsp;
                  <br>69317&nbsp;
                  <br>Indonesia&nbsp;</p>
              </div>
              <!-- /.col-sm-4 -->
              <div class="col-sm-4">
                <h3><i class="fa fa-phone"></i>&nbsp;Hand Phone</h3>
                <p class="text-muted">Apabila ada keluhan atau ketidak nyamanan lainnya, Siahkan hubungi kami :)</p>
                <p><strong>+62 838 5004 1403</strong></p>
              </div>
              <!-- /.col-sm-4 -->
              <div class="col-sm-4">
                <h3><i class="fa fa-envelope"></i> Email</h3>
                <p class="text-muted">Hubungi kami melalui email.</p>
                <ul>
                  <li><strong><a href="mailto: ">olshopfrk@gmail.com</a></strong> </li>
                </ul>
              </div>
              <!-- /.col-sm-4 -->
            </div>
            <!-- /.row -->
            <hr>
            <div id="map"> </div>
            <hr>
            <h2>Contact form</h2>
            <form>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group"> <label for="firstname">Firstname</label>
                    <input type="text" class="form-control" id="firstname"> </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group"> <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" id="lastname"> </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group"> <label for="email">Email</label>
                    <input type="text" class="form-control" id="email"> </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group"> <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject"> </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group"> <label for="message">Message</label> <textarea id="message" class="form-control"></textarea> </div>
                </div>
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                </div>
              </div>
              <!-- /.row -->
            </form>
          </div>
        </div>
        <!-- /.col-md-9 -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /#content -->
    <!-- *** FOOTER ***
 _________________________________________________________ -->
    <div id="footer" data-animate="fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <h4>Pages</h4>
            <ul>
              <li>
                <a href="<?php echo base_url()."index.php/MyControllerUser/textpage" ?>">About us</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyControllerUser/textpage" ?>">Terms and conditions</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyControllerUser/faqpage" ?>">FAQ</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyControllerUser/contactpage" ?>">Contact us</a>
              </li>
            </ul>
            <hr>
            <h4>User section</h4>
            <ul>
              <li>
                <a href="<?php echo base_url()."index.php/MyControllerUser/logout" ?>">Logout</a>
              </li>
            </ul>
            <hr class="hidden-md hidden-lg hidden-sm"> </div>
          <!-- /.col-md-3 -->
          <div class="col-md-3 col-sm-6">
            <h4>Top categories</h4>
            <h5>Ladies</h5>
            <ul>
              <li>
                <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>">Jilbab</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>">Ciput</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>">Kaos Kaki</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>">Accessories</a>
              </li>
            </ul>
            <hr class="hidden-md hidden-lg"> </div>
          <!-- /.col-md-3 -->
          <div class="col-md-3 col-sm-6">
            <h4>Where to find us</h4>
            <p>F.R.K Olshop. 
              <br>Perumahan Nyalabu Permai IV Pamekasan, Madura 
              <br>69317
              <br>Indonesia</p>
            <a href="<?php echo base_url()."index.php/MyControllerUser/contactpage" ?>">Go to contact page</a>
            <hr class="hidden-md hidden-lg"> </div>
          <!-- /.col-md-3 -->
          <div class="col-md-3 col-sm-6">
            <h4>Get the news</h4>
            <p class="text-muted">Jangan lewati promo-promo terbaik dari FRK Shop. Jadilah yang pertama untuk mengetahui info promo-promo dari kami!</p>
            <form>
              <div class="input-group">
          <!--       <input type="text" class="form-control"> <span class="input-group-btn">

          <button class="btn btn-default" type="button">Subscribe!</button>
 -->
      </span> </div>
              <!-- /input-group -->
            </form>
            <hr>
            <h4>Stay in touch</h4>
            <p class="social">
              <a href="https://www.facebook.com/profile.php?id=100004634076601&fref=ts" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/frk_olshop/" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
              <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=olshopfrk@gmail.com&su=Hello&shva=1" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
            </p>
          </div>
          <!-- /.col-md-3 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /#footer -->
    <!-- *** FOOTER END *** -->
    <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
    <div id="copyright">
      <div class="container">
        <div class="col-md-6">
          <p class="pull-left">© 2017 FRK Olshop.</p>
        </div>
        
      </div>
    </div>
    <!-- *** COPYRIGHT END *** -->
  </div>
  <!-- /#all -->
  <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
  <script src="<?php echo base_url() ?>assets/front-end/js/jquery-1.11.0.min.js"></script>
  <script src="<?php echo base_url() ?>assets/front-end/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/front-end/js/jquery.cookie.js"></script>
  <script src="<?php echo base_url() ?>assets/front-end/js/waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>assets/front-end/js/modernizr.js"></script>
  <script src="<?php echo base_url() ?>assets/front-end/js/bootstrap-hover-dropdown.js"></script>
  <script src="<?php echo base_url() ?>assets/front-end/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/front-end/js/front.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
  <script>
    function initialize() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(-7.149674066214145, 113.46228322485354),
                mapTypeId: google.maps.MapTypeId.ROAD,
                scrollwheel: false
            }
            var map = new google.maps.Map(document.getElementById('map'),
                mapOptions);

            var myLatLng = new google.maps.LatLng(-7.149674066214145, 113.46228322485354);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJBQPGONVEeULyGjFRPCI1DYQfJvz65Vs&callback=myMap"></script>
</body>

</html>