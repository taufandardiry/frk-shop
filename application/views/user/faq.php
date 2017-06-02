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
            <li>FAQ</li>
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
            <h1>Frequently Asked Questions</h1>
            <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
            <p>Please feel free to contact us :)</p>
            <hr>
            <div class="panel-group" id="accordion">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#faq1"> 1. Bagaimana pengiriman dilakukan? </a>
                  </h4>
                </div>
                <div id="faq1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li>1.1 Kami bertujuan untuk mengantar Produk Anda ke tempat pengiriman yang diminta oleh Anda dalam Pesanan Anda dan waktu pengiriman yang ditunjukkan oleh kami pada saat checkout pesanan Anda (diperbarui dalam Konfirmasi Pesanan).</li>
                      <li>1.2 Kami akan memberitahu Anda jika kami tidak mampu untuk memenuhi tanggal pengiriman seperti yang diperkirakan, tetapi, sejauh diizinkan oleh hukum, kami tidak bertanggung jawab kepada Anda atas kerugian, kewajiban, biaya kerusakan,
                        atau biaya lainnya yang timbul dari keterlambatan.</li>
                      <li>1.3 Setelah pengiriman Produk, Anda mungkin diminta untuk menandatangani bukti pengiriman. Anda dapat menghubungi Kami di +6281234567890 atau frk.shop@gmail.com jika terjadi kesalahan, cacat atau kerusakan. Anda harus dapat menunjukkan
                        dokumen yang dikirimkan dengan Produk, sesuai permintaan.</li>
                      <li>1.4 Perlu diketahui bahwa itu mungkin kami tidak dapat mengirimkan ke beberapa lokasi dengan alasan tertentu, kami akan memberitahu Anda menggunakan rincian kontak yang Anda berikan kepada kami ketika Anda membuat Pesanan Anda dan
                        mengatur pembatalan Pesanan atau pengiriman ke alamat pengiriman alternatif. </li>
                      <li>1.5 Kami mengirimkan Produk dalam kemasan standar kami. Bungkus kado tersedia berdasarkan permintaan dan dikenakan biaya tambahan. </li>
                      <li>1.6 Semua risiko dalam Produk akan berpindah ke Anda setelah pengiriman, kecuali di mana pengiriman tertunda karena pelanggaran kewajiban Anda berdasarkan Kontrak (lihat 1.8 di bawah), risiko akan berpindah bukan pada tanggal saat
                        pengiriman akan terjadi tapi saat Anda melakukan pelanggaran. Dari waktu ketika risiko berpindah ke Anda, kami tidak akan bertanggung jawab atas kehilangan atau kerusakan Produk. Setiap pelanggaran kewajiban oleh Anda, mungkin
                        mempengaruhi kemampuan Anda untuk berbelanja di FRK Shop di masa depan. </li>
                      <li>1.7 Jika Anda tidak ada untuk mengambil atau menerima pengiriman, kami dapat meninggalkan kartu yang berisi petunjuk mengenai pengiriman ulang atau pengambilan barang dari kurir pengirim.</li>
                      <li>1.8 Jika pengiriman atau pengambilan tertunda melalui penolakan tidak masuk akal untuk menerima pengiriman atau jika Anda tidak (dalam waktu dua minggu dari usaha pertama kami untuk memberikan produk kepada Anda) menerima pengiriman
                        atau mengambil Produk dari kurir pengirim, kami (tanpa mempengaruhi hak lainnya yang tersedia bagi kami) akan melakukan salah satu atau kedua hal berikut:
                        <ul>
                          <li>(a) mengenakan biaya untuk biaya yang dikeluarkan oleh kami; atau</li>
                          <li>(b) tidak membuat produk tersedia untuk pengiriman atau pengambilan dan memberitahu Anda bahwa kami akan segera membatalkan kontrak yang berlaku, dalam hal ini kami akan mengembalikan kepada Anda atau kartu kredit atau kartu
                            debit sebagaimana berlaku uang yang telah dibayarkan kepada kami di dalam kontrak, dikurang biaya administrasi (termasuk untuk mencoba mengirimkan dan kemudian pengembalian Produk, dan biaya penyimpanan setiap sebagaimana diatur
                            dalam klausul 1.8 (a) di atas).</li>
                        </ul>
                      </li>
                    </ul>
                    <p>Anda mengakui bahwa Produk-Produk yang ada adalah standar dan tidak dibuat sesuai dengan pesanan yang mungkin Anda inginkan.</p>
                  </div>
                </div>
              </div>
              <!-- /.panel -->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> 2. Pembatalan Oleh Pelanggan (Produk Tidak Rusak)</a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body"> Jika Anda ingin membatalkan Pesanan Anda silahkan hubungi Tim Layanan Pelanggan kami di +6281234567890. Tidak ada biaya pembatalan berlaku. Setelah Pesanan telah dikirimkan, mungkin tidak dapat melakukan pembatalan dan jika barang ingin
                    dikembalikan harus dikembalikan sesuai dengan pedoman perusahaan yang diberikan oleh Tim Layanan Pelanggan (Silahkan hubungi nomor tersebut di atas atau lihat slip pengembalian yang disediakan dalam paket yang diterima). </div>
                </div>
              </div>
              <!-- /.panel -->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> 3. Pengembalian dan Kebijakan Pengembalian Uang </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li>3.1 Jika Anda tidak puas dengan pembelian Anda, Anda dapat mengembalikan Produk kepada kami dalam waktu tiga puluh (30) hari sejak diterimanya. Produk harus belum digunakan, tag produk tidak rusak, dan Produk harus dalam kemasan
                        merek asli (jika ada). Kebijakan ini hanya berlaku untuk produk-produk yang tidak terdapat dalam daftar merek/barang yang tidak dapat dikembalikan yang terdapat pada Situs kami. </li>
                      <li>3.2 Anda harus memastikan bahwa produk yang dikirim kepada kami dalam kondisi yang sama seperti ketika diterima oleh Anda dan dikemas dengan baik. Dalam hal ini, jika barang dikembalikan kepada kami dalam kondisi yang tidak sesuai,
                        kami berhak untuk tidak menerima pengembalian dan mengirim produk kembali kepada Anda. </li>
                      <li>3.3 Kami menyediakan layanan pengiriman kembali pra-bayar untuk memastikan kemungkinan pengalaman belanja online yang terbaik untuk Anda. Silakan lihat label pengiriman pra-bayar dalam paket yang dikirim kepada Anda. Jika Anda tidak
                        dapat menemukan label pengiriman pra-bayar, hubungi Tim Layanan Pelanggan kami di +6281234567890 </li>
                      <li>3.4 Anda dapat memproses pengembalian melalui Jasa Pengiriman yang Anda pilih. </li>
                      <li>3.5 Produk yang Anda kembalikan bersama dengan slip pengembalian Anda, biasanya diterima di gudang kami dalam waktu lima (5) hari setelah diantarkan ke kantor pos. Pengembalian dana akan dikeluarkan segera setelah kami menerima barang
                        Anda, sesuai dengan metode pengembalian yang Anda pilih pada slip pengembalian Anda. </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- /.panel -->
            </div>
            <!-- /.panel-group -->
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
             <!--    <input type="text" class="form-control"> <span class="input-group-btn">

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