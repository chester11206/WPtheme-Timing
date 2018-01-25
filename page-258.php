<?php get_header(); ?>


<?php
	// Create post object
	if(!empty($_POST['author_id']) and !empty($_POST['post_title']) and !empty($_POST['post_content'])){
		$my_post = array(
		  'post_title'    => wp_strip_all_tags( $_POST['post_title'] ),
		  'post_content'  => $_POST['post_content'],
		  'post_status'   => 'publish',
		  'post_author'   => $_POST['author_id'],
		  'post_category' => array( 3 )
		);
		 
		// Insert the post into the database
		$post_id = wp_insert_post( $my_post );
		echo '<script language="javascript">';
		echo 'alert("post successfully created, post_id is '.$post_id.'")';
		echo '</script>';
	}
?>
<style>
	input[type=text], select {
	    width: 100%;
	    padding: 12px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    box-sizing: border-box;
	}
</style>
<div class="row" style="padding: 0px 15px;">
	<form action="http://18.217.117.127/publish/" method="post">
		<h1>新增文章</h1>
		<br>
		<h3>作者</h3>
		<input name="author_id" type="text">
		<h3>標題</h3>
		<input name="post_title" type="text">
		<h3>內容</h3>
		<input name="post_content" type="text">
		<input name="submit" type="submit" value="publish!">
	</form>

</div>


<?php get_footer(); ?>

