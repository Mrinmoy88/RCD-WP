<?php
//Template Name: Events
get_header(); ?>

<!-- Section: Main -->
<main class="main">
    <section class="inner-banner custom-mb" style="background-image: url(<?php the_field('inner_pages_banner', 'option') ?>)">
        <div class="container">
            <div class="inner-banner-text">
                <h1><?php the_title(); ?></h1>
                <p>
                    <?php the_field('top_heading'); ?>
                </p>
            </div>
        </div>
    </section>
    <section class="event-list-sec custom-mb" id="here">
        <div class="container">
            <div class="row">

                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


                // Define the query arguments
                $args = array(

                    "post_type" => "event",
                    'posts_per_page' => 12, // Number of posts per page
                    "order" => "DESC",
                    'orderby' => 'date',  // Sort by title
                    'paged' => $paged,
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
                        <div class="col-lg-4 col-md-6">
                            <div class="home-event-box">

                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" /></a>
                                <div class="home-event-details d-flex justify-content-between align-items-center">
                                    <div class="home-event-details-main">
                                        <div class="home-event-details-title">
                                            <h5><?php the_title(); ?></h5>
                                        </div>
                                        <div class="home-event-details-info">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M20 10C20 16 12 22 12 22C12 22 4 16 4 10C4 7.87827 4.84285 5.84344 6.34315 4.34315C7.84344 2.84285 9.87827 2 12 2C14.1217 2 16.1566 2.84285 17.6569 4.34315C19.1571 5.84344 20 7.87827 20 10Z" stroke="#646464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#646464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <?php the_field('location'); ?></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 7.5V6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H8.5" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M16 2V6" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 2V6" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3 10H8" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17.5 17.5L16 16.3V14" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M16 22C19.3137 22 22 19.3137 22 16C22 12.6863 19.3137 10 16 10C12.6863 10 10 12.6863 10 16C10 19.3137 12.6863 22 16 22Z" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <?php the_field('date'); ?> <?php the_field('time'); ?>
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

                    $pagination_links = paginate_links(array(
                        'total' => $query->max_num_pages,
                        'current' => max(1, $paged),
                        'prev_text' => '<i class="fa-solid fa-angle-left"></i>',
                        'next_text' => '<i class="fa-solid fa-angle-right"></i>',
                        'type' => 'array', // Get the links as an array for custom styling
                    ));

                    // Restore global post data
                    wp_reset_postdata();
                } else {
                    // Display a message if no posts are found
                    echo 'No Events found.';
                }
                ?>

                <div class="col-lg-12">
                    <div class="pagination">
                        <ul class="d-flex align-items-center justify-content-center">


                            <?php




                            if (!empty($pagination_links)) {

                                // Extreme Previous link

                                echo '<li><a href="' . site_url('/events/#here') . '"><i class="fa-solid fa-angles-left"></i></a></li>';

                                foreach ($pagination_links as $link) {
                                    // Add custom classes to pagination items
                                    $id = 'here';

                                    // Check if the link contains "prev" or "next"
                                    if (strpos($link, 'current') !== false) {
                                        $class = 'active';
                                    } else {
                                        $class = '';
                                    }

                                    // Get the URL from the link
                                    preg_match('/href=["\']([^"\']+)/', $link, $matches);
                                    $url = isset($matches[1]) ? $matches[1] : '';

                                    // Append the #here anchor to the URL
                                    $url_with_anchor = $url . '#' . $id;

                                    // Replace the original URL with the modified URL in the link
                                    $link_with_anchor = str_replace($url, $url_with_anchor, $link);

                                    // Output the modified link
                                    echo '<li class="' . esc_attr($class) . '">' . $link_with_anchor . '</li>';
                                }
                                //Extreme Last link
                                if ($paged < $query->max_num_pages) {
                                    $next_page = $query->max_num_pages;
                                    echo '<li><a href="' . esc_url(add_query_arg(array('paged' => $next_page))) . '#here"><i class="fa-solid fa-angles-right"></i></a></li>';
                                } else {
                                    echo '<li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>';
                                }
                            }


                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();
?>