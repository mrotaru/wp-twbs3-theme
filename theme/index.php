<?php require '../vendor/raveren/kint/Kint.class.php';?>

<?php get_header();?>
<div class="navbar navbar-inverse navbar-fixed-top">
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

    <div class="container">

      <div class="wp-twbs-wrapper">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

                <?php if ( 'post' == get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php //posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php endif; ?>
            </header><!-- .entry-header -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php
                //get_template_part( 'content', get_post_format() );
                //get_template_part( 'content' );
                //the_content('');
                the_excerpt();
                echo "<p>Posted in ";
                the_category(', ');
                echo "</p>";
                ?>
        <?php endwhile; else: ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>

<?php get_footer();?>
