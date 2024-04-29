<?php

/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<!-- Section: Main -->
<main class="main">
    <section class="inner-banner custom-mb" style="background-image: url(<?php the_field('inner_pages_banner', 'option') ?>)">
        <div class="container">
            <div class="inner-banner-text">
                <h1>404 Not Found!</h1>
                <p>
                    The page you are looking for is not found.
                </p>
            </div>
        </div>
    </section>
    <section class="founder-sec custom-mb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="founder-sec-img">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/404.png" alt="founder-sec-img" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="founder-sec-text">
                        <!-- <h3>Checkout below pages for your references >> </h3> -->
                        <?php
                        // wp_nav_menu(array(
                        //     'theme_location'  => 'quick-links',
                        //     'container'       => 'ul',
                        //     'menu_class'      => '',
                        //     'li_class'        => '',
                        //     'a_class'         => ''
                        // ));
                        ?>

                        <div class="error-content">
                            <h1>Seems like, the page you have opned is not found. </h1>
                            <p>We are very sorry!</p> <br>
                            <a href="<?php echo site_url('/') ?>">Go back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>




<?php get_footer(); ?>