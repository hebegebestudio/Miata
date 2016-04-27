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


      <div class="interior"></div>
      <div class="wheels"></div>

  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 768">
    <g style="isolation:isolate">
    <g id="car" data-name="car"><image width="100%" height="100%" xlink:href="<?php bloginfo('stylesheet_directory');?>/images/Miata-Overlay.png"/></g>
    
    <!--path id="overlay" d="M828,448.5c3.63,18.38,2,34.29,2.13,36.5,9.52,1.18,55.87-2,55.87-2a22.13,22.13,0,0,0,
    5-8c1.26-5.06-3-45-3-45a58.22,58.22,0,0,0,8-6m-8,6,8-6c1.06-3.05,3.35-7.06-21.13-22.76l-0.39-.25c-28.79-18.45-71.2-42.
    74-137.48-51-30.45-3.71-77.26-1.26-107-3-6.57-.38-88.68,7.07-88,4,0.6-2.72,1.75-6.5,1.75-6.5S534.24,329.73,516,329c-9.37-
    .38-13.35,8.3-13,10,0.22,1.05,1.82,11.68,3,12s35,1,35,1l-1,4s3.87,2.46,4.25,4.75C544.79,364,540.39,369,531,369c-7.13,0-11-
    5.68-10-11.13,0.48-2.58-5.62.88-16.5-5.62-3.39-2-112.33,2.64-131.25-2.75S299.86,336.11,263,339c-2.21-.91-4-4-4-4l-15-2-2,
    4s-50.63,3.65-55,7c-0.87-3.75-19.72-6-23.87-4.63,1,3.38,1.87,6.63,1.87,6.63l-21,4v11s-1.87,6,0,6c1.63,0,1.34-5,4-6,1.83,
    1.17,1.5,6.05,3,6,15.94-.58,32.73,7.53,36,10,0.9,0.68-11.27,7.2-13.46,6.61-1.46-.39-15.3.34-26.67,0.39-3-.39.88-15.37-0.
    88-16-1.23-.44-2.84.75-3,1-4.33,6.72-16.71,21.74-18,22-1.64.33-.33,26.82,1.5,31.75S133,447,133,447s-1.79,5-1,8c2.4,3,18,
    17.25,33,21,6.41,0,43.37,8.81,43.13,5.75C207.9,479,207,460.74,209,448c0.2-1.27-5-.2-8.12-4.88,1.3-5.33,3.94-15,8.12-21.12,
    0.93-1.36,11-.72,11.83-2.17,4.87-8,11-13.79,19.83-19.33C254,392.17,265.2,389.67,281,390c16,0.33,53.33,8.33,68,51,4.5,13,5.17,
    48,5.17,48s73.16-.81,79.83-1,246.46,2.71,249.67,2.09c-0.1-2.31.17-20.42,0.17-20.42S680.33,391,758,388c30.41,1.61,47.56,14.67,
    58,30.5,1.11,1.68,7.41,0,9,.5,5.19,4.75,9.61,17.43,11.31,25-2.58,3.8-8.48,3.67-8.31,4.5m10.88-60.75s-17.49,2.09-16.43,3.7C823.36,
    393.07,849.9,409,852,410c0.85,0.42,23.56-8,23.52-8.34,0.5-.92-4.17,1.73-4.25,1.66C863.15,395.61,839.4,387,838.88,387.75Z" 
    style="fill: #fff;mix-blend-mode: multiply"/-->

    <!--path id="overlay" viewBox="0 0 771.94 161.1"-->
      <path id="overlay" d="M895,255.5S882.37,243.64,860.15,230l-2.82,2c5.85,2.89,11.88,6.45,14.67,9.58-4.61,4.3-19.05,5.93-20,6s-29.08-17.38-30-19c-1.07-1.61,16-4,
      16-4,0.31-.46,9.7,2.76,18.79,7.16l3-1.89A301.57,301.57,0,0,0,737,187.5c-30.45-3.71-77.26-1.26-107-3-6.57-.38-88.68,7.07-88,4,0.6-2.72,1-7,1-7a34.73,
      34.73,0,0,0-27-15c-9.37-.38-13.35,8.3-13,10,0.21,1.05,1.82,11.68,3,12s35,1,35,1l-1,4s4.62,2.71,5,5c0.54,3.25-4.61,8-14,8-7.13,0-12-5.56-11-11,
      0.48-2.58-7.24.56-15-5-3.62-2.59-113.08,2.39-132-3s-73.14-13.89-110-11c-2.73.21-4-4-4-4l-15-2-2,4s-50.63,3.65-55,7c-1.65-2.2-18.84-6.38-23-5a15.25,
      15.25,0,0,0,1,7l-21,4v11s-1.39,3.93,0,6c0.11,0.16,1.34-5,4-6,1.83,1.17,1.5,6.05,3,6,15.94-.58,34.69,7.21,36,10,0.48,1-9.81,7.59-12,
      7-1.46-.39-16.63.95-28,1-3-.39-0.69-17.06-1-17a8.78,8.78,0,0,0-3,1c-4.33,6.72-16.71,21.74-18,22-1.64.33,0.17,26.07,2,31s6,25,6,25-1.79,5-1,8c2.4,
      3,21.14,16.89,33,21,6.41,0,43.24,8.06,43,5-0.22-2.79-2-20.26,0-33,0.2-1.27-4.83-.32-8-5,1.3-5.33,4.82-14.9,9-21,0.93-1.36,9.12-1.55,10-3a51.51,51.51,
      0,0,1,20-19c17.74-9.72,26.2-9.66,42-10s54.38,8.65,68,51c3.87,9.2,5,47,5,47s73.32,0.19,80,0,245.79,2.62,249,2c-0.1-2.31,0-20,0-20s-2.85-80.25,75-82c30.41,
      1.61,48.27,14.48,58.71,30.31,1.11,1.68,6.7.2,8.29,0.69,5.7,4.25,10.3,17.43,12,25-2.58,3.8-8.17,3.16-8,4,2,18.43,1.88,33.79,2,36,9.52,1.18,55-1,55-1a22.13,
      22.13,0,0,0,5-8c1.26-5.06-3-45-3-45a58.22,58.22,0,0,0,8-6C897.06,258.45,895,255.5,895,255.5Z" transform="translate(-124.36 -166.49)" style="fill: #fff;mix-blend-mode: multiply"/></svg>

    </g>
  </svg>


    
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