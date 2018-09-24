<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
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
                <section class="bv-row">
                    <div class="bv-container">
                        <div class="bv-6">
                            <figure class="header_logo">
                                <div class="toggle-button">
                                    <i class="fas fa-bars"></i>
                                </div>
                                <div class="logo">
                                    <a href="/">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                                    </a>
                                </div>
                            </figure>
                        </div>

                        <div class="bv-6">
                            <div class="header-social">
                                <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a target="_blank" href="https://twitter.com/MedicalOrthodo1"><i class="fab fa-twitter-square"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="https://www.instagram.com/medicalorthodontics/"><i class="fab fa-instagram"></i></a>
								<a target="_blank" href="https://plus.google.com/u/0/103822529754449125092"><i class="fab fa-google-plus-square"></i></a>
                            </div>
                             <div class="find-doctor">
                                <input type="text" placeholder="10016"><a href="/find-a-doctor/">find a doctor</a>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="navigation-box" data-menu="closed"><nav><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'header-menu' ) ); ?></nav></div>
            </header>