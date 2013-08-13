<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php //require '../vendor/raveren/kint/Kint.class.php';?>

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link href="<?php echo get_stylesheet_directory_uri() . "/style.css";?>" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ page.base_url }}assets/js/html5shiv.js"></script>
      <script src="{{ page.base_url }}assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ page.base_url }}assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ page.base_url }}assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ page.base_url }}assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="{{ page.base_url }}assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="{{ page.base_url }}assets/ico/favicon.png">
  </head>
  <body>


    <!-- Navigation -->
    <div class="navbar navbar-inverse navbar-fixed-top">

    <?php if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>'; // Fix menu overlap bug..  ?>

    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php home_url();?>"><?php bloginfo('name');?></a>
    <?php 
    wp_nav_menu( array( 
                'theme_location' => 'header-menu',
                'container_class' => 'nav-collapse collapse',
                'menu_class' => 'nav navbar-nav' 
            )
        );
    ?>
    </div>
</div>
