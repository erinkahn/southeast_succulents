
<?php
/*
* Template Name: Contact
*/
?>

<?php get_header();?>


<div class="contact-page">

    <?php
    if (have_posts()):
        while (have_posts() ):
            the_post();
            ?>
            
            <h1 class="text-center uppercase greentwo averia"><?php echo the_title();?></h1>


            <?php
        endwhile;
    endif;
    ?>

</div>









<?php get_footer();?>