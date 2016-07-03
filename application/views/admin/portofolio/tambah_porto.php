<!DOCTYPE html>
<html>
<head>
    <title>
      Elok Project - Dashboard
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
  <body>
    <div class="modal-shiftfix">
      <!-- Navigation -->
      <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
              <li><?php echo anchor('auth/logout','Logout') ?></li>
            </ul>
          </div>
          <?php echo anchor('dashboard','Elok Project',array('class'=>'logo')); ?>
        </div>

        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a href="dashboard"><span aria-hidden="true" class="se7en-home"></span>Dashboard</a>
              </li>
              <li>
                <a href="pesanmasuk"><span aria-hidden="true" class="se7en-envelope"></span>Pesan Masuk</a>
              </li>
              <li>
                <a class="current" href="portofolio"><span aria-hidden="true" class="se7en-gallery"></span>Portofolio</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <i class="icon-reorder"></i>Post Portofolio
              </div>
              <div class="widget-content padded">
                <?php echo form_open_multipart('admin/postportofolio',array('class'=>'form-horizontal')); ?>
                  <div class="form-group">
                    <label class="control-label col-md-2">Judul Portofolio</label>
                    <div class="col-md-4">
                      <input class="form-control" placeholder="Judul Portofolio" name="judul_porto" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">Tagline</label>
                    <div class="col-md-4">
                      <input class="form-control" placeholder="Tagline" name="tagline" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">Kategori</label>
                    <div class="col-md-3">
                      <select class="form-control" name="kategori">
                        <option>--Pilih Kategori--</option>
                        <?php if($showK): ?>
                          <?php $no=1; foreach($showK as $k): ?>
                            <option value="<?php echo $k['kategori'] ?>"><?php echo $k['kategori'] ?></option>
                          <?php $no++; endforeach; ?>
                        <?php endif; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">Gambar Portofolio</label>
                    <div class="col-md-4">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <input type="file" class="btn btn-default btn-file fileupload-new" name="gambar_porto">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2"></label>
                    <div class="col-md-7">
                      <button class="btn btn-primary" type="submit">Post</button><button type="reset" class="btn btn-default-outline">Batal</button>
                    </div>
                  </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
