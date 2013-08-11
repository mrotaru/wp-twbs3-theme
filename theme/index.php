<?php require '../vendor/raveren/kint/Kint.class.php';?>

<?php get_header();?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Project name</a>
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

    <div class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>
<?php get_footer();?>
