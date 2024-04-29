<?php

/**
 * Template Name: About
 *
 */

get_header(); ?>

<!-- Section: Main -->
<main class="main">
    <section class="inner-banner custom-mb" style="background-image: url(<?php the_field('inner_pages_banner', 'option') ?>">
        <div class="container">
            <div class="inner-banner-text">
                <h1><?php the_title(); ?></h1>
                <p>
                    <?php the_field('top_heading'); ?>
                </p>
            </div>
        </div>
    </section>
    <section class="vision inner-about-sec custom-mb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="inner-about-sec-img">
                        <img src="<?php the_field('our_vision_image'); ?>" alt="Our Vision" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-about-sec-text">
                        <h2>Our Vision</h2>
                        <?php the_field('our_vision_description'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mission inner-about-sec custom-mb">
        <div class="container">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-6">
                    <div class="inner-about-sec-img">
                        <img src="<?php the_field('our_mission_image'); ?>" alt="Our Mission" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-about-sec-text">
                        <h2>Our Mission</h2>
                        <p>
                            <?php the_field('our_mission_text'); ?>
                        </p>
                        <ul>
                            <?php
                            if (have_rows("our_mission_points")) :
                                // Loop through rows.
                                $count = 1;
                                while (have_rows("our_mission_points")) :
                                    the_row(); ?>

                                    <li>
                                        <h3><?= get_sub_field("heading"); ?></h3>
                                        <p>
                                            <?= get_sub_field("points"); ?>
                                        </p>
                                    </li>

                            <?php
                                    // End loop.

                                    $count++;
                                endwhile;

                            // No value.
                            else :

                            // Do something...
                            endif; ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-about-video custom-mb">
        <div class="fly2"><img src="<?= get_template_directory_uri(); ?>/assets/images/fly2.png" alt="" /></div>
        <div class="vector"><img src="<?= get_template_directory_uri(); ?>/assets/images/Vector.png" alt="" /></div>
        <div class="line1"><img src="<?= get_template_directory_uri(); ?>/assets/images/line1.png" alt="" /></div>
        <div class="container">
            <div class="title text-center">
                <h2> <?php the_field('video_text'); ?></h2>
            </div>
            <div class="inner-about-video-sec">
                <div class="shape">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/shape.png" alt="" />
                </div>
               
                <?php the_field('video'); ?>
            </div>
        </div>
    </section>
    <section class="inspiring inner-about-sec custom-mb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="inner-about-sec-img">
                        <img src="<?php the_field('inspiring_story_image'); ?>" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-about-sec-text">
                        <h2>Inspiring Story</h2>
                        <?php the_field('inspiring_story'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();
?>