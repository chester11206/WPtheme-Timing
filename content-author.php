<div class="col-xs-12 authorPost" style="padding: 0px 15px 20px 15px;">
		<?php 
			if( has_post_thumbnail() ):
				$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
			endif;
		?>
		<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">
			<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
			<small><?php the_category(' '); ?></small>
		</div>
						
						
</div>