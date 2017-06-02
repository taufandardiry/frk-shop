<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin</title>
  <link href="<?php echo base_url() ?>assets/back-end/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/back-end/css/datepicker3.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/back-end/css/styles.css" rel="stylesheet">
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
      </div>
    </div>
  </nav>
  <hr>
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Login Administrator</div>
        <div class="panel-body">
          <form role="form" method="post" action="<?php echo site_url('MyControllerLogin/login')?>">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Username" name="username" type="text" autofocus=""> </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value=""> </div>
              <div class="checkbox"> <label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label> </div>
              <input class="btn btn-primary" type="submit" value="LOGIN"></td>
              <hr>
             
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
  </div>
  <hr>
  <!-- /.row -->
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