<!-- this is the page template for 透視街舞 專題報導 活動資訊 -->

<?php
/*
    Template Name: Page Blog Post
*/
get_header(); ?>


<?php
	// category:
	// 		報導=2
	// 		文章=3
    // 		活動=4
    
    $title_for_this_page=get_the_title();
	$category_for_this_page=4;
    if($title_for_this_page=='專題報導'){$category_for_this_page=2;}
    elseif($title_for_this_page=='透視街舞'){$category_for_this_page=3;}
?>

<!-- this row is for the TITLE and SEARCH -->
<div class="row" style="position:relative;">
    <div style="display:inline-block;padding-left: 20px;">
        <h1><?php echo $GLOBALS['title_for_this_page'] ?></h1>	
    </div>
    <div class="search-form-container" style="width:30%; margin-top:20px; display:inline-block; position: absolute;right:0;">
        <?php get_search_form( );?>
    </div>
</div>


<!-- this row is for the slide -->
<div class="row">
		
		<div class="col-xs-12">
		
		<div id="news-carousel" class="carousel slide" data-ride="carousel">
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			  
			<?php 
				//==========================================================================================


				//posts in the last 30 days

				// function filter_where($where = '') {
				// 	$where .= " AND post_date > '" . date('Y-m-d', strtotime('-30 days')) . "'";
				// 	return $where;
				// }
				// add_filter('posts_where', 'filter_where');
				date_default_timezone_set("Asia/Shanghai");
				$month = date("m");
				$monthNum=intval($month);
				
				$args=array(
					'post_type'=>'post',
					'monthnum'=>$monthNum,
					'posts_per_page'=>3,
					'cat'=>$GLOBALS['category_for_this_page'],
					'meta_key'=>'post_view_count',
					'orderby'=>'meta_value_num',
					'order'=>'DESC',
				);
				$slider_query = new WP_Query( $args ); 
					
					if($slider_query->have_posts() ):
						
						while($slider_query->have_posts() ):$slider_query->the_post(); ?>
							
							<div class="item <?php if($count == 0): echo 'active'; endif; ?>">
						      <?php the_post_thumbnail('full'); ?>
						      <div class="carousel-caption">
							      <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
	
								  <!-- <small><?php the_category(' '); ?></small> -->
						      </div>
						    </div>
						    
						    <?php $bullets .= '<li data-target="#news-carousel" data-slide-to="'.$count.'" class="'; ?>
						    <?php if($count == 0): $bullets .='active'; endif; ?>
						    
						    <?php  $bullets .= '"></li>'; ?>
						
						<?php $count++;endwhile;
						
					endif;
					
					wp_reset_postdata();

			?>
			
			<!-- Indicators -->
			  <ol class="carousel-indicators">
			    <?php echo $bullets; ?>
			  </ol>
		    
		  </div>
		
		  <!-- Controls -->
		  <a class="left carousel-control" href="#news-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#news-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		
		</div>
		
</div>


<div class="row">

	
	<div class="col-xs-12 col-sm-8">
		
		<div class="row">
		
		<?php 
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
		$args = array( 
			'type' => 'post',
			'paged'=>$paged,
			'posts_per_page' => 4,
			'cat' =>$GLOBALS['category_for_this_page'],
		);
				
		query_posts($args);
		if( have_posts() ):

			
			while( have_posts() ): the_post(); ?>
				<?php get_template_part('content','list'); ?>
			
			<?php endwhile;?>

			<div class="row">
				<div class="col-xs-6 text-left" style="padding-left: 50px;padding-top: 15px; font-size: 25px;"><?php previous_posts_link('« Newer posts'); ?></div>
				<div class="col-xs-6 text-right" style="padding-right: 50px;padding-top: 15px; font-size: 25px;"><?php next_posts_link('Older posts »'); ?></div>
			</div>
		<?php endif;
		wp_reset_postdata();		
		?>
		</div>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>