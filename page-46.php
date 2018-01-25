<!-- the template for the authors' page -->
<!-- created by chesterher -->

<?php get_header(); ?>

<div class="row" style="padding: 0px 15px;">
	<h1>名人作家</h1>
	<div class="search-form-container">
        <?php get_search_form( );?>
    </div>
</div>

<div class="row" style="text-align:center; padding: 0px 15px;">
	<div class="row eightAuthors" style="margin:0 auto; /*border-width:3px;border-style:solid;border-color:#FFAC55;*/padding:5px;margin-top:20px;">
	<?php	global $wpbd;
			$users = $wpdb->get_results( 
			"SELECT $wpdb->users.ID, MAX(post_date)
			FROM $wpdb->posts JOIN $wpdb->users ON post_author=	$wpdb->users.ID	
			WHERE post_type = 'post'
			GROUP BY user_nicename
			ORDER BY MAX(post_date) DESC
			LIMIT 12 ");		
			// var_dump($users);
	?>
		<div class="row" style="margin:0 auto;">
		<?php	
			$count = 0;
			if(!is_null($users)):
				foreach($users as $author){
					$count++;
					if($count >  6):
		?>
		</div>
		<div class="row" style="margin:0 auto;">
		<?php 		endif;
			$author_info=get_userdata( $author->ID ); 
		?>
			
			<div class="col-xs-6 col-sm-2 author-pic">
				<article id="author-<?php echo $author->ID ?>">
				<a href="<?php echo esc_url( get_author_posts_url( $author->ID ) ); ?>" rel="author">
					<?php echo get_wp_user_avatar($author->ID, 120); ?>
				</a>
					
				</article>
			</div>
			
				<?php	}
			endif;	?>
		</div>
		
	</div>
</div>

<div class="row" style="padding: 20px 15px 0px 15px;">
	<div class="row col-xs-12 col-sm-9 threeAuthors">
	<?php	global $wpdb;
			$users = $wpdb->get_results( 
			"SELECT $wpdb->users.ID	, MAX(post_date)
			FROM $wpdb->posts JOIN $wpdb->users ON post_author=	$wpdb->users.ID	
			WHERE post_type = 'post'
			GROUP BY user_nicename
			ORDER BY MAX(post_date) DESC
			LIMIT 3 ");
			//var_dump($users);
		
		if(!is_null($users)):
			foreach($users as $author){
	?>
	<?php	$author_info=get_userdata( $author->ID );?>		
		<div class="col-xs-12 col-sm-12 authorInfoPost" style="padding-left: 0px;">
			<article id="author-<?php echo $author->ID ?>">
			
				<div class="row">
					<div class="author_photo col-md-2" style="padding-right: 0px;display: inline-block;">
						<a href="<?php echo esc_url( get_author_posts_url( $author->ID ) ); ?>" rel="author"><?php echo get_wp_user_avatar($author->ID, 120); ?></a>
					</div>
					<div style="padding-left: 0px; padding-top: 10px;display: inline-block;">
						<a href="<?php echo esc_url( get_author_posts_url( $author->ID ) ); ?>" rel="author">
							<h1 class="author-name-large"><?php echo $author_info->display_name; ?></h1>
						</a>
						
						<div class="author_discription" style="padding-left: 0px;">
							<h4><?php echo $author_info->description ?></h4>
						</div>
					</div>
				</div>	
								
				<div class="author_post">
				<?php	global $wpdb;
						$posts = $wpdb->get_results( 
						"SELECT $wpdb->posts.ID	, post_date
						FROM $wpdb->posts
						WHERE post_type = 'post' AND post_author=$author->ID
						ORDER BY post_date DESC
						LIMIT 3 ");
				
						foreach($posts as $eachpost){
							$args = array(	
							'p' => $eachpost->ID,
							'type' => 'post',
							'posts_per_page' => 3,
							'cat' => 3,
							);
											
							$lastBlog = new WP_Query( $args );
							//var_dump($lastBlog);

							if( $lastBlog->have_posts() ):
								while( $lastBlog->have_posts() ): $lastBlog->the_post(); 
				?>
					<div class="col-xs-12 col-sm-4 authorNewPosts" style="padding-left: 0px;">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php 		if( has_post_thumbnail() ): ?>
							<!-- <div class="thumbnail"> -->
								<a href="<?php echo esc_url( get_permalink() ) ; ?>">
									<?php get_template_part('content','featured'); ?>
								</a>
							<!-- </div> -->
						<?php 		endif; ?>
						</article>
					</div>
		
						<?php	endwhile;
							endif;
							wp_reset_postdata();
						}
						?>
				</div>
			</article>
		</div>
	<?php	}
		endif;	
	?>
	</div>
	
	<div class="col-xs-12 col-sm-3">
		<?php get_sidebar(); ?>
	</div>
	
</div>


<?php get_footer(); ?>