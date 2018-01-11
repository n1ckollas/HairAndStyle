<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Basic Page Needs
================================================== -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>


<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<style>
	html {
    margin-top: 0 !important;
}
#wpadminbar{display:none;}
</style>




<style type="text/css" id="page-css">
			/* Styles specific to this particular page */
			.scroll-pane
			{
				width: 100%;
				height: 200px;
				overflow: auto;
			}
			.jspCap
			{
				display: block;
				background: #eeeef4;
			}

			.jspVerticalBar .jspCap
			{
				height: 20px;
			}

			.jspHorizontalBar .jspCap
			{
				width: 50px;
				height: 100%;
			}
		</style>
</head>

<body <?php body_class(); ?>>
    <!-- Preloader
    ================================================== -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>

    <!-- Navigation
    ================================================== -->
    <section id="header">
    	<div class="container">
    		<div class="headblock headblock-f">
    			<noindex>
			    	<div class="social_btn">
			    		<a target="_blank" href="https://www.facebook.com/olga.kovaleva.3386"><span class="fb"></span></a>
			    		<a target="_blank" href="https://www.instagram.com/olga_kovaleva_hairstylist/"><span class="in"></span></a>
			    		<a target="_blank" href="https://vk.com/id237099732"><span class="vk"></span></a>
			    		
			    	</div>
    			</noindex>
    		</div>	
    		<div class="headblock headblock-s"> 
		    	<?php if ( is_active_sidebar( 'rokophoto-sidebar-top' ) ) : ?>
		   		 <div id="primary" role="complementary">
		    	<ul>
		            <?php dynamic_sidebar( 'rokophoto-sidebar-top' ); ?>
		        </ul>
		        </div>
		    
				<?php endif; ?>
			</div>
		</div>
    </section>

    <!-- Blog
    ================================================== -->
    <section id="background-image">
    </section>
    <section id="blog">
    	<section id="background-image3"></section>
      <div class="button_banner">
          <a class="ankor_form" href="#appointment">Appointment</a>
      </div>
    </section>