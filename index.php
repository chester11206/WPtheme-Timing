<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
		<div class="row text-center">

		<?php 
			// function filter_where($where = '') {
			// 	$where .= " AND post_date > '" . date('Y-m-d', strtotime('-30 days')) . "'";
			// 	return $where;
			// }
			// add_filter('posts_where', 'filter_where');
		// $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
		// $args = array('posts_per_page' => 4, 'paged' => $currentPage);
		// query_posts($args);
		
		if( have_posts() ): $i = 0;
			
			while( have_posts() ): the_post(); ?>
				
		<?php	/* if(get_post_type($post)):
					get_template_part('content','authorinfo');
				else: */?>
				
					<div class="col-xs-12 listed">
						<?php if( has_post_thumbnail() ):
							$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
						endif; ?>
						<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">
							
							<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
							
							<small><?php the_category(' '); ?></small>
						</div>
						
					</div>
		<?php 	/* endif; */
				$i++; 	
			endwhile;?>
			<div class="row">
				<div class="col-xs-6 text-left"><?php previous_posts_link('« Newer posts'); ?></div>
				<div class="col-xs-6 text-right"><?php next_posts_link('Older posts »'); ?></div>
	  		 </div>
			
		<?php endif;
		wp_reset_postdata();	
		?>
		</div>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar('2'); ?>
	</div>
	
</div>

<?php get_footer(); ?>