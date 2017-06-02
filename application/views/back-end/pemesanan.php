<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FRK Olshop - Data Pemesanan</title>
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
        <a href="<?php echo base_url()."index.php/MyControllerData/index" ?>"><svg class="glyph stroked dashboard-dial"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/MyControllerData/barangadmin" ?>"><svg class="glyph stroked table"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-table"></use></svg>&nbsp;Barang</a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/MyControllerData/inputadmin" ?>"><svg class="glyph stroked pencil"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil"></use></svg>&nbsp;Input</a>
      </li>
      <li class="active">
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
          <a href="#"><svg class="glyph stroked home"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-home"></use></svg></a>
        </li>
        <li class="active">Data Pemesanan</li>
      </ol>
    </div>
    <!--/.row-->
    <!--/.row-->
    <div class="row">
      <div class="col-lg-12">
        <div class="box">
          <h1>List Pesanan Customer</h1>
          <p class="text-muted">Berikut list pesanan customer yang menunggu konfirmasi admin. </p>
          <hr>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th>Kode Pos</th>
                  <th>Telephone</th>
                  <th>Status</th>
                  <th>Valid</th>
                </tr>
              </thead>
              <tbody>
              <form method="post" action="<?php echo site_url().'index.php/MyControllerData/pemesananadmin'?>">
                <?php foreach ($data as $x) { ?>
                <tr>
                  <td><?= $x['id'] ?></td>
                  <td><?= $x['nama_depan_c'] ?></td>
                  <td><?= $x['nama_belakang_c'] ?></td>
                  <td><?= $x['alamat'] ?></td>
                  <td><?= $x['kota'] ?></td>
                  <td><?= $x['kode_pos'] ?></td>
                  <td><?= $x['telephone'] ?></td>
                  <td><span class="label label-info"><?= $x['status_order'] ?></span></td>
                  <td>
                    <a href="customer-order.html" class="btn btn-primary btn-sm">Submit</a>
                  </td>
                </tr>
                <?php } ?>
                </form>
                <!--<tr>
                  <th># 1735</th>
                  <td>22/05/2017</td>
                  <td>RP 94000</td>
                  <td><span class="label label-info">Pending</span> </td>
                  <td>
                    <a href="customer-order.html" class="btn btn-primary btn-sm">Submit</a>
                  </td>
                </tr>
                <tr>
                  <th># 1735</th>
                  <td>22/05/2017</td>
                  <td>RP 125000</td>
                  <td><span class="label label-success">Paid</span> </td>
                  <td>
                    <a href="customer-order.html" class="btn btn-primary btn-sm">Submit</a>
                  </td>
                </tr>
                <tr>
                  <th># 1735</th>
                  <td>22/05/2017</td>
                  <td>RP 150000</td>
                  <td><span class="label label-danger">Cancelled</span> </td>
                  <td>
                    <a href="customer-order.html" class="btn btn-primary btn-sm">Submit</a>
                  </td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <!--/.row-->
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