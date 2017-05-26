<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <?php wp_head(); ?>
  <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

</head>
<body <?php body_class(); ?>>

  <!-- wrapper -->



  <!-- header -->
  <header class="header clear" role="banner">
    <div class="wrapper">
       <!-- logo -->
       <div class="logo">
          <a href="<?php echo home_url(); ?>">
             <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
             <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
         </a>
     </div>
     <!-- /logo -->

     <!-- nav -->
     <nav class="nav" role="navigation">
      <?php html5blank_nav(); ?>
  </nav>
  <!-- /nav -->
</div>
</header>
<div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
</ol>

<div class="carousel-inner">
    <div class="item active">
      <a href="#"><img src="http://placekitten.com/1600/600" /></a>
      <div class="carousel-caption">
        <h3>Meow</h3>
        <p>Just Kitten Around</p>
    </div>
</div>
<div class="item">
  <a href="#"><img src="http://placekitten.com/1600/600" /></a>
  <div class="carousel-caption">
    <h3>Meow</h3>
    <p>Just Kitten Around</p>
</div>
</div>
<div class="item">
  <a href="#"><img src="http://placekitten.com/1600/600" /></a>
  <div class="carousel-caption">
    <h3>Meow</h3>
    <p>Just Kitten Around</p>
</div>
</div>
</div>

<a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
<!-- /header -->
<div class="carousel-container">


  <div id="slider-carousel" class="owl-carousel">
    <div class="item">
      <a class="hoverfx" href="#">
        <div class="figure">
          This is text when image is hovered
        </div>
        <div class="overlay">
        </div>
        <img src="http://dummyimage.com/350x300/f0f0f0/333">
      </a>
      <h4>HEADING</h4>
      <h6>Sub heading</h6>
    </div>
    <div class="item">
      <a class="hoverfx" href="#">
        <div class="figure">
          This is text when image is hovered
        </div>
        <div class="overlay">
        </div>
        <img src="http://dummyimage.com/350x300/f0f0f0/333">
      </a>
      <h4>HEADING</h4>
      <h6>Sub heading</h6>
    </div>
    <div class="item">
      <a class="hoverfx" href="#">
        <div class="figure">
          This is text when image is hovered
        </div>
        <div class="overlay">
        </div>
        <img src="http://dummyimage.com/350x300/f0f0f0/333">
      </a>
      <h4>HEADING</h4>
      <h6>Sub heading</h6>
    </div>
    <div class="item">
      <a class="hoverfx" href="#">
        <div class="figure">
          This is text when image is hovered
        </div>
        <div class="overlay">
        </div>
        <img src="http://dummyimage.com/350x300/f0f0f0/333">
      </a>
      <h4>HEADING</h4>
      <h6>Sub heading</h6>
    </div>
    <div class="item">
      <a class="hoverfx" href="#">
        <div class="figure">
          This is text when image is hovered
        </div>
        <div class="overlay">
        </div>
        <img src="http://dummyimage.com/350x300/f0f0f0/333">
      </a>
      <h4>HEADING</h4>
      <h6>Sub heading</h6>
    </div>
    <div class="item">
      <a class="hoverfx" href="#">
        <div class="figure">
          This is text when image is hovered
        </div>
        <div class="overlay">
        </div>
        <img src="http://dummyimage.com/350x300/f0f0f0/333">
      </a>
      <h4>HEADING</h4>
      <h6>Sub heading</h6>
    </div>
  </div>


  <div class="customNavigation">
    <a class="btn gray prev"><i class="icon ion-ios-arrow-left"></i></a>
    <a class="btn gray next"><i class="icon ion-ios-arrow-right"></i></a>
  </div>


</div>
<div class="wrapper">
