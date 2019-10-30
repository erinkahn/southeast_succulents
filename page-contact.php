
<?php
/*
* Template Name: Contact Page
*/
?>

<?php get_header();?>




<h2>Plants</h2>

<?php
if (have_posts()):
    while (have_posts() ):
        the_post();
        echo '<li>';
            echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
            echo ' by ' . '<em>' . get_the_author() . '</em>';
        echo '</li>';
    endwhile;
endif;
?>












<?php get_footer();?>