<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <?php wp_head(); ?>
    <title><?php the_title() ?></title>
</head>
<body <?php body_class(); ?>>
    <header>
    <div class="container">
        <p class="header-logo"><a href="<?php echo site_url() ?>"><?php bloginfo()?></a></p>

        <button class="nav-toggle" aria-label="open navigation">
                <span class="hamburger"></span>
            </button>
            <!-- <h1>.</h1> -->
<!-- Visible on wide -->
       <nav class="header-menu-wide nav">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu'
                ));
                    ?>      
       </nav>
    </div>


   
<!-- 
Unter 700px soll Hamburger sichtbar sein. 
Bei Click auf Hamburger wird entsprechende Klasse sichtbar. 

ICH BRAUCHE KEINE ZWEITE NAV KLASSE. ICH KANN EINE VERWEDNEN .
 -->

   
</header>
