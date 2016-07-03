<!DOCTYPE html>
<html>
<head>
  <title>Elok Project - Portofolio</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.10, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url() ?>public/assets/images/logo-elok-435x193-1.png" type="image/x-icon">
  <meta name="description" content="">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/mobirise/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/grid/grid.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/cubeportofolio/cubeportofolio.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/cubeportofolio/fonts-awesome.css" type="text/css">
</head>

<body>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-4">
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
                            <li class="mbr-navbar__item"><?php echo anchor('/','Beranda',array('class'=>'mbr-buttons__link btn text-white')); ?></li>
                            <li class="mbr-navbar__item"><?php echo anchor('/#about','Tentang Kami',array('class'=>'mbr-buttons__link btn text-white')); ?></li>
                            <li class="mbr-navbar__item"><?php echo anchor('/#whyus','Kenapa Kami',array('class'=>'mbr-buttons__link btn text-white')); ?></li>
                            <li class="mbr-navbar__item"><?php echo anchor('pages/portofolio','Portofolio',array('class'=>'mbr-buttons__link btn text-white')); ?></li>
                            <li class="mbr-navbar__item"><?php echo anchor('/#contact','Kontak',array('class'=>'mbr-buttons__link btn text-white')); ?></li>
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a rel="external" href=""></a></section>
<section class="mbr-section mbr-section--relative mbr-section--short-paddings mbr-after-navbar" id="msg-box2-10" style="background-color: rgb(255, 255, 255);">
</section>

<!-- Gallery -->
<div class="wb-grid">
<div class="wb-center">
<div class="grid">
  <div id="js-filters-masonry" class="cbp-l-filters-alignRight">
    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
      All
    </div>
    <?php if($showK): ?>
      <?php foreach($showK as $L): ?>
    <div data-filter=".<?php echo $L['kategori'] ?>" class="cbp-filter-item">
        <?php if($L['kategori']=='WebDevelopment'){ echo 'Web Development';}elseif ($L['kategori']=='GraphicDesign'){ echo 'Graphic Design';}elseif ($L['kategori']=='PreWedding') { echo 'Pre Wedding';}elseif ($L['kategori']=='Wedding') { echo 'Wedding';}else{ echo 'BTS';}
        ?>
    </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <div id="js-grid-masonry" class="cbp">
    <?php if($showP): ?>
      <?php foreach($showP as $P): ?>
    <div class="cbp-item <?php echo $P['kategori'] ?>">
        <a href="<?php echo base_url() ?>public/assets/upload/portofolio/<?php echo $P['gambar_porto'] ?>" class="cbp-caption cbp-lightbox" data-title="<?php echo $P['judul_porto'] ?><br><?php echo $P['tagline'] ?>">
            <div class="cbp-caption-defaultWrap">
                <img src="<?php echo base_url() ?>public/assets/upload/portofolio/<?php echo $P['gambar_porto'] ?>" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title"><?php echo $P['judul_porto'] ?></div>
                        <div class="cbp-l-caption-desc"><?php echo $P['tagline'] ?></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>
</div>
</div>

  <script src="<?php echo base_url() ?>public/assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>public/assets/cubeportofolio/jquery.cubeportofolio.min.js"></script>
  <script src="<?php echo base_url() ?>public/assets/cubeportofolio/main.js"></script>
  <script src="<?php echo base_url() ?>public/assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="<?php echo base_url() ?>public/assets/jarallax/jarallax.js"></script>
  <script src="<?php echo base_url() ?>public/assets/mobirise/js/script.js"></script>

</body>
</html>
