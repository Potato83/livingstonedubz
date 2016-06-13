<?php
/*
Template Name: MainPageVar
 */
get_header(); 
$embed_type = get_field('embed_type');
?>
<!-- <div id="load"></div> -->
<div id="contents">
<section id="home">
	<div class="top-banner sneak-away"></div>
	<div class="social-banner sneak-away"></div>
	<div id="home-inner">

		<div id="hero-banner" class="sneak-away">			
  		<img src="<?php bloginfo ('template_url'); ?>/assets/img/Jaff56b.png" alt="Living~Stone" id="main56" class="sneak-away">
  		<img src="http://livingstonedubz.com/wp-content/uploads/2016/04/Jaff2.gif" alt="Living~Stone" id="main-gif56" class="sneak-away">
		</div>

			<ul class="social56 social-links-custom57 social-links sneak-away">
				<li class="spacer-fb56"></li>
				<li class="giffy"><a href="http://www.facebook.com/Livingstonedubz/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/fbw2.png" alt="Facebook" class="ico-border" id="fb-border"></a></li>
				<li class="spacer56"></li>
				<li class="giffy"><a href="http://twitter.com/livingstonedubz" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/tww2.png" alt="Twitter" class="ico-border"></a></li>
				<li class="spacer56"></li>
				<li class="giffy"><a href="http://soundcloud.com/livingstonesound" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/scw.png" alt="Soundcloud" class="ico-border"></a></li>
				<li class="spacer56"></li>
				<li class="giffy"><a href="http://livingstonesound.tumblr.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/tmw.png" alt="Tumblr" class="ico-border"></a></li>
				<li class="spacer56"></li>
				<li class="giffy"><a href="http://www.mixcloud.com/livingstonesound" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/mcw.png" alt="Mixcloud" class="ico-border"></a></li>
				<li class="spacer56x"></li>								
				<li class="giffy giffy-bc56"><a href="http://livingstone.bandcamp.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/bcw.png" alt="Bandcamp" class="ico-border"></a></li>				
				<li class="spacer-bc56"></li>
				<li class="giffym"><a href="mailto:livingstonedubz@gmail.com"><img src="<?php bloginfo('template_directory'); ?>/assets/img/email4e.png" alt="Email" class="ico-border"></a></li>
				<li class="spacer56m"></li>
			</ul>
		

<div id="fade-out" class="headline hide"><?php the_field('fading_headline'); ?></div>
<!-- <button id="tast">TST</button> -->
		<div id="embed-div" class="borders">
			

      <?php 



      if($embed_type === 'Soundcloud'){
               //if(!empty(the_field('soundcloud'))): ?>
              <!-- <div class="embed-container-sc"><?php //the_field('soundcloud'); ?></div> -->
              <!-- <div class="foo"> -->
               
								<?php the_field('soundcloud'); ?>
              
              	
              <!-- </div> -->
              
      <?php //endif;  
      }

      if($embed_type === 'Youtube'){
               //if(!empty(the_field('youtube'))): ?>
        <div class="embed-container"><?php the_field('youtube'); ?></div>

      <?php //endif;  
      } 

      ?>
    </div><!-- embed-div -->                

                        

    
		
		<div class="scroller mix-scroller">			
			<div class="link-scroll hide" id="scroller-1">
				<a href="#mix" id="1" ><i class="fa fa-chevron-down center"></i></a>
			</div>			
		</div><!-- .scroller -->
		
	</div><!-- #home-inner56 -->		
		
</section><!-- #home-page -->

<?php get_template_part('content', 'mix'); ?>
<?php get_template_part('content', 'visual'); ?>
<?php get_template_part('content', 'events'); ?>
<?php get_template_part('content', 'contact'); ?>

</div><!-- #contents -->
<script>
	var jimmy = "<?php echo $embed_type; ?>";
</script>
<?php get_footer(); ?>