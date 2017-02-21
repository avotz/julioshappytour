<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HappyTour
 */

get_header(); ?>
	
	<section class="main">
            <section class="banner">
                <div class="cycle-slideshow" data-cycle-slides=".slide">
                    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner.jpg');">
                        
                            <div class="splash">
                                <h2>Adventures</h2>
                            </div>
                        
                    </div>
                     <div class="slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner2.jpg');">
                        
                            <div class="splash">
                                <h2>Waterfalls</h2>
                            </div>
                        
                    </div>
                    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner3.jpg');">
                        
                            <div class="splash">
                                <h2>Nicaragua Day Tour</h2>
                            </div>
                        
                    </div>
                    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner4.jpg');">
                        
                            <div class="splash">
                                <h2>Atv Tours</h2>
                            </div>
                        
                    </div>
                    
                </div>
            </section>
            
     </section>
	

<?php
get_footer();
