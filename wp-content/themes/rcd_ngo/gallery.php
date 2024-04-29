<?php
//Template Name: Gallery
get_header(); ?>

<!-- Section: Main -->
<main class="main">
    <section class="inner-banner custom-mb" style="background-image: url(<?php the_field('inner_pages_banner', 'option') ?>)">
        <div class="container">
            <div class="inner-banner-text">
                <h1><?php the_title(); ?></h1>
                <p>
                    <?php the_field('gallery_top_heading'); ?>
                </p>
            </div>
        </div>
    </section>
    <section class="gallery-sec-main custom-mb" id="Gallery">
        <div class="container" id="here">
            <h2><?php the_field('gallery_sub_heading'); ?></h2>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <!-- Beginn Masonry Galerie mit Lightbox -->
                    <div class="mm-columns">
                        <?php
                        // Repeater field key.
                        $repeater_key = 'gallery';

                        // Get all repeater field values.
                        $gallery_items = get_field('gallery');

                        // Number of items per page.
                        $items_per_page = 12;

                        // Current page number.
                        $current_page = get_query_var('paged') ? get_query_var('paged') : 1;

                        // Calculate offset.
                        $offset = ($current_page - 1) * $items_per_page;

                        // Slice the array to get items for the current page.
                        $gallery_items_current_page = array_slice($gallery_items, $offset, $items_per_page);

                        if (!empty($gallery_items_current_page)) :
                            $count = 1;
                            foreach ($gallery_items_current_page as $gallery_item) :
                        ?>
                                <div class="mm-columns__item">
                                    <a href="<?= $gallery_item['images']; ?>" data-lightbox="masonry" data-title="">
                                        <img class="mm-columns__img" src="<?= $gallery_item['images']; ?>" />
                                    </a>
                                </div>
                        <?php
                                $count++;
                            endforeach;

                        else :
                        // Do something if no repeater items found.
                        endif;
                        ?>
                    </div>
                    <!-- Ende Masonry Galerie mit Lightbox -->

                    <?php

                    // Pagination links
                    $paginate_links = paginate_links(array(
                        'total'   => ceil(count($gallery_items) / $items_per_page),
                        'current' => $current_page,
                        'type'    => 'array', // Return as an array to customize output
                        'prev_text' => '<i class="fa-solid fa-angle-left"></i>',
                        'next_text' => '<i class="fa-solid fa-angle-right"></i>',
                    ));

                    $id = 'here';

                    if (!empty($paginate_links)) {

                        echo '<div class="pagination">';
                        echo '<ul class="d-flex align-items-center justify-content-center">';


                        // Extreme Previous link
                        echo '<li><a href="' . site_url('/gallery/#here') . '"><i class="fa-solid fa-angles-left"></i></a></li>';

                        foreach ($paginate_links as $link) {
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

                        // Next link
                        if ($current_page < ceil(count($gallery_items) / $items_per_page)) {
                            $next_page = $current_page + 1;
                            echo '<li><a href="' . site_url('/gallery/page/' . $next_page) . '#here"><i class="fa-solid fa-angles-right"></i></a></li>';
                        } else {
                            echo '<li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>';
                        }
                        echo '</ul>';
                        echo '</div>';
                    }


                    ?>


                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();
?>