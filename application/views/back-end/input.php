<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FRK Olshop - Input</title>
  <link href="<?php echo base_url() ?>assets/back-end/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/back-end/css/datepicker3.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/back-end/css/styles.css" rel="stylesheet">
  <!--Icons-->
  <script src="<?php echo base_url() ?>assets/back-end/js/lumino.glyphs.js"></script>
  <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#"><span>FRK</span>Admin</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg> Hai, <?php echo $this->session->userdata('username') ?> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="<?php echo site_url('MyControllerData/logout')?>"><svg class="glyph stroked cancel"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-cancel"></use></svg> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search"> </div>
    </form>
    <ul class="nav menu">
      <li>
        <a href="<?php echo base_url()."index.php/MyControllerData/index " ?>"><svg class="glyph stroked dashboard-dial"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/MyControllerData/barangadmin" ?>"><svg class="glyph stroked table"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-table"></use></svg>&nbsp;Barang</a>
      </li>
      <li class="active">
        <a href="<?php echo base_url()."index.php/MyControllerData/inputadmin" ?>"><svg class="glyph stroked pencil"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil"></use></svg>&nbsp;Input</a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/MyControllerData/pemesananadmin" ?>"><svg class="glyph stroked app-window"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-app-window"></use></svg>&nbsp;Data pemesanan</a>
      </li>
      <div class="attribution">
        <p>© 2017 FRK Olshop.</p>
      </div>
    </ul>
  </div>
  <!--/.sidebar-->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li>
          <a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></a>
        </li>
        <li class="active">Input Data</li>
      </ol>
    </div>
    <!--/.row-->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Input Data Barang</h1>
      </div>
    </div>
    <!--/.row-->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Form Barang</div>
          <div class="panel-body">
            <div class="col-md-12">
              <!-- <form role="form" method="post" action="<?php echo site_url('MyControllerData/do_upload')?>"> -->
              <?php echo form_open_multipart(site_url('MyControllerData/do_upload')) ?>
                <div class="form-group"> <label>Kode Barang</label>
                  <input class="form-control" type="text" name="kode_barang" placeholder="kode barang"> </div>
                <div class="form-group"> <label>Nama Barang</label>
                  <input class="form-control" type="text" name="nama_barang" placeholder="nama barang"> </div>
                <div class="form-group"> <label for="jenisbarang">Jenis Barang</label>
                  <br>
                  <input type="radio" name="jenis" value="jilbab" checked=""> Jilbab
                  <br>
                  <input type="radio" name="jenis" value="ciput"> Ciput
                  <br>
                  <input type="radio" name="jenis" value="kaoskaki"> Kaos Kaki
                  <br> </div>
                <div class="form-group"> <label>Satuan</label>
                  <input class="form-control" type="text" name="satuan" placeholder="satuan"> </div>
                <div class="form-group"> <label>Jumlah</label>
                  <input class="form-control" type="number" name="jumlah" placeholder="jumlah"> </div>
                <div class="form-group"> <label>Harga</label>
                  <input class="form-control" type="number" name="harga" placeholder="harga"> </div>
                <div class="form-group"> <label>Image</label>
                  <input class="form-control" type="file" name="image" size="20"> </div>
                <hr>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <!--<button type="reset" class="btn btn-default">Reset</button> -->
                <?php form_close() ?>
              
            </div>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- /.row -->
  </div>
  <!--/.main-->
  <script src="<?php echo base_url() ?>assets/back-end/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url() ?>assets/back-end/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/back-end/js/chart.min.js"></script>
  <script src="<?php echo base_url() ?>assets/back-end/js/chart-data.js"></script>
  <script src="<?php echo base_url() ?>assets/back-end/js/easypiechart.js"></script>
  <script src="<?php echo base_url() ?>assets/back-end/js/easypiechart-data.js"></script>
  <script src="<?php echo base_url() ?>assets/back-end/js/bootstrap-datepicker.js"></script>
  <script>
    !function ($) {
    			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
    				$(this).find('em:first').toggleClass("glyphicon-minus");	  
    			}); 
    			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    		}(window.jQuery);
    
    		$(window).on('resize', function () {
    		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    		})
    		$(window).on('resize', function () {
    		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    		})
  </script>
</body>

</html>