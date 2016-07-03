<!DOCTYPE html>
<html>
<head>
  <title>Elok Project</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.10, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url() ?>public/assets/images/logo-elok-435x193-1.png" type="image/x-icon">
  <meta name="description" content="">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/mobirise/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/bootstrap/css/carousel.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/sweetalert/sweetalert.css" type="text/css">
  <script type="text/javascript">

  </script>
</head>

<body>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="/elok"><img src="<?php echo base_url() ?>public/assets/images/logo-elok-435x193-1.png" class="mbr-navbar__brand-img mbr-brand__img" alt="elok"></a></span>

                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                          <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#myCarousel">Beranda</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#about">Tentang Kami</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#whyus">Kenapa Kami</a></li>
                            <li class="mbr-navbar__item"><?php echo anchor('pages/portofolio','Portofolio',array('class'=>'mbr-buttons__link btn text-white')); ?></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#contact">Kontak</a></li>
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!---Start Slider -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php if($showS): ?>
      <?php foreach($showS as $s): ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $s['active'] ?>" <?php if($s['active']==1){echo 'class="active"';} ?>></li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php if($showS): ?>
      <?php foreach($showS as $ss): ?>
        <div class="item <?php if($ss['active']==1){echo 'active';}?>">
          <img class="first-slide" src="<?php echo base_url() ?>public/assets/upload/slider/<?php echo $ss['gambar_slider'] ?>" alt="First slide">
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!---End Slider -->

<!---Start About-->
<section>
<section class="mbr-section mbr-after-navbar" id="header3-22">
    <div class="mbr-section__container container mbr-section__container--isolated" id="about">
        <div class="mbr-header mbr-header--center mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text title1" style="margin-bottom: -21px;">TENTANG KAMI</h3>
            </div>
        </div>
        <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
            <div class="mbr-section__row row">
                <div class="mbr-section__col">
                    <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                        <div class="mbr-article2 mbr-article--wysiwyg">
                            <p align="justify">Elok Project adalah sebuah perusahaan yang bergerak pada Digital Creative yang bertempat di Tangerang, Kami berdiri sejak 20 Oktober 2015. Dan beberapa bidang  yang kami kerjakan adalah : <strong>Photography</strong> ( Buku Tahunan Sekolah, Pre & Wedding, Company Profile, dll ), <strong>Graphic Design</strong> ( Logo Design, Layout Design, Merchandise Design, Photo Editing, dll ), <strong>Web Development</strong> ( eCommerece,Web Design,Responsive Design,dll ), <strong>Digital Printing</strong> ( All Item )</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<!---End About -->

