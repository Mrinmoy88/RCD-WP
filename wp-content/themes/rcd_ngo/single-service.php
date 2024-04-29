<?php

get_header(); ?>

<!-- Section: Main -->
<main class="main">
    <section class="inner-banner custom-mb" style="background-image: url(<?php the_field('inner_pages_banner', 'option') ?>)">
        <div class="container">
            <div class="inner-banner-text">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <p>
                    <?php the_field('top_heading'); ?>
                </p>
            </div>
        </div>
    </section>
    <section class="therapy inner-about-sec custom-mb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="inner-about-sec-img">
                        <?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                        <img src="<?php echo esc_url($thumbnail_url) ?>" alt="" />

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-about-sec-text">
                        <h2><?php the_field('main_heading'); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="impact therapy-impact custom-pb">
        <div class="impact-vector">
            <img src="assets/images/icons-bg.png" alt="" />
        </div>
        <div class="container">
            <div class="title text-center">
                <h5><?php the_field('our_impact_label_text'); ?></h5>
                <h2><?php the_field('sub_heading_1'); ?></h2>
            </div>
            <div class="row">
                <?php // Check rows exists.
                if (have_rows("checkpoints")) :
                    // Loop through rows.
                    $count = 1;
                    while (have_rows("checkpoints")) :
                        the_row(); ?>
                        <div class="col-lg-3 col-md-6 g-md-3">
                            <div class="impact-box">
                                <div class="impact-icon <?php if ($count == 1) { ?>f-icon <?php } ?>">
                                    <?= get_sub_field("icon"); ?>
                                </div>
                                <div class="impact-text">
                                    <span><?= get_sub_field("point"); ?></span>
                                    <p>
                                        <?= get_sub_field("short_desc"); ?>
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

            </div>
        </div>
    </section>
    <section class="mission benefits inner-about-sec custom-mb">
        <div class="container">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-6">
                    <div class="inner-about-sec-img">
                        <img src="<?php the_field('additional_image'); ?>" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-about-sec-text">
                        <h2><?php the_field('sub_heading_2'); ?></h2>
                        <p>
                            <?php the_field('sub_heading_short_desc'); ?>
                        </p>
                        <ul>
                            <?php // Check rows exists.
                            if (have_rows("additional_checkpoints")) :
                                // Loop through rows.
                                $count = 1;
                                while (have_rows("additional_checkpoints")) :
                                    the_row(); ?>

                                    <li>
                                        <h3><?= get_sub_field("heading"); ?></h3>
                                        <p>
                                            <?= get_sub_field("short_desc"); ?>
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
</main>

<?php get_footer();
?>