<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<hr>
	<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
	
	<?php if( has_post_thumbnail() ): ?>
		
		<div class="pull-left" style="margin-right:10px;"><?php the_post_thumbnail('thumbnail'); ?></div>

	<?php endif; ?>
	
	<small><?php the_category(' '); if(has_tag()){?>|| <?php the_tags('');} ?></small>
	<br>
	<small><?php edit_post_link(); ?></small>
	
	<?php the_excerpt(); ?>
	

</article>