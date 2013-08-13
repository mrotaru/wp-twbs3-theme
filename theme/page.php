<?php get_header();?>

    <div class="container">

      <div class="wp-twbs-wrapper">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

                    <?php if ( 'post' == get_post_type() ) : ?>
                    <div class="entry-meta">
                        <?php //posted_on(); ?>
                    </div><!-- .entry-meta -->
                    <?php endif;
                    echo "<p>Posted in ";
                    the_category(', ');
                    echo "</p>";
                    ?>
                </header><!-- .entry-header -->

                <?php
                the_content('');
                ?>

                <h3>Comments</h3>
                <ol class="commentlist">
                <?php comments_template(); ?>
                </ol>

        <?php endwhile; else: ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>

<?php get_footer();?>
