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

      <div class="wp-twbs-wrapper">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article>
              <h2><a href="<?php the_permalink(); ?>" title="For More Info on <?php
              the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
              <?php the_content(); ?>
        </article>
        <?php endwhile; else: ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>

<?php get_footer();?>
