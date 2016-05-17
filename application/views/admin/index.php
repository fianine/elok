<!DOCTYPE html>
<html>
<head>
    <title>
      Elok Project - Dashboard
    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" />\
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
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/admin/stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
  </head>
  <body>
    <div class="modal-shiftfix">
      <!-- Navigation -->
      <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
              <li class="dropdown notifications hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-flag"></span>
                  <div class="sr-only">
                    Notifications
                  </div>
                  <p class="counter">
                    4
                  </p>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New user added: Jane Smith
                    </p></a>

                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      Sales targets available
                    </p></a>

                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New performance metric added
                    </p></a>

                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New growth data available
                    </p></a>

                  </li>
                </ul>
              </li>
              <li class="dropdown messages hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-envelope"></span>
                  <div class="sr-only">
                    Messages
                  </div>
                  <p class="counter">
                    3
                  </p>
                </a>
                <ul class="dropdown-menu messages">
                  <li><a href="#">
                    <img width="34" height="34" src="<?php echo base_url() ?>public/assets/admin/images/avatar-male2.png" />Could we meet today? I wanted...</a>
                  </li>
                  <li><a href="#">
                    <img width="34" height="34" src="<?php echo base_url() ?>public/assets/admin/images/avatar-female.png" />Important data needs your analysis...</a>
                  </li>
                  <li><a href="#">
                    <img width="34" height="34" src="<?php echo base_url() ?>public/assets/admin/images/avatar-male2.png" />Buy Se7en today, it's a great theme...</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown settings hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-gear"></span>
                  <div class="sr-only">
                    Settings
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span>Blue</a>
                  </li>
                  <li>
                    <a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span>Green</a>
                  </li>
                  <li>
                    <a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span>Orange</a>
                  </li>
                  <li>
                    <a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span>Magenta</a>
                  </li>
                  <li>
                    <a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span>Gray</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img width="34" height="34" src="<?php echo base_url() ?>public/assets/admin/images/avatar-male.jpg" />John Smith<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <i class="icon-user"></i>My Account</a>
                  </li>
                  <li><a href="#">
                    <i class="icon-gear"></i>Account Settings</a>
                  </li>
                  <li><a href="login1.html">
                    <i class="icon-signout"></i>Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="index-2.html">se7en</a>
          <form class="navbar-form form-inline col-lg-2 hidden-xs">
            <input class="form-control" placeholder="Search" type="text">
          </form>
        </div>
        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a class="current" href="index-2.html"><span aria-hidden="true" class="se7en-home"></span>Dashboard</a>
              </li>
              <li><a href="social.html">
                <span aria-hidden="true" class="se7en-feed"></span>Social Feed</a>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-star"></span>Features<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="fontawesome.html">Font Awesome Icons</a>
                  </li>
                  <li><a href="glyphicons.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Glyphicons
                    </p></a>

                  </li>
                  <li>
                    <a href="components.html">Components</a>
                  </li>
                  <li>
                    <a href="widgets.html">Widgets</a>
                  </li>
                  <li>
                    <a href="typo.html">Typography</a>
                  </li>
                  <li>
                    <a href="grid.html">Grid Layout</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-forms"></span>Forms<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="form-components.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Form Components
                    </p></a>

                  </li>
                  <li>
                    <a href="form-advanced.html">Advanced Forms</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-tables"></span>Tables<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="tables.html">Basic tables</a>
                  </li>
                  <li>
                    <a href="datatables.html">DataTables</a>
                  </li>
                  <li><a href="datatables-editable.html">
                    <div class="notifications label label-warning">
                      New
                    </div>
                    <p>
                      Editable DataTables
                    </p></a>

                  </li>
                </ul>
              </li>
              <li><a href="charts.html">
                <span aria-hidden="true" class="se7en-charts"></span>Charts</a>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-pages"></span>Pages<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="chat.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Chat
                    </p></a>

                  </li>
                  <li>
                    <a href="calendar.html">Calendar</a>
                  </li>
                  <li><a href="timeline.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Timeline
                    </p></a>

                  </li>
                  <li><a href="login1.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Login 1
                    </p></a>

                  </li>
                  <li>
                    <a href="login2.html">Login 2</a>
                  </li>
                  <li><a href="signup1.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Sign Up 1
                    </p></a>

                  </li>
                  <li>
                    <a href="signup2.html">Sign Up 2</a>
                  </li>
                  <li><a href="invoice.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Invoice
                    </p></a>

                  </li>
                  <li><a href="faq.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      FAQ
                    </p></a>

                  </li>
                  <li>
                    <a href="filters.html">Filter Results</a>
                  </li>
                  <li>
                    <a href="404-page.html">404 Page</a>
                  </li>
                </ul>
              </li>
              <li><a href="gallery.html">
                <span aria-hidden="true" class="se7en-gallery"></span>Gallery</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <!-- Statistics -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container stats-container">
              <div class="col-md-3">
                <div class="number">
                  <div class="icon globe"></div>
                  86<small>%</small>
                </div>
                <div class="text">
                  Overall growth
                </div>
              </div>
              <div class="col-md-3">
                <div class="number">
                  <div class="icon visitors"></div>
                  613
                </div>
                <div class="text">
                  Unique visitors
                </div>
              </div>
              <div class="col-md-3">
                <div class="number">
                  <div class="icon money"></div>
                  <small>$</small>924
                </div>
                <div class="text">
                  Sales
                </div>
              </div>
              <div class="col-md-3">
                <div class="number">
                  <div class="icon chat-bubbles"></div>
                  325
                </div>
                <div class="text">
                  New followers
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Statistics -->
        <div class="row">
          <!-- Weather -->
          <div class="col-md-8">
            <div class="widget-container weather">
              <div class="widget-content padded">
                <div class="row text-center">
                  <div class="col-sm-6 col-md-6 col-lg-4 today">
                    <p>
                      TODAY
                    </p>
                    <canvas class="skycons-element" data-skycons="RAIN" height="100" id="rain" width="100"></canvas>
                    <div class="number">
                      72<small>&deg;</small>
                    </div>
                    <p class="location">
                      Washington, D.C.
                    </p>
                  </div>
                  <div class="col-sm-2 hidden-xs">
                    <p>
                      MON
                    </p>
                    <canvas class="skycons-element" data-skycons="CLEAR_DAY" height="60" id="clear-day" width="60"></canvas>
                    <div class="number">
                      86<small>&deg;</small>
                    </div>
                  </div>
                  <div class="col-sm-2 hidden-xs">
                    <p>
                      TUE
                    </p>
                    <canvas class="skycons-element" data-skycons="RAIN" height="60" id="cloudy" width="60"></canvas>
                    <div class="number">
                      75<small>&deg;</small>
                    </div>
                  </div>
                  <div class="col-sm-2 hidden-xs">
                    <p>
                      WED
                    </p>
                    <canvas class="skycons-element" data-skycons="PARTLY_CLOUDY_DAY" height="60" id="partly-cloudy-day" width="60"></canvas>
                    <div class="number">
                      82<small>&deg;</small>
                    </div>
                  </div>
                  <div class="col-sm-2 hidden-md hidden-sm hidden-xs">
                    <p>
                      THU
                    </p>
                    <canvas class="skycons-element" data-skycons="SLEET" height="60" id="sleet" width="60"></canvas>
                    <div class="number">
                      64<small>&deg;</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Weather --><!-- Bar Graph -->
          <div class="col-md-4">
            <div class="widget-container small">
              <div class="heading">
                <i class="icon-signal"></i>New sign ups<i class="icon-list pull-right"></i><i class="icon-refresh pull-right"></i>
              </div>
              <div class="widget-content padded">
                <div class="bar-chart-widget">
                  <div class="chart-graph">
                    <div id="barcharts">
                      Loading...
                    </div>
                    <ul class="chart-text-axis">
                      <li>
                        1
                      </li>
                      <li>
                        2
                      </li>
                      <li>
                        3
                      </li>
                      <li>
                        4
                      </li>
                      <li>
                        5
                      </li>
                      <li>
                        6
                      </li>
                      <li>
                        7
                      </li>
                      <li>
                        8
                      </li>
                      <li>
                        9
                      </li>
                      <li>
                        10
                      </li>
                      <li>
                        11
                      </li>
                      <li>
                        12
                      </li>
                      <li>
                        13
                      </li>
                      <li>
                        14
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Bar Graph -->
        </div>
        <div class="row">
          <!-- Area Charts:Morris -->
          <div class="col-md-6">
            <div class="widget-container fluid-height">
              <div class="heading">
                <i class="icon-bar-chart"></i>Area Chart
              </div>
              <div class="widget-content padded text-center">
                <div class="graph-container">
                  <div class="caption"></div>
                  <div class="graph" id="hero-area"></div>
                </div>
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

  </body>
</html>
