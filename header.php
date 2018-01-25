<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Timing</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<?php wp_head(); ?>
	</head>
	
<!--
  _______ _           _             
 |__   __(_)         (_)            
    | |   _ _ __ ___  _ _ __   __ _ 
    | |  | | '_ ` _ \| | '_ \ / _` |
    | |  | | | | | | | | | | | (_| |
    |_|  |_|_| |_| |_|_|_| |_|\__, |
                               __/ |
                              |___/ 
-->

	<?php 
		
		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;
		
	?>
	
	<body <?php body_class( $awesome_classes ); ?>>
		
		<div class="container">
		
			<div class="row">
				
				<div class="col-xs-12">
					
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="<?php echo home_url('/');?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/img/timing_head.png" alt=""></a><a class="navbar-brand" id="text" href="<?php echo home_url('/');?>">Timing</a>					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right'
									)
								);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				
				</div>
				
			</div>
			
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />