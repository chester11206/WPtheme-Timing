<!-- the template for the front page of Timnig -->
<!-- created by ndshen -->

<?php get_header(); ?>


<!-- this row is for the slide -->
<div class="row image-slider">
		
		<div class="col-xs-12">

		
		<div id="main-carousel" class="carousel slide" data-ride="carousel">
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			  
			<?php 
				// the first 4 slides are for the newest news
				// $args_cat = array(
				// 	'include' => '1, 9, 8'
				// );
				
				// $categories = get_categories($args_cat);
				$count = 0;
				$bullets = '';
					
					$args = array( 
						'type' => 'post',
						'posts_per_page' => 4,
						'cat' => 2,
					);
					
					$lastBlog = new WP_Query( $args ); 
					
					if( $lastBlog->have_posts() ):
						
						while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
							
							<div class="item <?php if($count == 0): echo 'active'; endif; ?>">
						      <?php the_post_thumbnail('full'); ?>
						      <div class="carousel-caption">
							      <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
	
								  <!-- <small><?php the_category(' '); ?></small> -->
						      </div>
						    </div>
						    
						    <?php $bullets .= '<li data-target="#main-carousel" data-slide-to="'.$count.'" class="'; ?>
						    <?php if($count == 0): $bullets .='active'; endif; ?>
						    
						    <?php  $bullets .= '"></li>'; ?>
						
						<?php $count++;endwhile;
						
					endif;
					
					wp_reset_postdata();

			?>
			
			<?php 
			
				// the last slide is for the newest event


				$bullet = '';
					
					$args = array( 
						'type' => 'post',
						'posts_per_page' => 1,
						'cat' => 4,
					);
					
					$lastBlog = new WP_Query( $args ); 
					
					if( $lastBlog->have_posts() ):
						
						while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
							
							<div class="item">
						      <?php the_post_thumbnail('full'); ?>
						      <div class="carousel-caption">
							      <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
	
								  <!-- <small><?php the_category(' '); ?></small> -->
						      </div>
						    </div>
						    
						    <?php $bullets .= '<li data-target="#main-carousel" data-slide-to="4" class=""></li>'; ?>
						
						<?php endwhile;
						
					endif;
					
					wp_reset_postdata();

			?>







			<!-- Indicators -->
			  <ol class="carousel-indicators">
			    <?php echo $bullets; ?>
			  </ol>
		    
		  </div>
		
		  <!-- Controls -->
		  <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		
		</div>
		
</div>

<!-- this row is for the timeline -->
<div class="row"> 
	
	<div class="col-xs-12">

		<a href="http://18.217.117.127/%E8%A1%97%E8%88%9E%E7%99%BE%E7%A7%91/"><img src="<?php bloginfo('template_directory'); ?>/img/history.png" alt="" style="width:100%;height:100%;border-radius: 1em;"></a>
		
	</div>
	
	
</div>


<!-- this row is for the most popular article -->
<div class="row hot-post">
	<a href="http://18.217.117.127/%E9%80%8F%E8%A6%96%E8%A1%97%E8%88%9E/" style="text-decoration: none;"><h1 class="sec-title">熱門文章</h1></a>
	<div class="text-center">
		<?php
				date_default_timezone_set("Asia/Shanghai");
				$month = date("m");
				$monthNum=intval($month);
				
				$args=array(
					'post_type'=>'post',
					'monthnum'=>$monthNum,
					'posts_per_page'=>3,
					'cat'=>3,
					'meta_key'=>'post_view_count',
					'orderby'=>'meta_value_num',
					'order'=>'DESC',
				);
				$lastBlog = new WP_Query( $args ); 

		if( $lastBlog->have_posts() ):
			
			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				
				<div class="col-xs-12 col-sm-4">
				
					<?php get_template_part('content','featured'); ?>
				
				</div>
			
			<?php endwhile;
			
		endif;

		wp_reset_postdata();?>
	</div>
</div>

<div class="row">
	<a href="http://18.217.117.127/authors/" style="text-decoration: none;"><h1 class="sec-title">作家專欄</h1></a>

	<?php

		global $wpbd;

		$users = $wpdb->get_results( 
		"SELECT $wpdb->users.ID	, MAX(post_date)
		FROM $wpdb->posts JOIN $wpdb->users ON post_author=	$wpdb->users.ID	
		WHERE post_type = 'post'
		GROUP BY user_nicename
		ORDER BY MAX(post_date) DESC
		LIMIT 6 ");

		
		// var_dump($users);
		
		if(!is_null($users)){
			foreach($users as $author){
				$author_info=get_userdata( $author->ID ); ?>
				<a href="<?php echo esc_url( get_author_posts_url( $author->ID ) ); ?>" rel="author">
					<div class="col-xs-12 col-sm-2 text-center">

				
						<article id="author-<?php echo $author->ID ?>">
							<?php echo get_wp_user_avatar($author->ID, 120); ?>
							<p class="author-name" style="color: black;"><?php echo $author_info->user_login ?></p>
							<p class="author-bio" style="color: black;"><?php echo $author_info->description ?></p>
							<small><?php //echo $author->ID ?></small>
					
						</article>
				
					</div>
				</a>


			<?php }
		}

	?>
</div>

	<div class="myblock">
		<div class="row">
			<div class="col-lg-6 col-xs-6">
				<a href="http://18.217.117.127/透視街舞/" class="shadow-div">
					<div class="report-block" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/see.jpg');background-size: cover;">
						<div class="large-text">
							<p class="shadow-text">透視<br>街舞</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-xs-3">
				<a href="http://18.217.117.127/%E6%88%91%E8%A6%81%E6%8A%95%E7%A8%BF/" class="shadow-div">
					<div class="draft-block" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/draft.jpg');background-size: cover;">
						<div class="large-text">
							<p class="shadow-text">我要<br>投稿</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-xs-3">
				<a href="http://18.217.117.127/活動資訊/" class="shadow-div">
					<div class="event-block" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/event.png');background-size: cover;">
						<div class="large-text">
							<p class = "shadow-text">主打<br>活動</p>
						</div>
					</div>
				</a>
			</div>
		</div>	
	</div>
<?php get_footer(); ?>