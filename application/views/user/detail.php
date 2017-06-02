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
            <li>
              <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>">Product</a>
            </li>
            <li>Pashmina Katun Ima Queenfha - Hijau Tua</li>
          </ul>
        </div>
        <div class="col-md-3">
          <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
          <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
              <h3 class="panel-title">Product</h3>
            </div>
            <div class="panel-body">
              <ul class="nav nav-pills nav-stacked category-menu">
                <li>
                  <a href="<?php echo base_url()."index.php/MyControllerUser/categorypage" ?>">Ladies <span class="badge pull-right">40</span></a>
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
                </li>
              </ul>
            </div>
          </div>

          <!-- *** MENUS AND FILTERS END *** -->
          <div class="banner">
            <a href="#">
              <img src="<?php echo base_url() ?>assets/front-end/img/banner.jpg" alt="sales 2014" class="img-responsive"> </a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="row" id="productMain">
            <div class="col-sm-6">
              <div id="mainImage">
                <img src="<?php echo base_url() ?>assets/front-end/img/Pashmina-Katun-1.jpg" alt="" class="img-responsive"> </div>
              <!--<div class="ribbon sale">
                <div class="theribbon">SALE</div>
                <div class="ribbon-background"></div>
              </div> -->
              <!-- /.ribbon -->
              <div class="ribbon new">
                <div class="theribbon">NEW</div>
                <div class="ribbon-background"></div>
              </div>
              <!-- /.ribbon -->
            </div>
            <div class="col-sm-6">
              <div class="box">
                <h1 class="text-center">Pashmina Katun Ima Queenfha - Hijau Tua</h1>
                <p class="goToDescription">
                  <a href="#details" class="scroll-to">Scroll untuk melihat detail produk, material, size dan cara perawatan</a>
                </p>
                <p class="price">RP 38000</p>
                <p class="text-center buttons">
                  <a href="<?php echo base_url()."index.php/MyControllerUser/basketpage" ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                </p>
              </div>
              <div class="row" id="thumbs">
                <div class="col-xs-4">
                  <a href="<?php echo base_url() ?>assets/front-end/img/Pashmina-Katun-1.jpg" class="thumb">
                    <img src="<?php echo base_url() ?>assets/front-end/img/Pashmina-Katun-1.jpg" alt="" class="img-responsive"> </a>
                </div>
                <div class="col-xs-4">
                  <a href="<?php echo base_url() ?>assets/front-end/img/Pashmina-Katun-1.jpg" class="thumb">
                    <img src="<?php echo base_url() ?>assets/front-end/img/Pashmina-Katun-1.jpg" alt="" class="img-responsive"> </a>
                </div>
                <div class="col-xs-4">
                  <a href="<?php echo base_url() ?>assets/front-end/img/Pashmina-Katun-1.jpg" class="thumb">
                    <img src="<?php echo base_url() ?>assets/front-end/img/Pashmina-Katun-1.jpg" alt="" class="img-responsive"> </a>
                </div>
              </div>
            </div>
          </div>
          <div class="box" id="details">
            <h4>Product details</h4>
            <p>Koleksi dengan gaya dengan sentuhan modern. Kerudung Instant Kerut tampil dalam desain simpel dan aksen lipit samping yang eye-catchy. Perfect!</p>
            <h4>Material</h4>
            <ul>
              <li>Cashmere wool</li>
              <li>Crepe</li>
              <li>Joojuu</li>
            </ul>
            <h4>Size &amp; Fit</h4>
            <ul>
              <li>Regular fit</li>
            </ul>
            <blockquote>
              <p>Perawatan dapat dilakukan dengan cuci terpisah, gunakan detergen yang lembut, jangan diputar dalam mesin cuci saat pengeringan, jangan gunakan pemutih dan setrika suhu rendah</p>
            </blockquote>
            <hr>
            <!--
            <div class="social">
              <h4>Show it to your friends</h4>
              <p>
                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
              </p>
            </div>  -->
          </div>
          
          <!--
          <div class="row same-height-row">
            <div class="col-md-3 col-sm-6">
              <div class="box same-height">
                <h3>You may also like these products</h3>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="product same-height">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front">
                      <a href="detail.html">
                        <img src="img/product2.jpg" alt="" class="img-responsive"> </a>
                    </div>
                    <div class="back">
                      <a href="detail.html">
                        <img src="img/product2_2.jpg" alt="" class="img-responsive"> </a>
                    </div>
                  </div>
                </div>
                <a href="detail.html" class="invisible">
                  <img src="img/product2.jpg" alt="" class="img-responsive"> </a>
                <div class="text">
                  <h3>Fur coat</h3>
                  <p class="price">$143</p>
                </div>
              </div>
              
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="product same-height">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front">
                      <a href="detail.html">
                        <img src="img/product1.jpg" alt="" class="img-responsive"> </a>
                    </div>
                    <div class="back">
                      <a href="detail.html">
                        <img src="img/product1_2.jpg" alt="" class="img-responsive"> </a>
                    </div>
                  </div>
                </div>
                <a href="detail.html" class="invisible">
                  <img src="img/product1.jpg" alt="" class="img-responsive"> </a>
                <div class="text">
                  <h3>Fur coat</h3>
                  <p class="price">$143</p>
                </div>
              </div>
              
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="product same-height">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front">
                      <a href="detail.html">
                        <img src="img/product3.jpg" alt="" class="img-responsive"> </a>
                    </div>
                    <div class="back">
                      <a href="detail.html">
                        <img src="img/product3_2.jpg" alt="" class="img-responsive"> </a>
                    </div>
                  </div>
                </div>
                <a href="detail.html" class="invisible">
                  <img src="img/product3.jpg" alt="" class="img-responsive"> </a>
                <div class="text">
                  <h3>Fur coat</h3>
                  <p class="price">$143</p>
                </div>
              </div>
            
            </div>
          </div>
          -->

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
              <!--   <input type="text" class="form-control"> <span class="input-group-btn">

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
</body>

</html>