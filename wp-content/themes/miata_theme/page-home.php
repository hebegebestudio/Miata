<?php get_header();
/*
Template Name: Calculate Page
*/
?>

 <script>
  //color swap for car
$(function(){

      $('.color').click( function(){
           var color = $(this).attr('data-color');
           $('#overlay').css('fill',color);
           $(this).attr('checked', true);
      });


      $('.nav-wheels').click(function(){
        var image = $(this).attr('data-picture');
        $('.wheels').empty();
        $('.wheels').append('<img src="'+image+'">');
        $(this).find("input").attr('checked', true);
      });


      $('.nav-interior').click(function(){
        var image = $(this).attr('data-picture');
        $('.interior').empty();
        $('.interior').append('<img src="'+image+'">');
        $(this).find("input").attr('checked', true);
      });


      $('.nav-engines').click(function(){
        $(this).find("input").attr('checked', true);
      });


      // Select package
      $('.packages a').click(function(){
        var wheels = $(this).attr('data-wheels');
        $('#a'+wheels).trigger('click');

        var exterior = $(this).attr('data-exterior');
        $('#a'+exterior).trigger('click');

        var interior = $(this).attr('data-interior');
        $('#a'+interior).trigger('click');

        var engine = $(this).attr('data-engine');
        $('#a'+engine).trigger('click');
      });

});
</script>
  

<form class="form-horizontal" action="<?php bloginfo('stylesheet_directory');?>/page-process.php" method="POST">

<div class="container">

<?php 
if(isset($exterior)){
  echo '<div class="alert alert-success"> exterior is '.$exterior.'</div>';
}
?>

      <div class="interior"></div>
      <div class="wheels"></div>

  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1024 449">
    <g style="isolation:isolate">
    <g id="car" data-name="car"><image width="100%" height="100%" z-index='1' xlink:href="<?php bloginfo('stylesheet_directory');?>/images/Miata-Overlay.png"/>
     </g>
    <path id="overlay" d="M861.15,231l-2.82,2c5.85,2.89,11.88,6.45,14.67,
      9.58-4.61,4.3-19.05,5.93-20,6s-29.08-17.38-30-19c-1.07-1.61,16-4,16-4,0.31-.46,9.7,2.76,18.79,7.16l3-1.89A301.57,
      301.57,0,0,0,738,188.5c-30.45-3.71-77.26-1.26-107-3-6.57-.38-88.68,7.07-88,4,0.6-2.72,1-7,1-7a34.73,34.73,0,0,
      0-27-15c-9.37-.38-13.35,8.3-13,10,0.21,1.05,1.82,11.68,3,12s35,1,35,1l-1,4s4.62,2.71,5,5c0.54,3.25-4.61,8-14,
      8-7.13,0-12-5.56-11-11,0.48-2.58-7.24.56-15-5-3.62-2.59-113.08,2.39-132-3s-73.14-13.89-110-11c-2.73.21-4-4-4-4l-15-2-2,
      4s-50.63,3.65-55,7c-1.65-2.2-18.84-6.38-23-5a15.25,15.25,0,0,0,1,7l-21,4v11s-1.39,3.93,0,6c0.11,0.16,1.34-5,4-6,1.83,
      1.17,1.5,6.05,3,6,15.94-.58,34.69,7.21,36,10,0.48,1-9.81,7.59-12,7-1.46-.39-16.63.95-28,1-3-.39-0.69-17.06-1-17a8.78,
      8.78,0,0,0-3,1c-4.33,6.72-16.71,21.74-18,22-1.64.33,0.17,26.07,2,31s6,25,6,25-1.79,5-1,8c2.4,3,21.14,16.89,33,21,6.41,
      0,43.24,8.06,43,5-0.22-2.79-2-20.26,0-33,0.2-1.27-4.83-.32-8-5,1.3-5.33,4.82-14.9,9-21,0.93-1.36,9.12-1.55,10-3a51.51,
      51.51,0,0,1,20-19c17.74-9.72,26.2-9.66,42-10s54.38,8.65,68,51c3.87,9.2,5,47,5,47s73.32,0.19,80,0,245.79,2.62,249,
      2c-0.1-2.31,0-20,0-20s-2.85-80.25,75-82c30.41,1.61,48.27,14.48,58.71,30.31,1.11,1.68,6.7.2,8.29,0.69,5.7,4.25,10.3,17.43,
      12,25-2.58,3.8-8.17,3.16-8,4,2,18.43,1.88,33.79,2,36,9.52,1.18,55-1,55-1a22.13,22.13,0,0,0,5-8c1.26-5.06-3-45-3-45a58.22,
      58.22,0,0,0,8-6c1.06-3.05-1-6-1-6S883.37,244.64,861.15,231Z" 
      transform="translate(-1 -2)" style="fill: #fff;mix-blend-mode: multiply"/>

    </g>
  </svg>





   <div class="row">
    <div class="col-xs-12 col-sm-6 black-box">
          <div class="row">
            <div class="col-xs-12 col-sm-4 text-center">
              <h3>Exterior Colors</h3>
            </div>
            <div class="col-xs-12 col-sm-8">
                <?php 
                $args = array('post_type' => 'exterior');
                $exteriors = New wp_query($args);
                if ($exteriors->have_posts()) : while ($exteriors->have_posts()) : $exteriors->the_post(); ?>
        
                <input class="color" style="background-color:<?php echo the_field('color');?>" data-color="<?php echo the_field('color');?>" type="radio" id="a<?php the_id();?>" name="exterior" value="<?php the_id();?>"> <span class="sr-only"><?php the_title();?></span>


                <?php endwhile; endif; ?>
            </div>
          </div>
      </div>




    <div class="col-xs-12 col-sm-6 black-box">
      <div class="row">
        <div class="col-xs-12 col-sm-4 text-center">
          <h3>Wheels</h3>
        </div>  
        <div class="col-xs-12 col-sm-8"> 
              <?php 
            $args = array('post_type' => 'wheels');
            $wheels = New wp_query($args);
            if ($wheels->have_posts()) : while ($wheels->have_posts()) : $wheels->the_post(); ?>
              <input type="radio" name="wheels" id="a<?php the_id();?>" value="<?php the_id();?>" style="background-image: url(<?php echo the_field('thumbnail');?>)" class="nav-wheels" data-picture="<?php echo the_field('image');?>">
              <?php endwhile; endif; ?>
        </div>
      </div>
    </div>


  <div class="col-xs-12 col-sm-6 black-box">
      <div class="row">
        <div class="col-xs-12 col-sm-4 text-center">
          <h3>Powertrains</h3>
        </div>  
        <div class="col-xs-12 col-sm-8">        
          <?php 
            $args = array('post_type' => 'engine');
            $engine = New wp_query($args);
            if ($engine->have_posts()) : while ($engine->have_posts()) : $engine->the_post(); ?>
              <input class="nav-engines" value="<?php the_id();?>" style="background-image: url(<?php echo the_field('thumbnail');?>)" type="radio" name="engine" id="a<?php the_id();?>" >
           <?php endwhile; endif; ?>
      </div>
    </div>
  </div>



    <div class="col-xs-12 col-sm-6 black-box">
      <div class="row">
        <div class="col-xs-12 col-sm-4 text-center ">
          <h3>Interior Colors</h3>
        </div>  
        <div class="col-xs-12 col-sm-8">
            <?php 
            $args = array('post_type' => 'interior');
            $interiors = New wp_query($args);
            if ($interiors->have_posts()) : while ($interiors->have_posts()) : $interiors->the_post(); ?>
            <div >
              <input class="nav-interior" value="<?php the_id();?>" type="radio" name="interior" id="a<?php the_id();?>" style="background-image: url(<?php echo the_field('thumbnail');?>)" data-picture="<?php echo the_field('image');?>"> 
            </div>
            <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
    



    <div class="black-box-social">
      <div class="row">
        <div class="col-xs-12 col-sm-3 text-center">
          <h3>Packages</h3>
        </div>  
        <div class="col-xs-12 col-sm-8 packages">
          <?php 
          $args = array('post_type' => 'package');
          $packages = New wp_query($args);
          if ($packages->have_posts()) : while ($packages->have_posts()) : $packages->the_post(); ?>
          <a class="btn btn-primary"
            data-wheels="<?php the_field('wheels');?>"
            data-exterior="<?php the_field('exterior');?>"
            data-interior="<?php the_field('interior');?>"
            data-engine="<?php the_field('engine');?>"
            >
            <?php the_title();?>
          </a>
          <?php endwhile; endif; ?>
      </div>
    </div>
