<?php get_header(); ?>


<?php
	// Get post object
	if(!empty($_POST['post_id'])) {
		 wp_delete_post($_POST['post_id']);
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
	<form action="http://18.217.117.127/delete/" method="post">
		<h1>刪除文章</h1>
		<br>
		<h3>文章id</h3>
		<input name="post_id" type="text">
		<input name="submit" type="submit" value="Delete!">
	</form>
</div>


<?php get_footer(); ?>

