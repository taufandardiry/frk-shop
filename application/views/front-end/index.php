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
            <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
          </li>
          <li>
            <a href="<?php echo base_url()."index.php/MyController/registerpage" ?>">Register</a>
          </li>
          <li>
            <a href="<?php echo base_url()."index.php/MyController/contactpage" ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="Login">Customer login</h4>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url()."index.php/MyController/loginCustomer" ?>" method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="username-modal" placeholder="Username" name="username_cust"> </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password-modal" placeholder="Password" name="password_cust"> </div>
              <p class="text-center">
                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted">
              <a href="<?php echo base_url()."index.php/MyController/registerpage" ?>"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- *** TOP BAR END *** -->
  <!-- *** NAVBAR ***
 _________________________________________________________ -->
  <div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand home" href="<?php echo base_url()."index.php/MyController/index" ?>" data-animate-hover="bounce">
          <img src="<?php echo base_url() ?>assets/front-end/img/logo1.png" alt="Obaju logo" class="hidden-xs">
          <img src="<?php echo base_url() ?>assets/front-end/img/logo-small1.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">FRK Olshop - go to homepage</span> </a>
        <div class="navbar-buttons">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"> <span class="sr-only">Toggle navigation</span> <i class="fa fa-align-justify"></i> </button>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search"> <span class="sr-only">Toggle search</span> <i class="fa fa-search"></i> </button>
          <a class="btn btn-default navbar-toggle" href="<?php echo base_url()."index.php/MyController/basketpage" ?>"> <i class="fa fa-shopping-cart"></i> <span class="hidden-xs">0 item in cart</span> </a>
        </div>
      </div>
      <!--/.navbar-header -->
      <div class="navbar-collapse collapse" id="navigation">
        <ul class="nav navbar-nav navbar-left">
          <li class="active">
            <a href="<?php echo base_url()."index.php/MyController/index" ?>">Home</a>
          </li>
          <li class="dropdown yamm-fw">
            <a href="<?php echo base_url()."index.php/MyController/categorypage" ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Product <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <div class="yamm-content">
                  <div class="row">
                    <div class="col-sm-6">
                      <h5>Ladies</h5>
                      <ul>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyController/categorypage" ?>">Jilbab</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyController/categorypage" ?>">Ciput</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyController/categorypage" ?>">Kaos Kaki</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyController/categorypage" ?>">Accessories</a>
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
                    <div class="col-sm-4">
                      <h5>User</h5>
                      <ul>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyController/registerpage" ?>">Register / login</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5>Pages</h5>
                      <ul>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyController/textpage" ?>">About Us</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyController/faqpage" ?>">FAQ</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()."index.php/MyController/contactpage" ?>">Contact</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
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
          <a href="<?php echo base_url()."index.php/MyController/basketpage" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">0 item in cart</span></a>
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
          <div id="main-slider">
            <div class="item">
              <img src="<?php echo base_url() ?>assets/front-end/img/main1.jpg" alt="" class="img-responsive"> </div>
            <div class="item">
              <img class="img-responsive" src="<?php echo base_url() ?>assets/front-end/img/main2.jpg" alt=""> </div>
            <div class="item">
              <img class="img-responsive" src="<?php echo base_url() ?>assets/front-end/img/main3.jpg" alt=""> </div>
            <div class="item">
              <img class="img-responsive" src="<?php echo base_url() ?>assets/front-end/img/main4.jpg" alt=""> </div>
          </div>
          <!-- /#main-slider -->
        </div>
      </div>
      <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
      <div id="advantages">
        <div class="container">
          <div class="same-height-row">
            <div class="col-sm-4">
              <div class="box same-height clickable">
                <div class="icon"><i class="fa fa-heart"></i> </div>
                <h3>
                  <a href="#">We love our customers</a>
                </h3>
                <p>We are known to provide best possible service ever</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="box same-height clickable">
                <div class="icon"><i class="fa fa-tags"></i> </div>
                <h3>
                  <a href="#">Best prices</a>
                </h3>
                <p>You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="box same-height clickable">
                <div class="icon"><i class="fa fa-thumbs-up"></i> </div>
                <h3>
                  <a href="#">100% satisfaction guaranteed</a>
                </h3>
                <p>Free returns on everything for 2 weeks.</p>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /#advantages -->
      <!-- *** ADVANTAGES END *** -->
      <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
      <div id="hot">
        <div class="box">
          <div class="container">
            <div class="col-md-12">
              <h2>NEW RELEASE</h2>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="product-slider">
            
            <?php foreach ($data as $x ) { ?>

            <div class="item">
              <div class="product">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front">
                      <a href="<?php echo base_url()."index.php/MyController/detailpage" ?>">
                        <img src="<?php echo base_url().'/upload/'.$x['image']; ?>" alt="" class="img-responsive"> </a>
                    </div>
                    <div class="back">
                      <a href="<?php echo base_url()."index.php/MyController/detailpage" ?>">
                        <img src="<?php echo base_url().'/upload/'.$x['image']; ?>" alt="" class="img-responsive"> </a>
                    </div>
                  </div>
                </div>
                <a href="<?php echo base_url()."index.php/MyController/detailpage" ?>" class="invisible">
                      <img src="<?php echo base_url().'/upload/'.$x['image']; ?>" alt="" class="img-responsive"> </a>
                <div class="text">
                  <h3>
                    <a href="<?php echo base_url()."index.php/MyController/detailpage" ?>"><?= $x['nama_barang'] ?></a>
                  </h3>
                  <p class="price">RP <?= $x['harga'] ?></p>
                </div>
                <!-- /.text -->
                <div class="ribbon sale">
                  <div class="theribbon">NEW</div>
                  <div class="ribbon-background"></div>
                </div>
                
              </div>
              <!-- /.product -->
            </div>

            <?php } ?>

          </div>
          <!-- /.product-slider -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /#hot -->
      <!-- *** HOT END *** -->
      <!-- *** GET INSPIRED ***
 _________________________________________________________ -->
      <div class="container" data-animate="fadeInUpBig">
        <div class="col-md-12">
          <div class="box slideshow">
            <h3>Get Inspired</h3>
            <p class="lead">Inspirasi mengenai fashion hijab kekinian.</p>
            <div id="get-inspired" class="owl-carousel owl-theme">
              <div class="item">
                <a href="#">
                  <img src="<?php echo base_url() ?>assets/front-end/img/inspired1.jpg" alt="Get inspired" class="img-responsive"> </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="<?php echo base_url() ?>assets/front-end/img/inspired2.jpg" alt="Get inspired" class="img-responsive"> </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="<?php echo base_url() ?>assets/front-end/img/inspired3.jpg" alt="Get inspired" class="img-responsive"> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- *** GET INSPIRED END *** -->
      <!-- *** BLOG HOMEPAGE ***
 _________________________________________________________ -->
      <div class="box text-center" data-animate="fadeInUp">
        <div class="container">
          <div class="col-md-12">
            <h3 class="text-uppercase">F.R.K OLSHOP</h3>
            <p class="lead">Bagaimana perkembangan fashion masa kini?
              <a href="<?php echo base_url()."index.php/MyController/textpage" ?>">Ini tentang frk oshop!</a>
            </p>
          </div>
        </div>
      </div>
      
      <!-- /.container -->
      <!-- *** BLOG HOMEPAGE END *** -->
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
                <a href="<?php echo base_url()."index.php/MyController/textpage" ?>">About us</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyController/textpage" ?>">Terms and conditions</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyController/faqpage" ?>">FAQ</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyController/contactpage" ?>">Contact us</a>
              </li>
            </ul>
            <hr>
            <h4>User section</h4>
            <ul>
              <li>
                <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyController/registerpage" ?>">Register</a>
              </li>
            </ul>
            <hr class="hidden-md hidden-lg hidden-sm"> </div>
          <!-- /.col-md-3 -->
          <div class="col-md-3 col-sm-6">
            <h4>Top categories</h4>
            <h5>Ladies</h5>
            <ul>
              <li>
                <a href="<?php echo base_url()."index.php/MyController/categorypage" ?>">Jilbab</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyController/categorypage" ?>">Ciput</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyController/categorypage" ?>">Kaos Kaki</a>
              </li>
              <li>
                <a href="<?php echo base_url()."index.php/MyController/categorypage" ?>">Accessories</a>
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
            <a href="<?php echo base_url()."index.php/MyController/contactpage" ?>">Go to contact page</a>
            <hr class="hidden-md hidden-lg"> </div>
          <!-- /.col-md-3 -->
          <div class="col-md-3 col-sm-6">
            <h4>Get the news</h4>
            <p class="text-muted">Jangan lewati promo-promo terbaik dari FRK Shop. Jadilah yang pertama untuk mengetahui info promo-promo dari kami!</p>
            <form>
              <div class="input-group">
               <!--  <input type="text" class="form-control"> <span class="input-group-btn">

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
        <div class="col-md-6">
          <p class="pull-right">Template by
            <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
            <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
          </p>
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
</body>

</html>