<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rcd_ngo
 */

?>

<section class="donate-sec">
	<div class="container">
		<div class="earth"><img src="<?= get_template_directory_uri(); ?>/assets/images/earth.png" alt=""></div>
		<div class="line1"><img src="<?= get_template_directory_uri(); ?>/assets/images/line1.png" alt=""></div>
		<div class="line2"><img src="<?= get_template_directory_uri(); ?>/assets/images/line1.png" alt=""></div>
		<div class="donate-main">
			<div class="donate-img"><img src="<?php the_field('donation_left_image', 'option');  ?>" alt=""></div>
			<div class="donate-text text-center ">
				<h2><?php the_field('donation_heading', 'option');  ?>
				</h2>
				<p><?php the_field('donation_description', 'option');  ?></p>
				<a href="javascript:void(0)" class="custom-btn" data-toggle="modal"
                data-target="#exampleModalCenter">
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
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header justify-content-between ">
				<h5 class="modal-title" id="exampleModalCenterTitle">Donation Form</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- <form action="">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<input type="text" placeholder="First Name *" class="form-control" />
						</div>
						<div class="col-lg-6 col-md-6">
							<input type="text" placeholder="Last Name *" class="form-control" />
						</div>
						<div class="col-lg-6 col-md-6">
							<input type="text" placeholder="Email *" class="form-control" />
						</div>
						<div class="col-lg-6 col-md-6">
							<input type="text" placeholder="Phone *" class="form-control" />
						</div>
						<div class="col-lg-12">
							<textarea name="" id="" rows="2" placeholder="Message" class="form-control"></textarea>
						</div>
						<div class="col-lg-12 text-center ">
							<button class="custom-btn">
								Donate
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M18 8L22 12L18 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M2 12H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</button>
						</div>
					</div>
				</form> -->

				<?php echo do_shortcode('[contact-form-7 id="5f3e3e1" title="Donation Form"]'); ?>
			</div>
		</div>
	</div>
</div>
<footer>
	<!-- <div class="container"> -->
	<div class="footer-top"></div>
	<div class="footer-middle">
		<div class="container">
			<img src="<?php the_field('footer_logo', 'option');  ?>" alt="Footer Logo">

			<?php
			wp_nav_menu(array(
				'theme_location'  => 'menu-2',
				'container'       => 'ul',
				'menu_class'      => '',
				'li_class'        => '',
				'a_class'         => ''
			));
			?>
			<ul class="footer-icon">
				<li><a href="<?php the_field('fb', 'option');  ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
				<li><a href="<?php the_field('twitter', 'option');  ?>"><i class="fa-brands fa-x-twitter"></i></a></li>
				<li><a href="<?php the_field('in', 'option');  ?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
				<li><a href="<?php the_field('insta', 'option');  ?>"><i class="fa-brands fa-instagram"></i></a></li>
				<li><a href="<?php the_field('youtube', 'option');  ?>"><i class="fa-brands fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="footer-last">
		<div class="container">
			<p><?php the_field('copyright_text', 'option');  ?></p>

			<?php
			wp_nav_menu(array(
				'theme_location'  => 'menu-3',
				'container'       => 'ul',
				'menu_class'      => '',
				'li_class'        => '',
				'a_class'         => ''
			));
			?>
		</div>
	</div>
	<!-- </div> -->
</footer>

<!-- <script src="./js/script.js" defer></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/custom.js"></script>

<script>
	// $(document).ready(function() {
	// 	$('#phone').on('input', function() {
	// 		var phoneNumber = $(this).val();
	// 		var regex = /^\d{0,10}$/; // Regular expression for maximum 10 digits
	// 		if (regex.test(phoneNumber)) {
	// 			// Valid phone number
	// 			$('#phone_error').text('');
	// 		} else {
	// 			// Invalid phone number
	// 			$('#phone_error').text('Phone number must contain only digits and have a maximum length of 10.');
	// 		}
	// 	});
	// });
</script>

<?php wp_footer(); ?>

</body>

</html>