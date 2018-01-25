<div class="col-xs-12 listed">
	<?php if( has_post_thumbnail() ):
		$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	endif; ?>
	<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">
		<div style="height:100%; margin-left:-15px;">
			<div class="blog-content" style="position:absolute; bottom:0;background:rgba(208,208,208,0.7);right:15px; left:15px;width: 40%;">				
				<?php the_title( sprintf('<h1 class="entry-title" style="text-shadow: 2px 2px #ff0000; padding-left:15px;margin:3px;"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>			
				<small style="margin-left:15px;"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta("ID") ) ); ?>"><?php the_author(' ');?></a></small>
				<small>Posted on: <?php the_time('F j, Y'); ?></small>
				<?php //the_excerpt();?>
			</div>
        </div>
	</div>
</div>