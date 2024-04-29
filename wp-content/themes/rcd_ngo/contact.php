<?php
//Template Name: Contact
get_header(); ?>

<style>
    /* Custom CSS for textarea */
    textarea.message {
        width: 100%;
        /* Adjust as needed */
        min-height: 10em;
        /* Specify the minimum height */
        resize: vertical;
        /* Allow vertical resizing */
    }
</style>

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
    <section class="contact-sec custom-mb">
        <div class="container">
            <title>
                <h2>Get in touch</h2>
            </title>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="contact-sec-box">
                        <div class="contact-sec-icon">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/con-ph.png" alt="" />
                        </div>
                        <div class="contact-sec-text">
                            <h6>Call Us</h6>
                            <a href="tel:<?php the_field('phone', 'option') ?>">
                                <h4><?php the_field('phone', 'option') ?></h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="contact-sec-box">
                        <div class="contact-sec-icon">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/con-email.png" alt="" />
                        </div>
                        <div class="contact-sec-text">
                            <h6>Send Email</h6>
                            <a href="mailto:<?php the_field('email', 'option') ?>">
                            <h4><?php the_field('email', 'option') ?></h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-sec-box">
                        <div class="contact-sec-icon">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/con-location.png" alt="" />
                        </div>
                        <div class="contact-sec-text">
                            <h6>Visit Anytime</h6>
                            <h4><?php the_field('address', 'option') ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form-sec custom-mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <title>
                        <h2>Get in touch</h2>
                    </title>



                    <?php echo do_shortcode('[contact-form-7 id="05093d1" title="Contact form"]') ?>


                </div>
                <div class="col-lg-6">
                    <div class="contac-sec-map">
                        <?php the_field('map', 'option') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();
?>