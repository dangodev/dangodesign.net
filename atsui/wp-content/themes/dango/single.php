<?php get_header(); while(have_posts()) { the_post(); ?>
<div id="posts-left" class="single large-7 columns">
<article><h1><?php the_title(); ?></h1>
<time datetime="<?php $date = strtotime(get_the_date()); echo date('Y-M-d', $date); ?>"><?php the_date(''); ?></time>
<?php the_content(); ?>
<div id="about-author"><?php the_author_description(); ?></div>
</article>
</div>
<nav class="large-5 columns show-for-medium-and-up"><?php get_sidebar(); ?></nav>
<?php } get_footer(); ?>
