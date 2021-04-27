<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php wp_head();?>



</head>
<body <?php body_class('');?>>






<header>
	<div class="container">

		<div class="row ">
			
			<div class="col d-flex alight-items-center justify-content-between">


				<a href="<?php bloginfo('url');?>">
			 		<img src="<?php bloginfo ('template_directory');?>/images/logo.png" class="img-thumbnail logo">Drawaholic
			 	</a>



				<?php
				wp_nav_menu(
						array(

							'theme_location' => 'top-menu',
							'menu_class' => 'top-menu'
						)
				);?>
			</div>	
		</div>
	</div>
</header>