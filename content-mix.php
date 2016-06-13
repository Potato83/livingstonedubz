<?php

$mixcloud = get_field('mixcloud');

?>

<section id="mix">

	<div class="visual-between visual-fade">

			<!-- <iframe src="https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Flivingstonesound%2Fconscious-wave-presents-livingstone-live-on-subfm-june-9-2016%2F&light=1" frameborder="0" class="mixmix"></iframe> -->

		<iframe src="<?php echo $mixcloud; ?>" frameborder="0" class="mixmix"></iframe>

	</div><!-- .visual-between -->

<div class="scroller visual-scroller visual-fade">      
  <div class="link-scroll">
    <a href="#visual" id="2" ><i class="fa fa-chevron-down center"></i></a>
  </div>      
</div><!-- .scroller -->


</section>