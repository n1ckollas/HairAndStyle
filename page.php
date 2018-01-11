<?php get_header(); ?>

    <!-- Page
    ================================================== -->
    <div class="blog">
        <div class="container">
            <div class="row">

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'page'); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            </div>
        </div>
        <section class="other_func">
        	<div class="gallery-container">
        		<h2 class="aboutme">My Hair Styles</h1>
        			<div class="scrollBox">

        		<? echo do_shortcode('[wp_owl id="4"]');?></div>
        		</div>
        		<div class="banner-bg">
        			<div class="baner-bg2">
        				<div class="container"><? echo do_shortcode('[banner id="84"]');?></div>	
        			</div>
        			<div class="button_banner">
          <a class="ankor_form" href="#appointment">Appointment</a>
      </div>
        		</div>
	        <div class="container testimon">
	        	<h2 class="aboutme">What customers say ...</h2>
	        	<? echo do_shortcode("[print_best_testimonial_slider]");?>
	        	
	        	<? echo do_shortcode("[print_best_testimonial_form]");?>
	        	<div class="button_banner">
		          <a class="ankor_form hideform" href="javascript:void(0);">What was your experiens like?</a>
		      	</div>
		    	  
	        </div>
			
			<div class="map-container" >
				
				<div class="header-map"><span class="follow">Follow me on</span><a target="_blank" href="https://www.instagram.com/olga_kovaleva_hairstylist/"><span class="instag"></span></a> </div>
				<div class="fr_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.888617178917!2d-73.99520268429242!3d40.808441339646194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f7cf0a6a47e1%3A0x9e736ee1b8f547c6!2s126+Pine+St%2C+Cliffside+Park%2C+NJ+07010!5e0!3m2!1sen!2sus!4v1507756673245" width="100%" height="640" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				</div>
				<div class="">
					<div class="contactform" id="appointment">
						<div class="con-50">
							<?php wd_form_maker(1); ?>
						</div>
						<div class="con-50">
							<h2 class="form_name" style="margin-top:29px;">Contact me</h2>
							
							<?php if ( is_active_sidebar( 'rokophoto-sidebar-bottom' ) ) : ?>
		   		<ul class="contact-list">
		            <?php dynamic_sidebar( 'rokophoto-sidebar-bottom' ); ?>
		        </ul>
		        
				<?php endif; ?>
							
						</div>
					</div>
									
				</div>
    		</div>
    		
    
			
			
     </section>
    
    </div>
     
    <?php
        // If comments are open or we have at least one comment, load up the comment template.
    	if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
    ?>

<?php get_footer(); ?>