</div>


<div class="row span-12">

  <div class="col-sm-6">
<!-- Put Submit & Reset button in row and column here -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-contact">SUBMIT</button>
  </div>

  <div class="col-sm-6">
<!-- Reload page button, to uncheck any attributes selected for car -->
    <button type="button" class="btn btn-primary btn-lg" onclick="javascript:window.location.reload()">RESET CAR</button>
  </div>

</div>

<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Make my Miata Moda!</h4>
      </div>
      <div class="modal-body">

        <div class="form-group">
            <label for="Name">Name</label>
            <input class="input-xlarge" value="" placeholder="What do we call you?" type="text" name="name">
         </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="input-xlarge" value="" placeholder="Where do call you?" type="text" name="email"></li>
        </div>
        <div class="form-group">    
            <label for="message">Message</label>
            <textarea class="input-xlarge" name="message" id="message" rows="3"></textarea>
         </div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>

      </div>
    </div>
  </div>
</div>





  <div class="col-xs-12 col-md-12 black-box-social">
    <div class="row">

      <div class="col-xs-12 text-center">
        <ul class="list-inline">
          <li><a href="https://www.facebook.com/Moda-Miata-1730043273905923/" target="blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/fb.png"></a></li>
          <li><a href="https://www.instagram.com/hebegebestudio/" target="blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/ig.png"></a></li>
          <li><a href="https://www.youtube.com/watch?v=syIaA_YcaGg" target="blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/u2.png"></a></li>
          <li><a href="http://www.twitter.com" target="blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/twit.png"></a></li>
        </ul>
        </ul>
        <p> Copyright © 2016 Moda Miata. All rights reserved. Site designed by HebegebeStudio.<br>
            Obey all traffic laws and regulations when using your Moda Miata in public places.<br>
            Where a helmet and full protective clothing when operating your Moda Miata at the track.
        </p>   
      </div>
    </div> 
    </div>   

  </div>
</div>
</form>

</div>





<?php get_footer(); ?>

