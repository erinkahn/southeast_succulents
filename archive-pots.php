
<?php
/*
* Template Name: Pots
*/
?>

<?php get_header();?>

<!-- dont need a customm query loop -- wp automatically has all the archive posts here. you only need a custom query loop when ur putting part of the posts on a random page like home -->

<div class="pots-container">
    <?php
   
   if (have_posts()) {
        while (have_posts()){
        the_post();            
        $url = wp_get_attachment_url( get_post_thumbnail_id() );
        echo '<div class="pot" style="background-image:url(' . $url . ')">';?>
            <span>
                <h3><b><?php the_title(); ?></b></h3>
                <a href="<?php echo get_permalink(); ?>">VIEW PRODUCT</a>
            </span>
        <?php echo '</div>';
         wp_reset_query();
        }
    }

    ?>
</div>










<?php get_footer();?>