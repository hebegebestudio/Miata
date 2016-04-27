<?php get_header();
/*
Template Name: Home Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">

	<?php 

	$i = 1;

	if (have_rows('slideshow') ): while ( have_rows('slideshow') ) : the_row(); ?>

		<div class="item <?php if($i == 1){echo 'active'; } ?>">
	     <img src="<?php the_sub_field('image'); ?>" alt=""> 
	    </div>

	    <?php $i++; ?>

	 <?php endwhile; endif; ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>




  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>