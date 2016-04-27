<?php get_header();
/*
Template Name: Home Page
*/
?>


 <script>
  //color swap for car

jQuery(document).ready(function($){
    $('.colors li').click( function(){
         var color = $(this).attr('data-color');
         $('#overlay').css('fill',color);
    });
});
  //image swapper for wheels and interior
  $(function(){
      $('.nav-interior li').click(function(){
        var image = $(this).attr('data-picture');
        $('.interior').empty();
        $('.interior').append('<img src="'+image+'">');
      });
      $('.nav-wheels li').click(function(){
        var image = $(this).attr('data-picture');
        $('.wheels').empty();
        $('.wheels').append('<img src="'+image+'">');
      });
    });
 </script>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  
<div class="builder">

  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 768">
    <g style="isolation:isolate">
    <g id="car" data-name="car"><image width="1024" height="768" xlink:href="<?php bloginfo('stylesheet_directory');?>/images/Miata-Overlay.png"/></g>
    
    <path id="overlay" d="M828,448.5c3.63,18.38,2,34.29,2.13,36.5,9.52,1.18,55.87-2,55.87-2a22.13,22.13,0,0,0,5-8c1.26-5.06-3-45-3-45a58.22,58.22,0,0,0,8-6m-8,6,8-6c1.06-3.05,3.35-7.06-21.13-22.76l-0.39-.25c-28.79-18.45-71.2-42.74-137.48-51-30.45-3.71-77.26-1.26-107-3-6.57-.38-88.68,7.07-88,4,0.6-2.72,1.75-6.5,1.75-6.5S534.24,329.73,516,329c-9.37-.38-13.35,8.3-13,10,0.22,1.05,1.82,11.68,3,12s35,1,35,1l-1,4s3.87,2.46,4.25,4.75C544.79,364,540.39,369,531,369c-7.13,0-11-5.68-10-11.13,0.48-2.58-5.62.88-16.5-5.62-3.39-2-112.33,2.64-131.25-2.75S299.86,336.11,263,339c-2.21-.91-4-4-4-4l-15-2-2,4s-50.63,3.65-55,7c-0.87-3.75-19.72-6-23.87-4.63,1,3.38,1.87,6.63,1.87,6.63l-21,4v11s-1.87,6,0,6c1.63,0,1.34-5,4-6,1.83,1.17,1.5,6.05,3,6,15.94-.58,32.73,7.53,36,10,0.9,0.68-11.27,7.2-13.46,6.61-1.46-.39-15.3.34-26.67,0.39-3-.39.88-15.37-0.88-16-1.23-.44-2.84.75-3,1-4.33,6.72-16.71,21.74-18,22-1.64.33-.33,26.82,1.5,31.75S133,447,133,447s-1.79,5-1,8c2.4,3,18,17.25,33,21,6.41,0,43.37,8.81,43.13,5.75C207.9,479,207,460.74,209,448c0.2-1.27-5-.2-8.12-4.88,1.3-5.33,3.94-15,8.12-21.12,0.93-1.36,11-.72,11.83-2.17,4.87-8,11-13.79,19.83-19.33C254,392.17,265.2,389.67,281,390c16,0.33,53.33,8.33,68,51,4.5,13,5.17,48,5.17,48s73.16-.81,79.83-1,246.46,2.71,249.67,2.09c-0.1-2.31.17-20.42,0.17-20.42S680.33,391,758,388c30.41,1.61,47.56,14.67,58,30.5,1.11,1.68,7.41,0,9,.5,5.19,4.75,9.61,17.43,11.31,25-2.58,3.8-8.48,3.67-8.31,4.5m10.88-60.75s-17.49,2.09-16.43,3.7C823.36,393.07,849.9,409,852,410c0.85,0.42,23.56-8,23.52-8.34,0.5-.92-4.17,1.73-4.25,1.66C863.15,395.61,839.4,387,838.88,387.75Z" style="fill: #fff;mix-blend-mode: multiply"/>

    </g>
  </svg>
    
  <div class="container">
      <!--These classes allow the overlays to render. Do not delete!-->
      <div class="overlay interior"></div>
      <div class="overlay wheels"></div>
  </div>

    <div class="col-xs-12 controls">
      <div class="well well-sm">
        <h3>Exterior Colors</h3>
        <ul class="colors">
          <li class="black" data-color="#404040"></li>
          <li class="yellow" data-color="#ffdb25"></li>
          <li class="green" data-color="#014225"></li>
          <li class="pink" data-color="#e0218a"></li>
          <li class="blue" data-color="#29aae2"></li>
          <li class="reset" data-color="#fff">RESET</li>
        </ul> 
      </div>
    </div>
    
    <div class="col-xs-12 controls">
      <div class="well well-sm">
        <h3>Interior Colors</h3>
        <ul class="nav-interior">
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/black-interior.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/black-leather.jpg">BLACK</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/white-interior.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/white-leather.jpg">WHITE</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/brown-interior.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/brown-leather.jpg">BROWN</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/red-interior.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/red-leather.jpg">RED</li>
        </ul>
      </div>
    </div>
    
    <!-- -->
    <div class="col-xs-12 controls">
      <div class="well well-sm">
        <h3>Wheels/Suspension</h3>
        <ul class="nav-wheels">
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/gold-oz-wheels.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/gold-oz-wheel-thumb.png">GOLD O-Z/STOCK</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/white-oz-wheels.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/white-oz-wheel-thumb.png">O-Z 40TH ANNIVERSARY/STOCK to TRACK</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/black-wheels.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/black-wheel-thumb.png">AMERICAN WHEEL MIDNIGHT/STOCK to TRACK</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/racing-wheels.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/racing-wheel-thumb.png">ENKEI COMPETITION/SPORT to TRACK</li>
        </ul>
      </div>
    </div>

    <div class="col-xs-12 controls">
      <div class="well well-sm">
        <h3>Powertrains</h3>
        <ul class="nav-engines">
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/2L-car.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/2.0L.png">2.0T I4 (275 HP)</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/2.3L-car.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/2.3L.png">2.3T I4 (306 HP)</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/2.7L-car.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/2.7L.png">2.7T V6 (365 HP)</li>
        </ul>
      </div>
    </div>

    <div class="col-xs-12 controls">
      <div class="well well-sm">
        <h3>Packages</h3>
        <ul class="nav-wheels">
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/gold-oz-wheels.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/mazdaspeed-swatch.png">MAZDASPEED TRACK</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/white-oz-wheels.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/murder-swatch.png">MURDERED</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/black-wheels.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/gentleman-swatch.png">THE GENTLEMAN</li>
          <li data-picture="<?php bloginfo('stylesheet_directory');?>/images/racing-wheels.png"><img src="<?php bloginfo('stylesheet_directory');?>/images/barbie-swatch.png">THE BARBIE</li>
        </ul>
      </div>
    </div>

</div>





<?php endwhile; endif; get_footer(); ?>