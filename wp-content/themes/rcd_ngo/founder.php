<?php
//Template Name: Founder
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
    <section class="founder-sec custom-mb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="founder-sec-img">
                        <img src="<?php the_field('image_1'); ?>" alt="founder-sec-img" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="founder-sec-text">
                        <h2>Her story</h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();
?>