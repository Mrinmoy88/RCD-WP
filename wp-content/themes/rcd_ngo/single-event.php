<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rcd_ngo
 */

get_header();
$current_post_id = get_the_ID();
?>

<main id="primary" class="site-main" style="display:none;">

    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', get_post_type());

        the_post_navigation(
            array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'rcd_ngo') . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'rcd_ngo') . '</span> <span class="nav-title">%title</span>',
            )
        );

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<!-- Section: Main -->
<main class="main">
    <section class="inner-banner custom-mb" style="background-image: url(<?php the_field('inner_pages_banner', 'option') ?>)">
        <div class="container">
            <div class="inner-banner-text">
                <h1><?php the_field('top_heading'); ?></h1>
                <?php the_field('breadcrumb'); ?>
            </div>
        </div>
    </section>
    <section class="blog-list-sec list-sec custom-mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="inner-details-text">
                        <h3><?php the_title(); ?></h3>
                        <p>
                            <?php the_field('short_description'); ?>
                        </p>
                        <h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7 20.662V19C7 18.4696 7.21071 17.9609 7.58579 17.5858C7.96086 17.2107 8.46957 17 9 17H15C15.5304 17 16.0391 17.2107 16.4142 17.5858C16.7893 17.9609 17 18.4696 17 19V20.662" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <?php the_author(); ?>
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
                            </svg>
                            <?= get_the_date(); ?>
                        </h5>
                        <div class="inner-details-img">
                            <!-- <img src="assets/images/inner-blog-img.png" alt=""> -->
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="recent-post-sec">
                        <h3>Recent Events</h3>
                        <div class="row ">

                            <?php
                            $args = array(

                                "post_type" => "event",
                                'posts_per_page' => 5, // Number of posts per page
                                "order" => "ASC",
                                'orderby' => 'date',  // Sort by title
                                'post__not_in'   => array($current_post_id) // Exclude the current post
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
                            ?>

                                    <div class="col-lg-12 col-md-6 recent-post">
                                        <div class="recent-post-box">
                                            <div class="recent-post-img">
                                                <a href="<?= the_permalink(); ?>">
                                                    <img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title() ?>" />
                                                </a>
                                            </div>
                                            <div class="recent-post-text">
                                                <a href="<?= the_permalink(); ?>"><?= substr(get_the_title(), 0, 100) . '...'; ?></a>
                                                <h6>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                        <path d="M7.33337 1.83337V5.50004" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.6666 1.83337V5.50004" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M17.4167 3.66663H4.58333C3.57081 3.66663 2.75 4.48744 2.75 5.49996V18.3333C2.75 19.3458 3.57081 20.1666 4.58333 20.1666H17.4167C18.4292 20.1666 19.25 19.3458 19.25 18.3333V5.49996C19.25 4.48744 18.4292 3.66663 17.4167 3.66663Z" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2.75 9.16663H19.25" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M7.33337 12.8334H7.34337" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11 12.8334H11.01" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.6666 12.8334H14.6766" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M7.33337 16.5H7.34337" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11 16.5H11.01" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.6666 16.5H14.6766" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <?= get_the_date(); ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>

                            <?php
                                }
                                // Restore global post data
                                wp_reset_postdata();
                            } else {
                                // Display a message if no posts are found
                                echo 'No new events yet.';
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="more-items custom-mb">
        <div class="container">
            <h3>More Events</h3>
            <div class="more-items-slider">



                <div class="more-items-slide">

                    <?php

                    $args = array(

                        "post_type" => "event",
                        'posts_per_page' => -1, // Number of posts per page
                        "order" => "DESC",
                        'orderby' => 'date',  // Sort by title
                        'post__not_in'   => array($current_post_id) // Exclude the current post
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
                    ?>
                            <div class="home-blog-box">
                                <div class="home-blog-img">
                                    <a href="<?= the_permalink(); ?>"><img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title() ?>" /></a>
                                </div>
                                <div class="home-blog-text">
                                    <h4><?php the_title() ?></h4>
                                    <h5>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7 20.662V19C7 18.4696 7.21071 17.9609 7.58579 17.5858C7.96086 17.2107 8.46957 17 9 17H15C15.5304 17 16.0391 17.2107 16.4142 17.5858C16.7893 17.9609 17 18.4696 17 19V20.662" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <?php the_author(); ?>
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
                                        </svg>
                                        <?= get_the_date(); ?>
                                    </h5>
                                    <?= substr(get_the_content(), 0, 100) . '...'; ?>
                                    <a href="<?= the_permalink(); ?>">Read more
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M18 8L22 12L18 16" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2 12H22" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                    <?php
                        }
                        // Restore global post data
                        wp_reset_postdata();
                    } else {
                        // Display a message if no posts are found
                        echo "<div class='home-blog-box'>";
                        echo 'No more events yet!';
                        echo "</div>";
                    }
                    ?>
                </div>



            </div>
        </div>
    </section>
</main>

<?php
// get_sidebar();
get_footer();
