<!-- this is the page template for 脈絡歷史 -->

<?php
/*
    Template Name: Page History Post
*/
get_header(); ?>


<?php
    // category:
    //      媒體=8
    //      舞蹈=9
    //      文化=10
	// 		音樂=11
    // 		舞者=12
    //      教室=13
    // 		活動=14
    //      服裝=15
    //      其他=16
    //      街舞=21

    
    $title_for_this_page=get_the_title();
    $category_for_this_page=3;
    switch($title_for_this_page){
        case "媒體":
            $category_for_this_page=8;
            break;
        case "舞蹈":
            $category_for_this_page=9;
            break;
        case "文化":
            $category_for_this_page=10;
            break;
        case "音樂":
            $category_for_this_page=11;
            break;
        case "舞者":
            $category_for_this_page=12;
            break;
        case "教室":
            $category_for_this_page=13;
            break;
        case "活動":
            $category_for_this_page=14;
            break;
        case "服裝":
            $category_for_this_page=15;
            break;
        case "其他":
            $category_for_this_page=16;
            break;
        case "街舞":
            $category_for_this_page=21;
            break;
    }

?>


<!-- this row is for the TITLE and SEARCH -->
<div class="row" style="position:relative;">
    <div style="display:inline-block;">
        <h1><?php echo $GLOBALS['title_for_this_page'] ?></h1>	
    </div>
    <div class="search-form-container" style="width:30%; margin-top:20px; display:inline-block; position: absolute;right:0;">
        <?php get_search_form( );?>
    </div>
</div>

<div class="row">
		
		<div class="col-xs-12">
            <div class="row text-center" style>
                <p><?php 

                if ( have_posts() ) :
                    $page = get_page_by_title($GLOBALS['title_for_this_page']);
                    $content = apply_filters('the_content', $page->post_content); 
                    echo $content;?>
                <?php endif; ?>
                </p>
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
                     <div class="col-xs-6 text-left"><?php previous_posts_link('« Newer posts'); ?></div>
                     <div class="col-xs-6 text-right"><?php next_posts_link('Older posts »'); ?></div>
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