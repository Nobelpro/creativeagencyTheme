<!DOCTYPE html>
<html <?php language_attributes(); ?> > <!-- dynamic to multiple language -->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">  <!-- dynamic charse-->
    <title> <?php bloginfo('name'); ?> </title> <!-- dynamic title -->
    <script src="https://kit.fontawesome.com/89023cdb81.js" crossorigin="anonymous"></script>
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
<!--                            <li><a href="header.php">home</a></li>-->
                            <!--                            <li><a href="#">page</a></li>-->
                            <!--                            <li><a href="#">portfolio</a></li>-->
                            <!-- <li><a href="#">blog</a></li> -->
                            <!--                            <li><a href="#">page</a></li>-->
                        </ul
                    </div>
                    <div class="nav_icon">
                        <img src="<?php echo get_template_directory_uri() ?>/images/dottIcon.png" alt="">
                    </div>
                </div>
            </div>
        </header>
        <!--        slider part-->

        <!--dream part start-->

        <section id="dream">
            <div class="dream_wrap">
                <div class="dream_image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/balck1.png" alt="" class="black1">
                    <img src="<?php echo get_template_directory_uri() ?>/images/blac2.png" alt="" class="black2">
                </div>

                <div class="dream_content container">
                    <h1>your dream. <span>webdesign</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam labore placeat magnam incidunt voluptatum iste similique harum commodi veritatis. Molestias.</p>
                </div>

                <div class="dream_service container">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/branding.png" alt="">
                        <h1>branding</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/graphic.png" alt="">
                        <h1>graphic</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>

                    <div>
                        <img src="images/ideas.png" alt="">
                        <h1>creative ideas</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="btn container">
                    <button>know more</button>

                </div>
            </div>
        </section>

        <!--    dream work end    -->




        <!--   creative work start     -->


        <section id="creative_work">
            <div class="container">
                <div class="creative_text">
                    <h1>our creative work</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate nemo optio, nam fuga molestias similique, neque mollitia aut ducimus, eius velit porro deserunt ut quia quibusdam quas iure adipisci nulla.</p>
                </div>
                <div class="creative_gallery">
                    <img src="<?php echo get_template_directory_uri() ?>/images/gallery/img-1.png" alt="" class='single_pic'>
                    <img src="<?php echo get_template_directory_uri() ?>/images/gallery/img-2.png" alt="" class='single_pic'>
                    <img src="<?php echo get_template_directory_uri() ?>/images/gallery/img-3.png" alt="" class='single_pic'>
                    <img src="<?php echo get_template_directory_uri() ?>/images/gallery/img-4.png" alt="" class='single_pic'>
                    <img src="<?php echo get_template_directory_uri() ?>/images/gallery/img-5.png" alt="" class='single_pic'>
                    <img src="<?php echo get_template_directory_uri() ?>/images/gallery/img-6.png" alt="" class='single_pic'>
                    <img src="<?php echo get_template_directory_uri() ?>/images/gallery/img-7.png" alt="" class='single_pic'>
                    <img src="<?php echo get_template_directory_uri() ?>/images/gallery/img-8.png" alt="" class='single_pic'>
                    <img src="<?php echo get_template_directory_uri() ?>/images/gallery/img-9.png" alt="" class='single_pic'>
                </div>
                <div class="gallery_btn ">
                    <button>know more</button>
                </div>
                <div class="branding_img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/gallery/brand-image.png" alt="">
                </div>

            </div>
        </section>


        <section id="user_review">
            <div class="container">
                <div class="text-area">
                    <h1>our user's review</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt molestias molestiae soluta enim ratione ducimus rem consectetur officia, ipsum natus.</p>
                </div>
                <div class="user_wrapper">
                    <div class="single_user">
                        <div class="user_info">
                            <div class="user_image">
                                <img src="<?php echo get_template_directory_uri() ?>/images/person.png" alt="">
                            </div>
                            <div class="user_name">
                                <h2>David Smith</h2>
                                <p>Graphic Designer</p>
                            </div>
                            <span>
                                <h1>''</h1>
                            </span>
                        </div>
                        <div class="user_details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, veniam. Ut soluta neque quidem aliquam libero. Quis fugit maxime, sequi.</p>
                            <img src="<?php echo get_template_directory_uri() ?>/images/star.png" alt="">
                        </div>

                    </div>
                    <div class="single_user">
                        <div class="user_info">
                            <div class="user_image">
                                <img src="<?php echo get_template_directory_uri() ?>/images/person.png" alt="">
                            </div>
                            <div class="user_name">
                                <h2>David Smith</h2>
                                <p>Graphic Designer</p>
                            </div>
                            <span>
                                <h1>''</h1>
                            </span>
                        </div>
                        <div class="user_details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, veniam. Ut soluta neque quidem aliquam libero. Quis fugit maxime, sequi.</p>
                            <img src="<?php echo get_template_directory_uri() ?>/images/star.png" alt="">
                        </div>

                    </div>
                    <div class="single_user">
                        <div class="user_info">
                            <div class="user_image">
                                <img src="i<?php echo get_template_directory_uri() ?>/mages/person.png" alt="">
                            </div>
                            <div class="user_name">
                                <h2>David Smith</h2>
                                <p>Graphic Designer</p>
                            </div>
                            <span>
                                <h1>''</h1>
                            </span>
                        </div>
                        <div class="user_details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, veniam. Ut soluta neque quidem aliquam libero. Quis fugit maxime, sequi.</p>
                            <img src="<?php echo get_template_directory_uri() ?>/images/star.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
            <h1>we are on blog.php</h1>
        </section>


        <section id="touch">
            <div class="container">
                <h1> get in touch</h1>
                <div class="contactInfo">
                    <div class="addressArea">
                        <h3>Address:</h3>
                        <p>123, Main Street, Your City, New York USA 789456</p>
                        <hr>
                        <h3>Call Us:</h3>
                        <p>+123 4567 890, +123 4567 890</p>
                        <hr>
                        <h3>Email</h3>
                        <p>free@developer.gmail.com</p>
                    </div>
                    <form action="">
                        <fieldset>
                            <legend>Contact Form</legend>
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email"><br><br>
                            <input type="text" placeholder="subject">
                            <input type="text" placeholder="Number"><br><br>
                            <textarea name="" id="" cols="50" rows="10" placeholder="write your description"></textarea>
                            <div class="contact-btn">
                                <button>submit</button>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </section>











