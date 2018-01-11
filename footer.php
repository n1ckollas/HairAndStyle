    <!-- About Section
    ================================================== -->
   
    		
    <div id="footer-nav">  <!-- Copyright notice on the bottom -->
    	<div class="container">
      <span><?php $copyright = get_theme_mod('rokophotolite_footer_copyrights', __( 'RokoPhoto Lite. All Rights Reserved', 'rokophotolite' )); if(!empty($copyright)) { echo wp_kses_post( $copyright ); } ?> 
		</div>      	
    </div>

<?php wp_footer(); ?>
 
 <script type="text/javascript" src="/wp-content/themes/rokophoto-lite/js/nicescroll.js"></script>
  <script type="text/javascript" src="/wp-content/themes/rokophoto-lite/js/jquery.mousewheel.js"></script>

<script>
jQuery(document).ready(function(){
	var gallery = jQuery(".gallery"); 
	 gallery.jScrollPane({
	 	scrollbarWidth:8,
	 	showArrows:false,
	 	autoReinitialise:true,
	});
	var api = gallery.data('jsp');
	gallery.load(function(){
		api.reinitialise();
	});
	jQuery(window).bind('resize',function(){
		api.reinitialise();
	});
	
	gallery.scroll(function(){
		var first = gallery.find('img:first-child');
		var last = gallery.find('img:last-child');
		if(api.getPercentScrolledX() == 1)
		{
			api.getContentPane().append(first);
			api.scrollTo(api.getContentPositionX() - first.width(),0);		
		}
		else if(api.getPercentScrolledX() == 0)
		{
				api.getContentPane().prepend(last);
				api.scrollTo(last.width(),0);		
		}
		
	});
	
    gallery.bind('mousewheel', function(e, delta, deltaX, deltaY){
    	if(deltaY < 0)
    	{
    		api.scrollTo(api.getContentPositionX() + 70);
    	}
    	else
    	{
    		api.scrollTo(api.getContentPositionX() - 70);
    	}
		e.preventDefault();
    });
    
	jQuery('.hideform').click(function(){
		jQuery("#testimonial-form-1").show('slow');
    	jQuery('.testimon .button_banner').hide();
  	});
  		jQuery('.map-container').click(function(){
           jQuery(this).find('iframe').addClass('clicked')})
    		.mouseleave(function(){
           jQuery(this).find('iframe').removeClass('clicked')});
 
});
	
</script>
  </body>
</html>