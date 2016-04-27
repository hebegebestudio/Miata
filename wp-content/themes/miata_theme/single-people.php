<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
    
	<img src="<?php the_field('image'); ?>" alt="">

    <h3>Color: <?php the_field('fav_color'); ?></h3>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>