<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div>
		<?php 
        if(is_category("文章")){
            $categoryID=3;
            echo "<h1>所有文章</h1>";
        }
        else{
            $firstID = get_the_ID();
            $thisCategory= get_the_category();
            $categoryID=$thisCategory[0]->term_id;
            echo "<h1>".$thisCategory[0]->name."</h1>";
		}
		?>
		</div>
	</div>

</div>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
		<div class="row">

        <?php 
        if(is_category("文章")){
            $categoryID=3;
        }
        else{
            $firstID = get_the_ID();
            $thisCategory= get_the_category();
            $categoryID=$thisCategory[0]->term_id;
        }
		$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array('posts_per_page' => 4, 'paged' => $currentPage, 'cat'=>$categoryID,);
		query_posts($args);
		
		if( have_posts() ): $i = 0;
			
			while( have_posts() ): the_post(); ?>
				<?php get_template_part('content','list'); ?>
			<?php endwhile;?>
			<div class="row">
				<div class="col-xs-6 text-left" style="padding-left: 50px;padding-top: 15px; font-size: 25px;"><?php previous_posts_link('« Newer posts'); ?></div>
				<div class="col-xs-6 text-right"  style="padding-right: 50px;padding-top: 15px; font-size: 25px;"><?php next_posts_link('Older posts »'); ?></div>
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