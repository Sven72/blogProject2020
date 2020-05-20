<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <?php wp_head(); ?>
    <title><?php the_title() ?></title>
    <!-- <meta name="keywords" content="Travel planning, travel bundles, travel escapes, affordable travel">
    <meta name="description" content="Your clarify. One trip away. We create soul restoring journeys that inspire you to be you."> -->
</head>
<body <?php body_class(); ?>>
    <header>
        <p class="header-logo"><a href="<?php echo site_url() ?>"><?php bloginfo(name)?></a></p>

<!-- Visible on wide -->
       <nav class="header-menu-wide" id="nav">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu'
                ));
                    ?>      
       </nav>

<!-- Adding Burger menu for mobile nav -->
<a class="open" id="menu-btn"  href="#">&#9776;</a>
<!-- visible on mobile -->
         <nav class="header-menu-mobile" id="nav-mobile">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu'
                ));
                    ?>      
       </nav>

   
<!-- 
Unter 700px soll Hamburger sichtbar sein. 
Bei Click auf Hamburger wird entsprechende Klasse sichtbar. 

 -->



</header>
