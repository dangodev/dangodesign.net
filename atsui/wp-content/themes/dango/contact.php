<?php /* Template Name: Contact */
get_header(); the_post(); ?>
<div id="contact-page">
<div id="skills">
<?php $likes = array(
	'I hate plastic.',
	'I don’t like first-person shooters.',
	'I like theology.',
	'I have <em>RocketMan</em> memorized.',
  'I type in DVORAK.',
	'I can tell you how to type an “æ” on a keyboard (Alt + Q!).',
	'I would watch <em>Adventure Time</em> all day if I could.',
	'Once, I spent a night in a Bavarian train station.',
	'I don’t know if I’m a dog or a cat person (hedgehog person).',
	'I’m a traditional animation nerd.',
	'I’ve never had a nickname that’s stuck.',
	'Hockey is the only sport I can watch.',
	'I’m near-sighted but have perfect color perception.',
  'I hate drop-shadows.',
	'I can write your name in Katakana (no, I won’t translate your tattoo).',
	'I’m not quite sure how electricity works.',
  'I take notes in VIM.',
  'I’m the only climber that doesn’t wear a beanie.',
	'Ask me where the nearest donut shop is.',
	'I’m a remarkable guitarist when no one is watching.',
	'I will straighten your hanging photos when you’re not looking.',
  'I usually unwind with a tobacco pipe.',
	'Zero Suit is my main.',
	'I set my speedometer to kph.',
	'I enjoy few things as much as a well-brewed cup of coffee.',
	'I feel strangely at home in a forest.',
  'I will be a blacksmith before I die.',
  'I’m Ron Burgundy?',
	'I aspire to be a barefoot hiker—one day.',
	'Desert island books: <em>Ecclesiastes</em>, <em>Nobrow (any issue)</em>, and <em>Adventures of Sherlock Holmes</em>.'
	);
	$min = 0; $max = count($likes)-1;
	$select = array();
	while (count($select) < 5) {
		$r = mt_rand($min,$max);
		if (!in_array($r,$select)) $select[] = $r;
	}
?>
  <div id="pic"></div>
  <div id="span">
    <div id="creative"><h2>Creative</h2>
      <div class="hex"><div class="one"><h4>Writing</h4></div><div class="two"><h4>Distilling</h4></div><div class="three"><h4>Drawing</h4></div><div class="four"><h4>3D Rendering</h4></div><div class="five"><h4>Marketing</h4></div><div class="six"><h4>Research</h4></div></div>
      <div class="special"><h3>Specialties</h3><ul><li>UI Design</li><li>Color Theory</li><li>Typesetting</li></ul></div>
    </div>
    <div id="technical"><h2>Technical</h2>
      <div class="hex"><div class="one"><h4>Sass</h4></div><div class="two"><h4>Ruby</h4></div><div class="three"><h4>LOLCODE</h4></div><div class="four"><h4>Coldfusion</h4></div><div class="five"><h4>French</h4></div><div class="six"><h4>JavaScript</h4></div></div>
      <div class="special"><h3>Specialties</h3><ul><li>JavaScript</li><li>CSS Animations</li><li>Page Optimization</li></ul></div>
    </div>
    <div id="bio">
      <p>Hello,<br>
        My name is Drew Powers.</p>
      <p>I’m a <?php echo floor((time() - 590043600) / 31556926); ?>-year-old human currently working for <a href="//envylabs.com" target="_blank">Envy</a>. I have <?php echo round((time() - 1199145600) / 31556926); ?> years of experience designing and building websites. I believe great design is <a href="https://www.vitsoe.com/us/about/good-design" target="_blank">invisible</a>.</p>
      <p><?php foreach($select as $item) echo $likes[$item], ' '; ?></p>
      <p>Professionals can connect with me on <a href="https://www.linkedin.com/pub/drew-powers/39/36b/865" target="_blank">LinkedIn</a>, individuals can interact with me on <a href="https://twitter.com/an_ennui">Twitter</a>, and everybody can email me below about pretty much anything.</p>
    </div>
  </div>
</div>
<h1>Contact Me</h1>
<p style="opacity: 0.2"><i>(As long as it’s not about a real estate website!)</i></p>
<form id="contact-form" method="post" action="<?php bloginfo('url'); ?>/sendmail.php">
  <div id="form-overlay"></div><div id="form-status"></div>
  <div id="form-table"><div id="form-left"><input id="name" name="fullname" type="text" placeholder="name" required="required"><input id="postal" type="email" name="postal" placeholder="email" required="required"></div><div id="form-center"><textarea id="message" name="message" placeholder="Hello." required="required"></textarea></div><div id="form-right"><input id="send" type="submit" value="submit"></div></div>
</form>
</div>
<?php get_footer(); ?>