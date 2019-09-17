<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HappyTour
 */

?>

	<footer class="footer">  
         <a href="#tour-popup" class="fb btn-open-tour" data-tour="53"><span class="pico"></span><span class="title"> Amigo ATV   <br/> <span> Monkey Tours</span> </span> <span class="img"></span></a>
        <a href="#tour-popup" class="fb btn-open-tour" data-tour="52"><span class="pico"></span><span class="title"> Mega  <br/> <span> Combo Tour</span> </span> <span class="img"></span></a>
        <a href="#tour-popup" class="fc btn-open-tour" data-tour="30"><span class="pico"></span><span class="title"> Happy Sloths  <br/> <span> and Waterfall Tour </span> </span> <span class="img"></span></a>
        <a href="#tour-popup" class="f1 btn-open-tour" data-tour="29"><span class="pico"></span><span class="title"> Adventures <br/> <span> in the sea</span> </span> <span class="img"></span></a>
        <a href="#tour-popup" class="fd btn-open-tour" data-tour="32"><span class="pico"></span><span class="title"> Nicaragua 
 <br/> <span> Day Tour </span> </span> <span class="img"></span></a>
        <!-- <a href="#" class="fe handle">Contact Us</a> -->
    </footer>

    <div class="side-bar">
            <div class="image">
                <div class="title">
                    <h2>For more information</h2>
                    Telephone: <a href="tel:+50689073524">+506 8907 3524</a><br>
                    <a href="mailto::reservations@julioshappytour.com">reservations@julioshappytour.com</a>
                </div>
                <div class="gradient"></div>
                <img src="<?php echo get_template_directory_uri();  ?>/img/bg_sidebar.jpg" alt="Img" />
                
                
            </div>
            <div class="content">
                <h3>Contact us</h3>               
                <?php echo do_shortcode('[contact-form-7 id="33" title="Contact form"]') ?>
            </div>
            <a class="handle">
                
            </a>
    </div>
  
    <div id="tour-popup" class="tour-popup white-popup mfp-hide mfp-with-anim">
        <h3 class="title"></h3>
        <span class="tag">Ask for Relaxing massage</span>
        <div class="gallery">
             <div class="slides">

              <span class="cycle-prev"> <i class="fa fa-angle-left"></i> </span>
              <span class="cycle-next"> <i class="fa fa-angle-right"></i> </span>
             </div>

        </div>
        <div class="content">
            <span>Loading...</span>
        </div>
        <a href="#" class="btn btn-reserve">Reserve Now</a>
        
       

    </div>

<?php wp_footer(); ?>

</body>
</html>
