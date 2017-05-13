<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>




<div class="section lightgrey" id="blog-overview">
  <?php if ( have_posts() ) : ?>
    <?php while (have_posts()) : the_post(); ?>
	<div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="center header text_h2"><?php the_title(); ?></h1>
            </div>
        </div>
  </div>

  <?php endwhile; ?>
  <?php endif; ?>

<div id="primary" class="content-area container">
  <main id="main" class="site-main" role="main">




<!-- Posts -->
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
<?php query_posts('showposts=6&post_type=post&paged=' . $paged); // First post Featured ?>
		<?php get_template_part('template-parts/loop', 'archive'); ?>
		<?php rewind_posts(); ?>



<!-- /Posts -->

    <?php //the_posts_navigation(); // http://wordpress.stackexchange.com/questions/174907/how-to-use-the-posts-navigation-for-wp-query-and-get-posts ?>
  </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- c/lass="section lightgrey" id="blog-overview" -->




<?php
get_sidebar();
get_footer();
