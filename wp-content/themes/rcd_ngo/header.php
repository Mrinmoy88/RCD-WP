<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rcd_ngo
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Syahrizaldev" />

	<title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?><?php if (get_bloginfo('description')) : ?> - <?php bloginfo('description'); ?><?php endif; ?></title>




	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" />
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/style.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="header-top">
			<div class="container">
				<ul>
					<li class="desk-view">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M20 10C20 16 12 22 12 22C12 22 4 16 4 10C4 7.87827 4.84285 5.84344 6.34315 4.34315C7.84344 2.84285 9.87827 2 12 2C14.1217 2 16.1566 2.84285 17.6569 4.34315C19.1571 5.84344 20 7.87827 20 10Z" stroke="#1A170B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#1A170B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg> <?php the_field('address', 'option'); ?>
					</li>
					<li class="desk-view">
						<a href="mailto:<?php the_field('email', 'option'); ?>" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
								<path d="M18.3335 3.6665H3.66683C2.65431 3.6665 1.8335 4.48732 1.8335 5.49984V16.4998C1.8335 17.5124 2.65431 18.3332 3.66683 18.3332H18.3335C19.346 18.3332 20.1668 17.5124 20.1668 16.4998V5.49984C20.1668 4.48732 19.346 3.6665 18.3335 3.6665Z" stroke="#1A170B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M20.1668 6.4165L11.9443 11.6415C11.6613 11.8188 11.3341 11.9128 11.0002 11.9128C10.6662 11.9128 10.339 11.8188 10.056 11.6415L1.8335 6.4165" stroke="#1A170B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg> <?php the_field('email', 'option'); ?></a>
					</li>
				</ul>
				<div class="desk-search">

					<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
						<button type="submit">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.9167 20.5833C16.7031 20.5833 20.5833 16.7031 20.5833 11.9167C20.5833 7.1302 16.7031 3.25 11.9167 3.25C7.1302 3.25 3.25 7.1302 3.25 11.9167C3.25 16.7031 7.1302 20.5833 11.9167 20.5833Z" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M22.7501 22.7501L18.0918 18.0918" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</button>
						<span class="screen-reader-text"><?php echo _x('Search for:', 'label'); ?></span>
						<input type="search" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
					</form>



				</div>

			</div>
		</div>
		<div class="header-btm">
			<div class="container">
				<div class="logo"><a href="<?php echo site_url('/') ?>"><img src="<?php the_field('header_logo', 'option'); ?>" alt="Logo"></a></div>
				<nav class="main-menu">


					<ul>
						<?php
						$locations = get_nav_menu_locations();
						$primaryMenuID = $locations['menu-1'];
						$primaryMenu = wp_get_nav_menu_items($primaryMenuID);

						// Get the current page URL
						$currentURL = home_url(add_query_arg(array(), $wp->request)) . '/';
						//echo $currentURL;

						// First, let's identify all parent menu items
						$parentMenuItems = [];
						foreach ($primaryMenu as $menu) {
							if ($menu->menu_item_parent == 0) { // If this is a top-level item (no parent)
								$parentMenuItems[] = $menu;
							}
						}

						// Now, let's display only those menu items that do not have a parent
						foreach ($parentMenuItems as $parentItem) {
							$menuParentTitle = $parentItem->title;
							$menuParentURL = $parentItem->url;
							$menuChildren = get_nav_menu_item_children($parentItem->ID, $primaryMenu);
							//echo $menuParentURL;

							$isActive = ($menuParentURL == $currentURL) ? 'active' : '';



							if (!empty($menuChildren)) {

								echo '<li class="has-children">' . $menuParentTitle . ' <i class="fa-solid fa-chevron-down icon-arrow"></i>';
								echo '<ul class="children">';
								foreach ($menuChildren as $child) {
									$isActive1 = ($child->url == $currentURL) ? 'active' : '';
									echo '<li><a href="' . $child->url . '" class="' . $isActive1 . '">' . $child->title . '</a></li>';
								}
								echo '</ul></li>';
							} else {
								echo '<li><a href="' . $menuParentURL . '" class="' . $isActive . '">' . $menuParentTitle . '</a></li>';
							}
						}
						?>

					</ul>

					<ul>
						<li class="mob-view">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M20 10C20 16 12 22 12 22C12 22 4 16 4 10C4 7.87827 4.84285 5.84344 6.34315 4.34315C7.84344 2.84285 9.87827 2 12 2C14.1217 2 16.1566 2.84285 17.6569 4.34315C19.1571 5.84344 20 7.87827 20 10Z" stroke="#1A170B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#1A170B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg><?php the_field('address', 'option'); ?>
						</li>
						<li class="mob-view">
							<a href="mailto:<?php the_field('email', 'option'); ?>" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
									<path d="M18.3335 3.6665H3.66683C2.65431 3.6665 1.8335 4.48732 1.8335 5.49984V16.4998C1.8335 17.5124 2.65431 18.3332 3.66683 18.3332H18.3335C19.346 18.3332 20.1668 17.5124 20.1668 16.4998V5.49984C20.1668 4.48732 19.346 3.6665 18.3335 3.6665Z" stroke="#1A170B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M20.1668 6.4165L11.9443 11.6415C11.6613 11.8188 11.3341 11.9128 11.0002 11.9128C10.6662 11.9128 10.339 11.8188 10.056 11.6415L1.8335 6.4165" stroke="#1A170B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg> <?php the_field('email', 'option'); ?></a>
						</li>
					</ul>

				</nav>

				<ul class="header-btn">
					<li>


						<button type="button" class="" data-toggle="modal" data-target="#exampleModalCenter">
							<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
								<path d="M18.3333 23.3332H21.6667C22.5507 23.3332 23.3986 22.982 24.0237 22.3569C24.6488 21.7317 25 20.8839 25 19.9998C25 19.1158 24.6488 18.2679 24.0237 17.6428C23.3986 17.0177 22.5507 16.6665 21.6667 16.6665H16.6667C15.6667 16.6665 14.8333 16.9998 14.3333 17.6665L5 26.6665" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								</path>
								<path d="M11.6665 33.3335L14.3332 31.0001C14.8332 30.3335 15.6665 30.0001 16.6665 30.0001H23.3332C25.1665 30.0001 26.8332 29.3335 27.9998 28.0001L35.6665 20.6668C36.3097 20.059 36.685 19.2206 36.71 18.3361C36.735 17.4515 36.4076 16.5933 35.7998 15.9501C35.1921 15.307 34.3537 14.9316 33.4691 14.9066C32.5846 14.8816 31.7263 15.209 31.0832 15.8168L24.0832 22.3168" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								</path>
								<path d="M3.3335 25L13.3335 35" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M36.1718 16.5671C37.3385 15.4004 38.6718 13.9004 38.6718 12.0671C38.7883 11.0486 38.5575 10.0207 38.0167 9.14979C37.4759 8.27892 36.6569 7.61618 35.6924 7.26896C34.7279 6.92174 33.6745 6.91039 32.7027 7.23675C31.7309 7.56311 30.8979 8.20805 30.3385 9.06706C29.7435 8.2747 28.9102 7.69394 27.9609 7.41003C27.0116 7.12613 25.9962 7.15404 25.0639 7.48966C24.1316 7.82529 23.3315 8.45095 22.781 9.2748C22.2304 10.0986 21.9585 11.0773 22.0051 12.0671C22.0051 14.0671 23.3385 15.4004 24.5051 16.7337L30.3385 22.4004L36.1718 16.5671Z" fill="#7FDD94"></path>
								<path d="M32.4999 14.1667C33.6666 13 34.9999 11.5 34.9999 9.66667C35.1164 8.64821 34.8856 7.62026 34.3448 6.7494C33.8041 5.87853 32.9851 5.21579 32.0206 4.86857C31.0561 4.52135 30.0026 4.51 29.0308 4.83636C28.0591 5.16272 27.226 5.80766 26.6666 6.66667C26.0716 5.87431 25.2383 5.29354 24.289 5.00964C23.3397 4.72574 22.3244 4.75365 21.3921 5.08927C20.4598 5.4249 19.6596 6.05056 19.1091 6.87441C18.5586 7.69826 18.2866 8.6769 18.3333 9.66667C18.3333 11.6667 19.6666 13 20.8333 14.3333L26.6666 20L32.4999 14.1667Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								</path>
							</svg>
							Donate Now
						</button>
					</li>
					<li>
						<a href="<?php echo site_url('/admission-form/') ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
								<path d="M18.75 2.5H7.5C6.83696 2.5 6.20107 2.76339 5.73223 3.23223C5.26339 3.70107 5 4.33696 5 5V25C5 25.663 5.26339 26.2989 5.73223 26.7678C6.20107 27.2366 6.83696 27.5 7.5 27.5H22.5C23.163 27.5 23.7989 27.2366 24.2678 26.7678C24.7366 26.2989 25 25.663 25 25V8.75L18.75 2.5Z" stroke="#379863" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M17.5 2.5V7.5C17.5 8.16304 17.7634 8.79893 18.2322 9.26777C18.7011 9.73661 19.337 10 20 10H25" stroke="#379863" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M12.5 11.25H10" stroke="#379863" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M20 16.25H10" stroke="#379863" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M20 21.25H10" stroke="#379863" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							Admission</a>
					</li>
				</ul>
				<div class="hamburger-menu">
					<div class="bar"></div>
				</div>
			</div>
		</div>
	</header>