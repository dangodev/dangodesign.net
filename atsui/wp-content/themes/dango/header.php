<!DOCTYPE html>
<!--
      ...                         ..                    ..
   xH88"`~ .x8X                 dF                     888B.
 :8888   .f"8888Hf        u.   '88bu.                 48888E
:8888>  X8L  ^""`   ...ue888b  '*88888bu        .u    '8888'
X8888  X888h        888R Y888r   ^"*8888N    ud8888.   Y88F
88888  !88888.      888R I888>  beWE "888L :888'8888.  '88
88888   %88888      888R I888>  888E  888E d888 '88%"   8F
88888 '> `8888>     888R I888>  888E  888E 8888.+"      4
`8888L %  ?888   ! u8888cJ888   888E  888F 8888L        .
 `8888  `-*""   /   "*888*P"   .888N..888  '8888c. .+  u8N.
   "888.      :"      'Y"       `"888*""    "88888%   "*88%
     `""***~"`                     ""         "YP'      ""
                                                                                      ..
         .xHL                                                            .uef^"     888B.
      .-`8888hxxx~       x.    .          ..         ..                :d88E       48888E
   .H8X  `%888*"       .@88k  z88u      .@88i      .@88i         u     `888E       '8888'
   888X     ..x..     ~"8888 ^8888     ""%888>    ""%888>     us888u.   888E .z8k   Y88F
  '8888k .x8888888x     8888  888R       '88%       '88%   .@88 "8888"  888E~?888L  '88
   ?8888X    "88888X    8888  888R     ..dILr~`   ..dILr~` 9888  9888   888E  888E   8F
    ?8888X    '88888>   8888  888R    '".-%88b   '".-%88b  9888  9888   888E  888E   4
 H8H %8888     `8888>   8888 ,888B .   @  '888k   @  '888k 9888  9888   888E  888E   .
'888> 888"      8888   "8888Y 8888"   8F   8888  8F   8888 9888  9888   888E  888E  u8N.
 "8` .8" ..     88*     `Y"   'YP    '8    8888 '8    8888 "888*""888" m888N= 888> "*88%
    `  x8888h. d*"                   '8    888F '8    888F  ^Y"   ^Y'   `Y"   888    ""
      !""*888%~                       %k  <88F   %k  <88F                    J88"
      !   `"  .                        "+:*%`     "+:*%`                     @%
      '-....:~                                                             :"
-->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/logo.fb.png">
<meta property="og:url" content="<?php echo get_permalink($post->ID); ?>">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/tobanjan.css">
<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('url'); ?>/favicon.ico">
<script src="//use.typekit.net/pgw2ebq.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<link rel="apple-touch-icon-precomposed" type="image/ico" href="<?php bloginfo('url'); ?>/76x76.png">
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/kc.min.js"></script>
</head>

<body>
<? if(is_front_page()) : ?>
<div class="splash">
<img class="splash-logo" src="<?php bloginfo('template_directory') ?>/img/wordmark.svg" width="512" height="512">
<nav class="splash-nav">
<ul>
<li><a href="/blog">Blog</a></li>
<li><a href="/contact">Contact</a></li>
<li><a href="https://twitter.com/an_ennui" class="icon-twitter" target="_blank"></a></li>
<li><a href="https://dribbble.com/drewpowers" class="icon-dribbble" target="_blank"></a></li>
</ul>
</nav>
</div>
<? else: ?>
<div id="site">
<header id="head" class="row">
  <h1 id="logo" class="large-2 columns"><a class="icon-drew" href="<?php echo bloginfo('url'); ?>" title="Drew Powers / Home"><img src="<?php bloginfo('template_directory') ?>/img/wordmark.svg" width="64" height="64" alt="Drew Powers"></a></h1>
  <nav id="top-navigation" class="large-10 columns"><ul class="row"><li id="nav-p" class="small-4 large-4 columns<?php is_selected('portfolio'); ?>"><a class="icon-box" href="<?php bloginfo('url'); ?>">Portfolio</a></li><li id="nav-b" class="small-4 large-4 columns<?php is_selected('blog'); ?>"><a class="icon-pentip" href="<?php echo get_permalink(53); ?>">Blog</a></li><li id="nav-c" class="small-4 large-4 columns<?php is_selected('contact'); ?>"><a class="icon-dango" href="<?php echo get_permalink(55); ?>">Contact</a></li></ul></nav>
</header>
<div class="row">
<aside id="site-info" class="large-2 columns show-for-medium-up">
<?php if(is_single() && 'portfolio' === get_post_type()) { ?>
  <a class="big-back icon-arrow-left" href="<?php bloginfo('url'); ?>"></a>
<?php } else { ?>
  <h2>the<br>personal<br>portfolio of<br><span class="author">Drew<br>Powers</span></h2>
<?php } ?>
<div id="social"><a class="icon-twitter" href="https://twitter.com/an_ennui" target="_blank" title="Twitter">Twitter</a> <a class="icon-dribbble" href="http://dribbble.com/drewpowers" target="_blank" title="Dribbble">Dribbble</a> <a class="icon-github" href="https://github.com/dangodev" target="_blank" title="GitHub">GitHub</a></div>
</aside>
<section id="main" class="large-10 columns"><div class="row">
<? endif; ?>
