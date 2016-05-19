<?php

  require('../../../wp-blog-header.php');

if(isset($_POST['submit'])){

  $exterior = $_POST['exterior'];
  $wheels = $_POST['wheels'];
  $interior = $_POST['interior'];
  $engine = $_POST['engine'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

// the message
<h2>
$content = $message.'  '.$exterior.'  '.$interior.' '.$engine.' '.$wheels.'';
</h2>

// send email
mail("robert@hebegebes.com", "Make My Moda Miata:", $content);


get_header();
?>

 <div class="black-box"> 
  <h3>
  Name: <?php echo $name; ?> <br>
  Email: <?php echo $email; ?><br>
  Message: <?php echo $message; ?><br>
  </h3>

  <?php
  $args = array('post_type' => 'exterior', 'p' => $exterior);
  $exteriors = New wp_query($args);
  if ($exteriors->have_posts()) : while ($exteriors->have_posts()) : $exteriors->the_post(); ?>
    <?php the_title();?> <br>
  <?php endwhile; endif; 


  $args = array('post_type' => 'wheels', 'p' => $wheels);
  $wheels = New wp_query($args);
  if ($wheels->have_posts()) : while ($wheels->have_posts()) : $wheels->the_post(); ?>
    <?php the_title();?><br>
  <?php endwhile; endif; 


  $args = array('post_type' => 'engine', 'p' => $engine);
  $engine = New wp_query($args);
  if ($engine->have_posts()) : while ($engine->have_posts()) : $engine->the_post(); ?>
    <?php the_title();?><br>
  <?php endwhile; endif; 


  $args = array('post_type' => 'interior', 'p' => $interior);
  $interiors = New wp_query($args);
  if ($interiors->have_posts()) : while ($interiors->have_posts()) : $interiors->the_post(); ?>
    <?php the_title();?><br>
  <?php endwhile; endif; 
  ?>
</div>

<div class="row">
  <div class="col-xs-12">
    <a href="<?php bloginfo('url');?>/miatas/>" class="btn btn-primary" role="button">Return to Main Page</a>
  </div>
</div>

<?php

get_footer(); 
  
} else {
  header("Location: http://localhost/miatas"); /* Redirect browser */
  exit();
}

