<?php

$first_image = get_field('first_image');
$images = get_field('images');	

$first_video = get_field('first_video');
$videos = get_field('videos');

?>

<section id="visual">

	<div class="visual-between visual-fade">

		<div id="visual-icons">

			<div id="visual-cam" class="gif-icon fizzler">
				<img src="<?php bloginfo ('template_url'); ?>/assets/img/PhotoIcon.png" alt="photos" class="cam-gif fore">
				<img src="<?php bloginfo ('template_url'); ?>/assets/img/Jaff3a.gif" alt="photos" class="cam-gif-back">
			</div>
			
			<div id="visual-vid" class="gif-icon fizzler">
				<img src="<?php bloginfo ('template_url'); ?>/assets/img/YoutubeIcon.png" alt="videos" class="vid-gif fore">
				<img src="<?php bloginfo ('template_url'); ?>/assets/img/Jaff3a.gif" alt="videos" class="vid-gif-back">		
			</div>

		</div><!-- #visual-icons -->

	</div><!-- .visual-between -->

	<!-- PHOTOS
		    ================================================== -->
	<div class="visual-box dev-fader hide" id="visual-cam-box">
							
							<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-interval="4500" data-pause="false">
	      
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo $first_image['url']; ?>" alt="First Slide">
        </div>

				<?php 
      		if($images){
      			foreach($images as $bg){
      				$foo = $bg['image']['url'];		      				
      				echo '<div class="item"><img src="' . $foo . '"></div>';		      				
      			}
      		}
      	?>

	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
    	</div><!-- .carousel-inner -->
    </div><!-- /.carousel -->

	</div><!-- #visual-cam-box -->
																
	<!-- CLOSER X -->
	<div class="hide closer" id="visual-cam-closer"><i class="fa fa-times"></i></div>
<!-- /PHOTOS -->

<!-- YOUTUBE
		    ================================================== -->
	<div class="visual-box dev-fader hide" id="visual-vid-box">
									
		<!-- Carousel
    ================================================== -->
    <div id="myCarousel2" class="carousel slide" data-interval="false" data-pause="false">
   		      
      <div class="carousel-inner" role="listbox">
        <div class="item active youtube">
          
          <?php if(!empty(the_field('first_video'))): ?>
					  <div class="embed-container">
					  	<?php //echo 'plz'; //the_field('soundcloud'); ?>
						</div><!-- embed-container -->
					<?php endif; ?>
        </div>

				<?php 
      		if($videos){
      			foreach($videos as $vid){      				
					  	echo '<div class="item youtube">' . $vid['video'] . '</div>';						
      			}
      		}
      	?>
       
	      <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
    	</div><!-- .carousel-inner -->
    </div><!-- /.carousel -->

	</div><!-- #visual-vid-box -->									
							
	<!-- CLOSER X -->
	<div class="hide closer" id="visual-vid-closer"><i class="fa fa-times"></i></div>

	<div class="scroller events-scroller visual-fade">			
		<div class="link-scroll">
			<a href="#events" id="3" ><i class="fa fa-chevron-down center"></i></a>
		</div>			
	</div><!-- .scroller -->

</section>