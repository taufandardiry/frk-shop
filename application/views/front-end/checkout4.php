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
          <img src="<?php echo base_url() ?>assets/front-end/img/logo-small1.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span> </a>
        <div class="navbar-buttons">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"> <span class="sr-only">Toggle navigation</span> <i class="fa fa-align-justify"></i> </button>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search"> <span class="sr-only">Toggle search</span> <i class="fa fa-search"></i> </button>
          <a class="btn btn-default navbar-toggle" href="<?php echo base_url()."index.php/MyController/basketpage" ?>"> <i class="fa fa-shopping-cart"></i> <span class="hidden-xs">0 item in cart</span> </a>
        </div>
      </div>
      <!--/.navbar-header -->
      <div class="navbar-collapse collapse" id="navigation">
        <ul class="nav navbar-nav navbar-left">
          <li>
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
          <a href="<?php echo base_url()."index.php/MyController/basketpage" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
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
            <li>Checkout - Order review</li>
          </ul>
        </div>
        <div class="col-md-9" id="checkout">
          <div class="box">
            <form method="post" action="<?php echo base_url()."index.php/MyController/index" ?>">
              <h1>Checkout - Order review</h1>
              <ul class="nav nav-pills nav-justified">
                <li>
                  <a href="<?php echo base_url()."index.php/MyController/checkout1page" ?>"><i class="fa fa-map-marker"></i>
                    <br>Address</a>
                </li>
                <li>
                  <a href="<?php echo base_url()."index.php/MyController/checkout2page" ?>"><i class="fa fa-truck"></i>
                    <br>Delivery Method</a>
                </li>
                <li>
                  <a href="<?php echo base_url()."index.php/MyController/checkout3page" ?>"><i class="fa fa-money"></i>
                    <br>Payment Method</a>
                </li>
                <li class="active">
                  <a href="#"><i class="fa fa-eye"></i>
                    <br>Order Review</a>
                </li>
              </ul>
              <div class="content">
                <div class="table-responsive">
                  <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2">Product</th>
                      <th>Quantity</th>
                      <th>Unit price</th>
                      <th>Discount</th>
                      <th colspan="2">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <a href="#">
                          <img src="<?php echo base_url() ?>assets/front-end/img/Pashmina-Katun-1.jpg" alt="White Blouse Armani"> </a>
                      </td>
                      <td>
                        <a href="#">Pashmina Katun Ima Queenfha - Hijau Tua</a>
                      </td>
                      <td>
                        <input type="number" value="2" class="form-control"> </td>
                      <td>RP 38000</td>
                      <td>RP 0</td>
                      <td>RP 76000</td>
                      <td>
                        <a href="#"><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <img src="<?php echo base_url() ?>assets/front-end/img/Pashmina-Rawis-Milano-5.jpg" alt="Black Blouse Armani"> </a>
                      </td>
                      <td>
                        <a href="#">Pashmina Rawis Milano - Kuning</a>
                      </td>
                      <td>
                        <input type="number" value="1" class="form-control"> </td>
                      <td>RP 18000</td>
                      <td>RP 0</td>
                      <td>RP 18000</td>
                      <td>
                        <a href="#"><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan="5">Total</th>
                      <th colspan="2">RP 94000</th>
                    </tr>
                  </tfoot>
                </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.content -->
              <div class="box-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url()."index.php/MyController/checkout3page" ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to Payment method</a>
                </div>
                <div class="pull-right">
                  <button type="submit" class="btn btn-primary">Checkout<i class="fa fa-chevron-right"></i> </button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-md-9 -->
        <div class="col-md-3">
          <div class="box" id="order-summary">
            <div class="box-header">
              <h3>Order summary</h3>
            </div>
            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>Order subtotal</td>
                    <th>RP 94000</th>
                  </tr>
                  <tr>
                    <td>Shipping and handling</td>
                    <th>RP 25000</th>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <th>RP 0</th>
                  </tr>
                  <tr class="total">
                    <td>Total</td>
                    <th>RP 119000</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col-md-3 -->
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