<?php

/**
 * Template Name: Admission Form
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
    <section class="contact-form-sec custom-mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <title>
                        <h2>Admission Foem</h2>
                    </title>
                    <!-- <form action="">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <input type="text" placeholder="First Name *" class="form-control" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <input type="text" placeholder="Last Name *" class="form-control" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <input type="text" placeholder="Email *" class="form-control" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <input type="text" placeholder="Phone" class="form-control" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <input type="date" placeholder="D.O.B" class="form-control" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <select name="" id="" class="form-control ">
                                    <option value="select">select</option>
                                    <option value="abc1">abc1</option>
                                    <option value="abc2">abc2</option>
                                    <option value="abc3">abc3</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <input type="text" placeholder="Nationality *" class="form-control" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 ">
                                <input type="file" class="" />
                            </div>
                            <div class="col-lg-6">
                                <textarea name="" id="" rows="2" placeholder="Present Address" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <textarea name="" id="" rows="2" placeholder="Permanent Address" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <textarea name="" id="" rows="3" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-12 checkbox-div">
                                <input type="checkbox" />
                                <label for="">Save my name, email, and website in this browser for the
                                    next time I comment.</label>
                            </div>
                            <div class="col-lg-12">
                                <button class="custom-btn" type="submit">
                                    Submit Now
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M18 8L22 12L18 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2 12H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <?php echo do_shortcode('[contact-form-7 id="7617d21" title="Admission Form"]') ?>

                    
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer();
?>