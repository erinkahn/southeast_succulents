
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
        $url = wp_get_attachment_url( get_post_thumbnail_id() );?>
        <a href="<?php echo get_permalink(); ?>">
            <img src="<?php echo $url;?>" alt="">
        </a>
        <?php wp_reset_query();
        }
    }

    ?>
</div>










<?php get_footer();?>