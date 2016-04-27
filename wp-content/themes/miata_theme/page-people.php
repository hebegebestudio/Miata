<?php get_header();
/*
Template Name: People Page
*/
?>

<?php 

$args = array(
	'post_type' => 'people'
);

$people = New wp_query($args);

if ($people->have_posts()) : while ($people->have_posts()) : $people->the_post(); ?>

      	<a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>">
			
      	<img src="<?php the_field('image'); ?>" alt="">

      	<?php the_title(); ?>

      	</a>
     	

  <?php endwhile; endif; ?>


<?php get_footer(); ?>