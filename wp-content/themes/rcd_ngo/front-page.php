<?php
//Template Name: Home
get_header(); ?>


<!-- Section: Main -->
<main class="main">
    <section class="banner custom-mb">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-7">
                    <div class="banner-text">
                        <h5><?php the_field('banner_heading_1'); ?></h5>
                        <h1>
                            <?php the_field('banner_heading_2'); ?>
                        </h1>
                        <p>
                            <?php the_field('banner_heading_3'); ?>
                        </p>
                        <a href="<?php echo site_url('/about/') ?>" class="custom-btn">
                            Know us better
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M18 8L22 12L18 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2 12H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-5"> -->
                <div class="banner-img">
                    <img src="<?php the_field('banner_image') ?>" alt="Banner Image" />
                    <div class="sun"><img src="<?= get_template_directory_uri(); ?>/assets/images/sun.png" alt="" /></div>
                    <div class="confuse">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/confuse.png" alt="" />
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
        <div class="cloud"><img src="<?= get_template_directory_uri(); ?>/assets/images/Cloud.png" alt="" /></div>
        <div class="fun"><img src="<?= get_template_directory_uri(); ?>/assets/images/fun.png" alt="" /></div>
        <div class="saturn"><img src="<?= get_template_directory_uri(); ?>/assets/images/saturn.png" alt="" /></div>
    </section>

    <section class="home-about custom-mb">
        <div class="container">
            <div class="fly"><img src="<?= get_template_directory_uri(); ?>/assets/images/fly.png" alt="Fly" /></div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="home-about-img-main">
                        <div class="home-about-img">
                            <img src="<?php the_field('about_left_image') ?>" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-about-text">
                        <div class="title">
                            <h5>About Us</h5>
                            <h2><?php the_field('about_heading') ?></h2>
                        </div>
                        <?php the_field('about_short_desc') ?>
                        <div class="home-about-btm d-flex align-items-center">
                            <div class="home-about-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="<?php the_field('founder_image') ?>" alt="" />
                                </div>
                                <div class="founder-detail">
                                    <h4><?php the_field('founder_name') ?></h4>
                                    <h6><?php the_field('founder_profile') ?></h6>
                                </div>
                            </div>
                            <a href="<?php echo site_url('/our-founder//') ?>" class="custom-btn">
                                Founder Insights
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M18 8L22 12L18 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2 12H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="impact custom-pb">
        <div class="impact-vector">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/icons-bg.png" alt="" />
        </div>
        <div class="container">
            <div class="title text-center">
                <h5>Our Impact</h5>
                <h2><?php the_field('our_impact_heading'); ?></h2>
            </div>
            <div class="row">

                <?php // Check rows exists.
                if (have_rows("our_impacts")) :
                    // Loop through rows.
                    $count = 1;
                    while (have_rows("our_impacts")) :
                        the_row(); ?>

                        <div class="col-lg-3">
                            <div class="impact-box">
                                <div class="impact-icon <?php if ($count == 1) { ?>f-icon <?php } ?>">
                                    <?= get_sub_field("icon"); ?>
                                </div>
                                <div class="impact-text">
                                    <span><?= get_sub_field("number"); ?></span>
                                    <p><?= get_sub_field("text"); ?></p>
                                </div>
                            </div>
                        </div>

                <?php
                        // End loop.

                        $count++;
                    endwhile;

                // No value.
                else :

                // Do something...
                endif; ?>

            </div>
        </div>
    </section>
    <section class="focus-area custom-mb">
        <div class="butterfly">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/butterfly.png" alt="" />
        </div>
        <div class="rainbow">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/rainbow.png" alt="" />
        </div>
        <div class="line2"><img src="<?= get_template_directory_uri(); ?>/assets/images/line2.png" alt="" /></div>
        <div class="focus-bg">
            <img src="<?php the_field("our_focus_areas_image"); ?>" alt="" />
        </div>
        <div class="container">
            <div class="title text-center">
                <h5>Our Key Focus Areas</h5>
                <h2><?php the_field('our_focus_areas_heading') ?></h2>
            </div>
            <div class="row">
                <?php // Check rows exists.
                if (have_rows("our_focus_areas")) :
                    // Loop through rows.
                    $count = 1;
                    while (have_rows("our_focus_areas")) :
                        the_row(); ?>
                        <div class="col-lg-6 focus-area-main-box">
                            <div class="focus-area-box <?php if ($count == 2 || $count == 4) { ?>float-end <?php } ?>">
                                <div class="focus-area-icon">
                                    <img src="<?= get_sub_field("icon"); ?>" alt="" />
                                </div>
                                <div class="focus-area-text">
                                    <h3><?= get_sub_field("heading"); ?></h3>
                                    <p>
                                        <?= get_sub_field("short_description"); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                <?php
                        // End loop.

                        $count++;
                    endwhile;

                // No value.
                else :

                // Do something...
                endif; ?>

                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="javascript:void(0)" class="custom-btn" data-toggle="modal" data-target="#exampleModalCenter">
                        Donate Now
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M18 8L22 12L18 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2 12H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="home-event custom-mb">
        <div class="container position-relative">
            <div class="fly"><img src="<?= get_template_directory_uri(); ?>/assets/images/fly.png" alt="Fly" /></div>
            <div class="vector">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/Vector.png" alt="vector" />
            </div>
            <div class="title text-center">
                <h5>Our Events</h5>
                <h2><?php the_field('our_events_heading') ?></h2>
            </div>
            <div class="row">

                <?php

                // Define the query arguments
                $args = array(

                    "post_type" => "event",
                    'posts_per_page' => 3, // Number of posts per page
                    "order" => "ASC",
                    'orderby' => 'date',  // Sort by title

                );

                // Instantiate a new WP_Query
                $query = new WP_Query($args);

                // Check if there are any posts
                if ($query->have_posts()) {
                    // Start the loop
                    while ($query->have_posts()) {
                        $query->the_post();
                        $featured_image = wp_get_attachment_image_src(
                            get_post_thumbnail_id(
                                get_the_ID()
                            ),
                            "full"
                        );
                        // Display post content as needed
                ?>

                        <div class="col-lg-4">
                            <div class="home-event-box">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title() ?>" />
                                </a>
                                <div class="home-event-details d-flex justify-content-between align-items-center">
                                    <div class="home-event-details-main">
                                        <div class="home-event-details-title">
                                            <h5><?php the_title() ?></h5>
                                        </div>
                                        <div class="home-event-details-info">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M20 10C20 16 12 22 12 22C12 22 4 16 4 10C4 7.87827 4.84285 5.84344 6.34315 4.34315C7.84344 2.84285 9.87827 2 12 2C14.1217 2 16.1566 2.84285 17.6569 4.34315C19.1571 5.84344 20 7.87827 20 10Z" stroke="#646464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#646464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <?php the_field('location') ?></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 7.5V6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H8.5" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M16 2V6" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 2V6" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3 10H8" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17.5 17.5L16 16.3V14" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M16 22C19.3137 22 22 19.3137 22 16C22 12.6863 19.3137 10 16 10C12.6863 10 10 12.6863 10 16C10 19.3137 12.6863 22 16 22Z" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <?php the_field('date') ?>, <?php the_field('time') ?>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="custom-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M18 8L22 12L18 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2 12H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                    // Restore global post data
                    wp_reset_postdata();
                } else {
                    // Display a message if no posts are found
                    echo 'No Blogs found.';
                }
                ?>

                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="<?php echo site_url('/events/') ?>" class="custom-btn">
                        View More
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M18 8L22 12L18 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2 12H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="approach custom-mb">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-5">
                    <div class="approach-main">
                        <div class="title">
                            <h5>Our Approach</h5>
                            <h2><?php the_field('our_approach_heading') ?></h2>
                        </div>
                        <ul>
                            <?php // Check rows exists.
                            if (have_rows("our_approach")) :
                                // Loop through rows.
                                while (have_rows("our_approach")) :
                                    the_row(); ?>
                                    <li>
                                        <div class="approach-icon">
                                            <img src="<?= get_sub_field("icon"); ?>" alt="" />
                                        </div>
                                        <div class="approach-text">
                                            <h4><?= get_sub_field("heading"); ?></h4>
                                            <p>
                                                <?= get_sub_field("short_description"); ?>
                                            </p>
                                        </div>
                                    </li>
                            <?php
                                // End loop.


                                endwhile;

                            // No value.
                            else :

                            // Do something...
                            endif; ?>

                        </ul>
                        <ul>
                            <li>
                                <a  href="javascript:void(0)" class="custom-btn" data-toggle="modal" data-target="#exampleModalCenter">
                                    Donate Now
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M18 8L22 12L18 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M2 12H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="approach-img">
                        <img src="<?php the_field('our_approach_right_image') ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial custom-mb">
        <div class="container position-relative ">
            <div class="line2"><img src="<?= get_template_directory_uri(); ?>/assets/images/line2.png" alt=""></div>
            <div class="title text-center ">
                <h5>Testimonials</h5>
                <h2><?php the_field('testimonial_heading'); ?></h2>
            </div>
            <div class="testimonial-slider">

                <?php

                // Define the query arguments
                $args = array(

                    "post_type" => "testimonial",
                    'posts_per_page' => -1, // Number of posts per page
                    "order" => "ASC",
                    'orderby' => 'date',  // Sort by title

                );

                // Instantiate a new WP_Query
                $query = new WP_Query($args);

                // Check if there are any posts
                if ($query->have_posts()) {
                    // Start the loop
                    while ($query->have_posts()) {
                        $query->the_post();
                        $featured_image = wp_get_attachment_image_src(
                            get_post_thumbnail_id(
                                get_the_ID()
                            ),
                            "full"
                        );
                        // Display post content as needed
                ?>

                        <div class="testi-slide">
                            <div class="testi-slide-main">
                                <div class="colum"><img src="<?= get_template_directory_uri(); ?>/assets/images/Intersect.png" alt=""></div>
                                <p>“<?= substr(get_the_content(), 0, 100) . '...'; ?>”</p>
                                <div class="feedback-details">
                                    <div class="testi-img"><img src="<?php echo $featured_image[0]; ?>" alt=""></div>
                                    <div class="testi-text">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('profile'); ?>,<br><span><?php the_field('company'); ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                    // Restore global post data
                    wp_reset_postdata();
                } else {
                    // Display a message if no posts are found
                    echo 'No Blogs found.';
                }
                ?>

            </div>
    </section>
    <section class="home-blog custom-mb">
        <div class="container position-relative ">
            <div class="line2"><img src="<?= get_template_directory_uri(); ?>/assets/images/line2.png" alt=""></div>
            <div class="vector"><img src="<?= get_template_directory_uri(); ?>/assets/images/Vector.png" alt=""></div>
            <div class="title text-center ">
                <h5>Our Blogs</h5>
                <h2><?php the_field('blogs_heading'); ?></h2>
            </div>
            <div class="row">
                <?php

                // Define the query arguments
                $args = array(

                    "post_type" => "post",
                    'posts_per_page' => 3, // Number of posts per page
                    "order" => "ASC",
                    'orderby' => 'date',  // Sort by title

                );

                // Instantiate a new WP_Query
                $query = new WP_Query($args);

                // Check if there are any posts
                if ($query->have_posts()) {
                    // Start the loop
                    while ($query->have_posts()) {
                        $query->the_post();
                        $featured_image = wp_get_attachment_image_src(
                            get_post_thumbnail_id(
                                get_the_ID()
                            ),
                            "full"
                        );
                        // Display post content as needed
                ?>
                        <div class="col-lg-4">
                            <div class="home-blog-box">
                                <div class="home-blog-img"><a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>"></a></div>
                                <div class="home-blog-text">
                                    <h4><?php the_title(); ?></h4>
                                    <h5>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7 20.662V19C7 18.4696 7.21071 17.9609 7.58579 17.5858C7.96086 17.2107 8.46957 17 9 17H15C15.5304 17 16.0391 17.2107 16.4142 17.5858C16.7893 17.9609 17 18.4696 17 19V20.662" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> <?php the_author(); ?>
                                    </h5>
                                    <h5>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <path d="M7.3335 1.83325V5.49992" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.6665 1.83325V5.49992" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.4167 3.66675H4.58333C3.57081 3.66675 2.75 4.48756 2.75 5.50008V18.3334C2.75 19.3459 3.57081 20.1667 4.58333 20.1667H17.4167C18.4292 20.1667 19.25 19.3459 19.25 18.3334V5.50008C19.25 4.48756 18.4292 3.66675 17.4167 3.66675Z" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2.75 9.16675H19.25" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.3335 12.8333H7.3435" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11 12.8333H11.01" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.6665 12.8333H14.6765" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.3335 16.5H7.3435" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11 16.5H11.01" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.6665 16.5H14.6765" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> <?= get_the_date(); ?>
                                    </h5>
                                    <p><?= substr(get_the_content(), 0, 100) . '...'; ?></p>
                                    <a href="<?php the_permalink(); ?>">Read more
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M18 8L22 12L18 16" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2 12H22" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                    // Restore global post data
                    wp_reset_postdata();
                } else {
                    // Display a message if no posts are found
                    echo 'No Blogs found.';
                }
                ?>

                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="<?= site_url('/our-blog/'); ?>" class="custom-btn">
                        View More
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M18 8L22 12L18 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2 12H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>