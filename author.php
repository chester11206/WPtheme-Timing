<?php get_header(); ?>

<?php $author_info=get_userdata( get_the_author_meta('ID') ); ?>

<div class="row authorPageInfo" style="padding: 0px 15px 0px 15px;">

	<!-- <div class="author_name">
		<h1><?php echo $author_info->user_login ?></h1>
	</div> -->
	
	<div class="row">
		<div class="author_photo col-md-2" style="padding-right: 0px;display: inline-block;">
		<?php echo get_wp_user_avatar($author->ID, 120); ?>
		</div>
		<div style="padding-left: 0px; padding-top: 10px;display: inline-block;">
			<a href="<?php echo esc_url( get_author_posts_url( $author->ID ) ); ?>" rel="author">
				<h1 class="author-name-large"><?php echo $author_info->user_login ?></h1>
			</a>
			
			<div class="author_discription" style="padding-left: 0px;">
				<h4><?php echo $author_info->description ?></h4>
			</div>
		</div>
	</div>	
	
</div>

<div class="row authorPagePosts" style="padding: 15px 15px 0px 15px;">
	
	<div class="col-xs-12 col-sm-12" style="padding: 0px 0px 0px 0px;">
		
		<div class="row">
		<?php 
			if( have_posts() ): $i = 0;
				while( have_posts() ): the_post(); 
					get_template_part( 'content','search');
		?>
					
		<?php 	/* endif; */
				$i++; 	
				endwhile;?>
				<div class="row">
					<div class="col-xs-6 text-left"><?php previous_posts_link('« Newer posts'); ?></div>
					<div class="col-xs-6 text-right"><?php next_posts_link('Older posts »'); ?></div>
	  		 	</div>
			<?php endif;
		?>
		</div>
	
	</div>
		
</div>

<?php get_footer(); ?>