<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if( has_post_thumbnail() ): 
		$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	endif; ?>

	
	<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>); postion: relative">
		<div style="bottom:0; position:absolute;right:0; left:0; padding-left:15px; padding-right:15px;">	
			<div style=" background:rgba(81, 81, 84, .7);padding-top:5px;">
				<div class="blog-info">
					<?php the_title( sprintf('<h1 class="entry-title" style="margin-top:0px; margin-bottom:0px;"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>					
					<small style="color: white;"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta("ID") ) ); ?>"><?php the_author(' '); ?></a></small>
				</div>
			</div>
		</div>
	</div>
	
</article>