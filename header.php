<!DOCTYPE html>
<html <?php language_attributes(); ?> > <!-- dynamic to multiple language -->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">  <!-- dynamic charse-->
    <title> <?php bloginfo('name'); ?> </title> <!-- dynamic title -->
    <script src="https://kit.fontawesome.com/89023cdb81.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body>

<div class="container_full">
    <header>
        <div class="container">
            <div class="navBar_wrapper">
                <div class="logo">
                    <h1>creative</h1>
                    <p>agency</p>
                </div>
                <?php //wp_nav_menu insert where we want to show dynamic menu.
                wp_nav_menu(array(
                    'theme-location'=>'primary_menu', //called theme location form functions.php
                    'container' => 'div', //called container from menu.
                    'container_class' => 'navBar_wrapper', //called container_calss from menu.
                    'menu_class'=> 'nav-item' //called menu_class form menu
                ));
                ?>
                    <div class="navBar_wrapper">
                        <ul class="nav-item">
<!--                            <li><a href="#">home</a></li>-->
<!--                            <li><a href="#">page</a></li>-->
<!--                            <li><a href="#">portfolio</a></li>-->
                          <!--  <li><a href="blog.php">blog</a></li>-->
<!--                            <li><a href="#">page</a></li>-->
                        </ul
                    </div>
                <div class="nav_icon">
                    <!-- this template tag use to show dynamic image -->
                    <img src="<?php echo get_template_directory_uri() ?>/images/dottIcon.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <!--        slider part-->
    <div id="slider">
        <div class="container">
            <div class="slider_content">
                <!-- this template tag use to show dynamic image -->
                <img src="<?php echo get_template_directory_uri() ?>/images/like.png" alt="">
                <div class="slider_text">
                    <h1>Digital <br> creative <br>agency</h1>
                    <p>We are a creative web design agency who makes <br> beautiful website for thousand of people</p>
                    <button class="slider_btn">know more</button>
                </div>
            </div>


        </div>

    </div>


    <div class="dott_wrap">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
<h1>we are on header.php </h1>