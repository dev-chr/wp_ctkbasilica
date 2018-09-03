<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html <?php language_attributes(); ?>>
<?php
date_default_timezone_set("America/New_York");
$ctkTheme = get_template_directory_uri();
?>



<head>
    
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ctkTheme; ?>/apple-touch-icon.png?v=yyLLR2Xq4d">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ctkTheme; ?>/favicon-32x32.png?v=yyLLR2Xq4d">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ctkTheme; ?>/favicon-16x16.png?v=yyLLR2Xq4d">
  <link rel="manifest" href="<?php echo $ctkTheme; ?>/site.webmanifest?v=yyLLR2Xq4d">
  <link rel="mask-icon" href="<?php echo $ctkTheme; ?>/safari-pinned-tab.svg?v=yyLLR2Xq4d" color="#b51118">
  <link rel="shortcut icon" href="<?php echo $ctkTheme; ?>/favicon.ico?v=yyLLR2Xq4d">
  <meta name="msapplication-TileColor" content="#ffc40d">
  <meta name="theme-color" content="#ffffff">
    
    <meta name="description" content="<?php the_title();?> | The beautiful Cathedral Basilica of Christ the King is not only the Seat of the Bishop, but a great, silent, irresistible agency for the influencing of souls of people through the ministry of exalted art." />
    <meta name="keywords" content="Cathedral Basilica of Christ the King, Hamilton, Diocese of Hamilton, Christ the King Cathedral, Roman Catholic Church, Ontario, Canada" />
    <meta property="og:title" content="<?php wp_title('|', 'true', 'right'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="138706026905472" />
    <meta property="og:site_name" content="The Cathedral Basilica of Christ the King, Hamilton" />
    <meta property="og:description" content="<?php the_title();?> | The beautiful Cathedral Basilica of Christ the King is not only the Seat of the Bishop, but a great, silent, irresistible agency for the influencing of souls of people through the ministry of exalted art."   />
    <meta property="og:image" content="<?php echo $ctkTheme; ?>/images/ctkbasilica.jpg" />
    <meta property="og:url" content="<?php the_permalink();?>" />
     
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo $ctkTheme; ?>/css/cbck.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $ctkTheme; ?>/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $ctkTheme; ?>/css/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $ctkTheme; ?>/css/magnific.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $ctkTheme; ?>/css/slides.css" />
    
        
    <?php wp_head(); ?>

    <script type="text/javascript" src="<?php echo $ctkTheme; ?>/js/fastclick.js"></script>
    <script type="text/javascript" src="<?php echo $ctkTheme; ?>/js/magnific-0.9.9.min.js"></script>
    <script type="text/javascript" src="<?php echo $ctkTheme; ?>/js/contact-form.js"></script>
    <script type="text/javascript" src="<?php echo $ctkTheme; ?>/js/expanding-text.js"></script>
    
    <?php
    if (!empty($_GET['contact'])) {
        $contact = filter_var($_GET['contact'], FILTER_SANITIZE_URL);
    }
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                removalDelay: 1,
                mainClass: 'mfp-fade',
                gallery:{enabled:true},
                callbacks: {
                buildControls: function() {
                 this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
                }
              }
            });

            $('.open-email').magnificPopup({
                type: 'iframe',
                removalDelay: 1000,
                mainClass: 'mfp-fade'
            });
        });
    
    </script>
    
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">
    
    <ul class="cb-slideshow">
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
    </ul>
        

        
<nav id="menu" role="navigation">
    <?php wp_nav_menu(array( 'theme_location' => 'main-menu' )); ?>
</nav>

<!--- MOBILE NAV -->

<div class="hamburgler-menu">
  <ul class="hamburgler-menu-list">
        <li><a href="/news-events/">News &#038; Events</a></li>
        <li><a href="/gallery/">Gallery</a></li>
        <li><a href="https://hamiltondiocese.com/bishop/douglas-crosby.php">Bishop Crosby</a></li>
        <li><a href="/bulletin/">Bulletin</a></li>
        <li><a href="/parish-life/">Parish Life</a></li>
        <li><a href="/sacraments/">Sacraments</a></li>
        <li><a href="/donate/">Donate / Legacy Giving</a></li>  
        <li><a href="/contact/">Contact</a></li>
  </ul>
</div>
<div class="fixed-nav">
<div id="hamburgler" class="hamburgler-icon-wrapper">
  <span class="hamburgler-icon"></span>
</div>
  <a href="/" class="nav-title">Cathedral Basilica of Christ the King</a>
</div>

        
<div id="hero-blank">
<div id="wrap-wrap">

</div>
</div> 
<div class="clear"></div>


<div class="<?php if (is_page(32)) {
    echo "container-home";
} else {
    echo "container";
}?>">
    
    <?php if (is_page(32)) {  ?>
    
    <img id="logo" alt="The Coat of Arms of the Cathedral Basilica of Christ the King" src="<?php echo $ctkTheme; ?>/images/coat-400x525.png" >
    <img id="title" alt="The Cathedral Basilica of Christ the King" src="<?php echo $ctkTheme; ?>/images/cathedral-basilica-of-christ-the-king-logo.png" >
    
    <div class="clear"></div>
    
    <center>
    <?php } ?>
    
