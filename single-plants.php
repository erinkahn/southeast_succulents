<?php get_header();?>



<?php
if (have_posts()):
    while (have_posts() ):
        the_post();
        ?>
        
        <h2><?php echo the_title();?></h2>
        <?php the_content(); ?>

        <?php 
        echo the_field('price'); 
        echo the_field('care');
        ?>
        <?php
    endwhile;
endif;
?>










<?php get_footer();?>