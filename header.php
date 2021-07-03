<!DOCTYPE html>
<html <?php language_attributes(); // allows wordpress to handle language attribute ?>> <!--- closing tag is in footer.php --->
<meta charset="<?php bloginfo('charset') // allows wordpress to handle charsets?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<!-- <title> Claustra - collective for ceramics & sculpture </title> --> <!-- we let wordpress decide the title of the webpage, see action in functions.php
		<?php wp_head(); ?> <!--- this is a wordpress function --->
	</head>
	<body <?php body_class(); //allows wordpress to add various classes ?>><!--- closing tag is in footer.php --->
		<header>
			<nav>
				<ul>
				<!-- this handles the menu links of the header for reference look at https://www.udemy.com/course/become-a-wordpress-developer-php-javascript/learn/lecture/7153988. this is lesson 17 (about menu of childpage links) from the course Become a WordPress Developer:Unlocking Power With Code from Brad Schiff. -->
				<!-- if more freedom/options are wanted to choose what pages come into the header menu, check out 'register_nav_menu() and wp_nav_menu()' or the course https://www.udemy.com/course/become-a-wordpress-developer-php-javascript/learn/lecture/7233528. this is lesson 19 (about navigation menus). -->
					<?php wp_list_pages(
						array(
							'title_li' => NULL,
							'child_of' => 0,
							'depth' => 1,
							'sort_column' => 'menu_order'
						) 
					); ?>			
				</ul>
			</nav>
			<a>
				<h1>CLAUSTRA</h1>
			</a>
			<h2>collective for ceramics & sculpture</h2>
		</header>





