<!DOCTYPE html>
<html>
<head>
    <title>
      Elok Project - Login
    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body class="login2">

    <!-- Login Screen -->
    <div class="login-wrapper">
      <h1>Login Admin</h1>
      <?php echo form_open('auth/checkLogin'); ?>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-envelope"></i></span><input type="text" class="form-control" name="username" placeholder="Username" type="text">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-lock"></i></span><input type="password" class="form-control" name="password" placeholder="Password" type="text">
          </div>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">
      <?php echo form_close(); ?>
    </div>
    <!-- End Login Screen -->

    <!---javascript -->
    <script src="../../../code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="../../../code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/raphael.min.js" type="text/javascript"></script><script src="<?php echo base_url() ?>public/assets/admin/javascripts/selectivizr-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/fullcalendar.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/gcal.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/datatable-editable.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/excanvas.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/isotope_extras.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/select2.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/styleswitcher.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/wysiwyg.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/summernote.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.inputmask.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/bootstrap-fileupload.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/bootstrap-timepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/bootstrap-colorpicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/typeahead.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/daterange-picker.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/date.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/skycons.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/fitvids.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/admin/javascripts/respond.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/assets/jquery/jquery.js" type="text/javascript"></script>

  </body>
</html>
