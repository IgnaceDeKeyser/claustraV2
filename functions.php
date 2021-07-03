<?php
// for reference look at https://www.udemy.com/course/become-a-wordpress-developer-php-javascript/learn/lecture/7147764#overview . this is lesson 10 (about header and footers) from teh course Become a WordPress Developer:Unlocking Power With Code from Brad Schiff.

    function theme_files() {
        wp_enqueue_style( // this can be used multiple instances to load different things directly, like fonts and iconse etc... for reference look at https://www.udemy.com/course/become-a-wordpress-developer-php-javascript/learn/lecture/7148936#content . this is lesson 12 (convert static html template into wordpress) from teh course Become a WordPress Developer:Unlocking Power With Code from Brad Schiff.
            'theme_main_style', // name doesn't really matter
            get_stylesheet_uri() // wordpress function to fetch style.css
        );
    }

    function theme_features(){
        add_theme_support('title-tag'); // allows wordpress to handle the title tag
        register_nav_menu('headerMenu', 'Header Menu'); //adds 'Header Menu' in wordpress admin screen, is referenced to in header.php
    }

add_action(
    'wp_enqueue_scripts', // runs before wp_head (see header.php)
    'theme_files' // name of the function we just made
);

add_action(
    'after_setup_theme',  // runs before wp_head (see header.php)
    'theme_features' // name of the function we just made
);
