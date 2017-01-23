<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    	<div class="wrapper">
            <header class="header">
                <div class="contentBox header-content">
                    <div class="row">
                        <div id="headerLeft" class="col-md-6">
                            <div class="header-logo"><a href="/noor/MedicalOrthodontics"><img src="<?php echo get_template_directory_uri() . '/images/logo.svg' ?>" /></a></div>
                        </div>
                        <!--#headerLeft-->

                        <div id="headerRight" class="col-md-6">
                            <div class="header-social"><a href=""><span class="fa fa-facebook-square"></span></a> <a href=""><span class="fa fa-twitter-square"></span></a> <a href=""><span class="fa fa-instagram"></span></a> <a href=""><span class="fa fa-linkedin-square"></span></a> <a href=""><span class="fa fa-envelope"></span></a></div>
                            <!-- <div>
                                <form role="search" method="get" class="search-form" action="http://localhost:8888/noor/MedicalOrthodontics/">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form>
                            </div> -->
                        </div>
                        <!--#headerRight-->
                    </div>
                </div>

                <div class="nav-box">
                    <div class="contentBox">
                        <nav><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'header-menu' ) ); ?></nav>
                    </div>
                </div>
                <!--end of .nav-box-->

            </header>
            <!--end of .header-->
    	