
<?php
/*
* Template Name: Weddings + Events
*/
?>

<?php get_header();?>




<?php
if (have_posts()):
    while (have_posts() ):
        the_post();
        ?>
        
        <h2><?php echo the_title();?></h2>

        <?php
    endwhile;
endif;
?>











<?php get_footer();?>