<!---Start Why Us -->
<section id="whyus">
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-19" style="margin-top: -46px;background-color: #27aae0">
    <div class="mbr-section__container mbr-section__container--std-top-padding mbr-section__container--sm-bot-padding mbr-section-title container" style="padding-top: 93px;">
        <div class="mbr-header mbr-header--center mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <br>
                <br>
                <h3 class="mbr-header__text title1">KENAPA KAMI?</h3>
            </div>
        </div>
    </div>

    <div class="row featurette">
      <div class="col-md-7 tengah" style="color:#FFF">
        <h2 class="featurette-heading">“KARENA, KAMI MEMPUNYAI SDM YANG PROFESIONAL DI BIDANG KREATIF INI ”</h2>
        <p class="lead" align="justify">Kami mampu membuat apa yang kalian inginkan. Khususnya untuk Buku tahunan sekolah (BTS). Kami mampu membuat model yang sama seperti kebanyakan, atau beda dari yang lain. 
        </p>
        <p class="lead" align="justify">Dan kamipun memasang <i><strong>Budget</strong></i> pembutan Buku tahunan sekolah dengan harga yang terbilang <strong>MURAH</strong>. Namun dengan kualitas serta hasil yang tentunya  tidak murahan! Terlebih kami sangat tepat waktu. Kami mampu mengerjakan pembuatan Buku tahunan sekolah (BTS) dengan deadline 1 Bulan sudah jadi. Dengan kerja cepat kami, kami tetap memperhatikan kualitas pesanan sama persis dengan apa yang kalian inginkan.
        </p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" width="348px" src="<?php echo base_url() ?>public/assets/images/whyus3.png" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette tengah-fitur">
      <div class="col-md-7 col-md-push-5 tengah">
        <h2 class="featurette-heading">“KARENA, KAMI PAHAM APA YANG KALIAN INGINKAN”</h2>
        <p class="lead" align="justify">Ingin konsep foto Buku tahunan sekolah (BTS) yang tidak biasa? atau foto biasa namun dengan design yang tidak biasa? atau masih bingung juga dengan konsep Buku tahunan sekolahnya? Langsung diskusikan dengan kami. Karna tim kreatif kami akan membantu memberikan solusi agar konsep Buku tahunan sekolah kamu menjadi couple dengan identitas angkatanmu.
      </p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" width="348px" src="<?php echo base_url() ?>public/assets/images/whyus1.png" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette" style="padding: 30px;">
      <div class="col-md-7 tengah" style="color:#FFF">
        <h2 class="featurette-heading">“KARENA, KAMI INGIN MEMBERIKAN YANG TERBAIK UNTUK KALIAN”</h2>
        <p class="lead" align="justify">Proses pembuatan buku tahunan sekolah (BTS) tentunya sangat melelahkan. maka dari itu kami siap membantu koordinasi dengan siswa, agar proses tersebut menjadi sangat menyenangkan dan tidak mengganggu proses belajar tentunya.
        </p>
        <p class="lead" align="justify">Kamipun akan terus berhubungan dengan panitia BTS atau pihak sekolah yang bersangkutan untuk terus memberikan Progres kinerja kami sampai penyerahan Buku tahunan sekolah berlangsung.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" src="<?php echo base_url() ?>public/assets/images/whyus2.png" alt="Generic placeholder image">
      </div>
    </div>
</section>
<!---End Why Us -->

<!---Start Contact -->
<section class="engine" id="contact"><a rel="external" href="">website software for mac</a></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar" id="form1-28" style="background-color: rgb(239, 239, 239);">
    <div class="mbr-section__container mbr-section__container--std-padding container" style="margin-top:-46px;padding-top: 31px; padding-bottom: 62px;">
        <div class="row">
            <div class="col-sm-12  animated fadeInUp">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2  animated fadeInUp">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text title1">FORM KONTAK</h2>
                        </div>
                        <div class="container">
                          <div class="row">
                              <div class="col-md-9 col-md-pull-3">
                                  <div class="kolom2">
                                    <?php echo form_open('pages/send'); ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama" required="required" placeholder="Nama*">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" required="required" placeholder="Email*">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="no_telp" required="required" placeholder="Nomor Telepon*">
                                        </div>
                                        <div class="form-group">
                                            <textarea style="height: 106px;" class="form-control" name="" rows="7" placeholder="Pesan"></textarea>
                                        </div>
                                        <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger button">Kirim</button></div>
                                    <?php echo form_close(); ?>
                                  </div>
                              </div>
                              <div class="col-md-3 col-md-pull-3">
                                  <div class="kolom">
                                    <p>
                                      Address : Jl. Makam No.37 Ciledug-Tangerang <br>
                                      Phone : 0878-0932-2526 <br>
                                      WhatsApp : 0896-8575-8656 <br>
                                      Line ID : elokproject <br>
                                      E-mail: hello@elokproject.com
                                    </p>
                                    <a href="https://www.facebook.com/elokproject/"><img src="<?php echo base_url() ?>public/assets/images/fb.png" alt="Facebook" /></a>&nbsp;
                                    <a href="https://www.instagram.com/elokproject/"><img src="<?php echo base_url() ?>public/assets/images/ig.png" alt="Instagram" /></a>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---End Contact -->

  <script src="<?php echo base_url() ?>public/assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>public/assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="<?php echo base_url() ?>public/assets/jarallax/jarallax.js"></script>
  <script src="<?php echo base_url() ?>public/assets/mobirise/js/script.js"></script>
  <script src="<?php echo base_url() ?>public/assets/sweetalert/sweetalert.min.js"></script>

</body>
</html>
