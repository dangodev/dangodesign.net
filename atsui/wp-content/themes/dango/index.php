<?php get_header(); ?>
<div id="posts-left" class="large-8 columns">
<?php if(have_posts()) { while(have_posts()) { the_post(); ?>
  <article>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <time datetime="<?php $date = get_the_date('Y-m-d'); echo $date ?>"><?php the_date(); ?></time>
    <a class="author" href="<?php the_author_meta('user_url'); ?>" target="_blank" rel="author"><?php the_author_meta('display_name'); ?></a>
    <?php the_content(); ?>
  </article><?php
}

if ( $wp_query->max_num_pages > 1 ) { ?>
  <div id="page-nav">
    <div class="nav-next"><?php previous_posts_link( __( '[' ) ); ?></div>
    <div class="nav-previous"><?php next_posts_link( __( ']' ) ); ?></div>
  </div>
<?php }
	} else { ?>
  <h2 class="empty">No posts found.</h2>
<?php } ?>
</div>
<nav class="large-4 columns show-for-medium-and-up"><?php get_sidebar(); ?></nav>
<?php get_footer(); ?>