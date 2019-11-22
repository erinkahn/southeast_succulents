<?php get_header();?>

<div class="single-plant">
    
    <?php
    if (have_posts()):
        while (have_posts() ):
            the_post();
            ?>
            <div class="plant-img">
                <?php the_post_thumbnail();?>
            </div>
            <div class="plant-description">
                <h2><?php echo the_title();?></h2>
                <?php echo the_content(); ?>
                <p><b>Price: </b>$<?php echo the_field('pot_price');?></p>
                <p><b>Size:</b> <?php echo the_field('pot_size');?></p>
            </div>
            
            <?php
        endwhile;
    endif;
    ?>
</div>



<div class="single-prev-next">
    <?php previous_post_link( '%link', ' <i class="fas fa-chevron-left" aria-hidden="true"></i> Previous Plant', FALSE ); ?> 
    <?php next_post_link( '%link', 'Next Plant <i class="fas fa-chevron-right" aria-hidden="true"></i>', FALSE ); ?> 
</div>


<?php get_footer();?>