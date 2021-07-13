<?php /* front-page.php powers the front page of the theme, this can be specified in the wordpress admin dashboard under settings > reading > a static page see also : https://www.udemy.com/course/become-a-wordpress-developer-php-javascript/learn/lecture/7247394*/ 
    get_header();
?>

this is the front page
<?php /* the following is a custom query, see also :/www.udemy.com/course/become-a-wordpress-developer-php-javascript/learn/lecture/7291138 */
    $landingPosts = new WP_query(array( /* the WP_query function requires an associative array */
        'posts_per_page' => 5,
        'category_name' => 'Featured' 
        /* there are tons of different parameters to refine the query*/
    ));



    while ( $landingPosts->have_posts() /*looks inside the custom query landingPosts for posts */) {
        $landingPosts->the_post();
        the_title();
    } 
?>
<?php
    get_footer();
?>
