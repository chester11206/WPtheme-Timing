<?php get_header(); ?>
<style>
	p{  line-height: 2;
   letter-spacing: 1.2px; }
</style>
<div class="row">
	
	<div class="col-xs-12 col-sm-12">

		<div class="row">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php save_post_views(get_the_ID()); //紀錄點閱率 ?>
					<div style="padding-left:15px;">
					<h3><?php 	$metaKey='post_view_count';
								$views=get_post_meta(get_the_ID(), $metaKey, true);
								echo "瀏覽次數: ".$views; ?>
					</h3></div>
					<div class="col-xs-12">
						<?php if( has_post_thumbnail() ):
							$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
						endif; ?>
						<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">
							
							<?php the_title( sprintf('<h1 class="entry-title" style="padding-left:20px;"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
							
                            <!-- <small><?php the_category(' '); ?>||<?php the_tags(); ?></small> -->
                            
						</div>
					</div>
		<?php
				
			endwhile;
			
		endif;
				
		?>
		</div>
	
	</div>
	
	
</div>
<!-- 文章內容 -->
<div class="row">
<?php if(have_posts()): the_post(); 
	if(get_post_format()=="aside"):?>

		<div class="col-xs-12 col-sm-8">
			<p class="single-post-paragraph"><?php the_content();?></p>
			<div>
				<div class="author_photo col-md-2" style="padding-right: 0px;display: inline-block;">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_wp_user_avatar($author->ID, 120); ?></a>
				</div>
				<div style="padding-left: 40px; padding-top: 10px;display: inline-block;">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
						<h1 class="author-name-large"><?php echo get_the_author_meta( 'user_login' ) ?></h1>
					</a>
					
					<div class="author_discription" style="padding-left: 0px;">
						<h4><?php echo get_the_author_meta( 'description' ) ?></h4>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4" style="padding-top:10px;">
			<?php get_sidebar('2'); ?>
		</div>

	<?php else:?>
		<div class="col-xs-12 col-sm-12">
			<p class="single-post-paragraph"><?php the_content();?></p>
			<div>
				<div class="author_photo col-md-2" style="padding-right: 0px;display: inline-block;">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_wp_user_avatar($author->ID, 120); ?></a>
				</div>
				<div style="padding-left: 40px; padding-top: 10px;display: inline-block;">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
						<h1 class="author-name-large"><?php echo get_the_author_meta( 'user_login' ) ?></h1>
					</a>
					
					<div class="author_discription" style="padding-left: 0px;">
						<h4><?php echo get_the_author_meta( 'description' ) ?></h4>
					</div>
				</div>
			</div>
		</div>
	<?php endif;?>
<?php endif;?>
</div>

<?php get_footer(); ?>