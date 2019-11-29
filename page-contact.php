
<?php
/*
* Template Name: Contact
*/
$page_id = 'contact';
$page_title = 'Contact'; 
?>

<?php get_header();?>


<div class="contact-page">

    <?php
    if (have_posts()):
        while (have_posts() ):
            the_post();
            ?>
            
            <h2 class="text-center uppercase greentwo averia"><?php echo the_title();?></h2>


            <div class="left-right-container">
                <div class="left-contact">
                    <?php echo the_post_thumbnail();?>
                </div>
                
                
                <div class="contact-right">
                    <?php echo the_content();?>
                </div>
            </div>
            

            <?php 
        endwhile;
    endif;
    ?>

</div>









<?php get_footer();?>