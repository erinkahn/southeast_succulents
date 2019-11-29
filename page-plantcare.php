
<?php
/*
* Template Name: Plant Care
*/

$page_id = 'plantcare';
$page_title = 'Care'; 
?>

<?php get_header();?>


<div class="plantcare-container">

    <?php
    if (have_posts()):
        while (have_posts() ):
            the_post();
            ?>
            <h2 class="text-center uppercase greentwo averia"><?php echo the_title();?></h2>
            <p><?php the_content();?></p>
        <?php endwhile;
    endif;
    ?>

</div>












<?php get_footer();?>