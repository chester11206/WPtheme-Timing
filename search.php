<?php get_header(); ?>
<div class="row">
	<h1>搜尋</h1>
	<div class="search-form-container">
        <?php get_search_form( );?>
    </div>
</div>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
		<div class="row">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content', 'search'); ?>
			
			<?php endwhile;?>
			<div class="row">
				<div class="col-xs-6 text-left" style="padding-left: 50px;padding-top: 15px; font-size: 25px;"><?php previous_posts_link('« Newer posts'); ?></div>
				<div class="col-xs-6 text-right" style="padding-right: 50px;padding-top: 15px; font-size: 25px;"><?php next_posts_link('Older posts »'); ?></div>
			</div>
			
		<?php endif;
				
		?>
		</div>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>