<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600,800,600italic,400italic,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>

<!--  -->

<body
	<?php 
		if (is_home() ){
			echo ('style="background-image:url('.get_field('background').')"');
		}	
?>
>

	<div id="banner">
  		<div class="logo"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/images/moda_miata_logo.png"></div>
  		<div id="tag-line">MIATAS > MONSTERS</div>
  	</div>
  	
  <div class="content">

  	
