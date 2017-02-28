<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HappyTour
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <header class="header">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"> <img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Logo" /> </a>
     <div class="copyright">
        <!-- <a href="http://www.avotz.com" class="avotz" target="_blank"><i class="icon icon-avotz"></i></a> -->
    </div>
     <div class="redes">
        <a href="https://www.facebook.com/JuliosHappyTourCostaRica/" class="facebook" target="_blank"><i class="icon icon-facebook"></i></a>
        <a href="https://www.tripadvisor.com.mx/members/julioricardoo" class="tripadvisor" target="_blank"><i class="icon fa fa-tripadvisor"></i></a>
       

    </div>
    
    <?php wp_nav_menu( array(
             'theme_location' => 'primary',
             'menu_id' => 'primary-menu',
             'container'       => 'nav',
            'container_class' => 'menu',
            'container_id'    => '',
            'menu_class'      => 'menu-ul',
              ) 
          ); 
          ?>
   
</header>
