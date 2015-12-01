<?php get_header(); while(have_posts()) { the_post(); ?>
<div id="single-portfolio">
<div id="portfolio-banner" style="background-image:url('<?php $bg = get_field('background_image'); echo $bg['url']; ?>');<?php the_field('banner_adjust'); ?>"></div>
<div id="portfolio-content" class="row">
  <div class="large-9 columns">
    <h1><?php the_title(); ?></h1>
    <?php $images = get_field('preview_images');
if(is_array($images) && count($images) > 0) { foreach($images as $image) { ?>
<p><a class="thumb" href="<?php echo $image['image']['url']; ?>"><img src="<?php echo $image['image']['sizes']['large']; ?>" alt="<?php the_title(); ?>"></a></p>
<?php } } ?>
    <?php the_content(); ?>
  </div>
  <aside class="large-3 columns"><?php $link = get_field('link'); if(!empty($link)) { ?><a class="icon-link" id="project-link" href="<?php echo $link; ?>" target="_blank"> <?php $stripped = explode('//', $link); echo $stripped[1]; ?></a><?php } ?>
    <div class="info"><?php the_field('infobox'); ?></div>
  </aside>
</div>
</div>
<?php } get_footer(); ?>
