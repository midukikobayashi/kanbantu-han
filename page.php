<?php get_header(); ?>

<!-- タイトルの読み込み -->
<div class="entry-header">
<h2 class="pagetitle"><?php the_title();?></h2>
</div>

<!-- 本文の読み込み -->
<div class="entry-content">
<?php
if(have_posts()){
	while(have_posts()){
		the_post();
		the_content();
	}
} ?>
</div>

<?php get_footer(); ?>