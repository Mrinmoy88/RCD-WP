<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package rcd_ngo
 */

get_header();
?>

<main id="primary" class="site-main" style="display:none;">

	<?php if (have_posts()) : ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Search Results for: %s', 'rcd_ngo'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header><!-- .page-header -->

	<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part('template-parts/content', 'search');

		endwhile;

		the_posts_navigation();

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main>
<!-- #main -->

<main class="main">
	<section class="inner-banner custom-mb" style="background-image: url(<?php the_field('inner_pages_banner', 'option') ?>)">
		<div class="container">
			<div class="inner-banner-text">
				<h1>Your Serach below</h1>
				<p>
					<?php /* translators: %s: search query. */
					printf(esc_html__('Search Results for: %s', 'rcd_ngo'), '<span>' . get_search_query() . '</span>'); ?>
				</p>
			</div>
		</div>
	</section>
	<section class="founder-sec custom-mb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="founder-sec-img">
						<?php
						/* Start the Loop */
						if (have_posts()) :
							while (have_posts()) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part('template-parts/content', 'search');

							endwhile;

							the_posts_navigation();
						else :

							//get_template_part('template-parts/content', 'none');

							echo "<h1>Nothing Found</h1>";
							echo '<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</P>';

						endif;
						?>
					</div>
				</div>

			</div>
		</div>
	</section>
</main>

<?php
// get_sidebar();
get_footer();
