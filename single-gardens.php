<?php get_header();?>

<div class="single-garden">
    
    <?php
    if (have_posts()):
        while (have_posts() ):
            the_post();
            ?>
            <div class="garden-img">
                <?php the_post_thumbnail();?>
            </div>
            <div class="garden-description">
                <h2><?php echo the_title();?></h2>
                <?php echo the_content(); ?>
                
                <?php $terms = get_the_terms($post->ID, 'types');
                    foreach($terms as $term){
                        echo 'Garden Type: ' . $term->name;
                    } 
                ?>

            </div>
            
            <?php
        endwhile;
    endif;
    ?>
</div>



<div class="single-prev-next">
    <?php previous_post_link( '%link', ' <i class="fas fa-chevron-left" aria-hidden="true"></i> Previous Garden', FALSE ); ?> 
    <?php next_post_link( '%link', 'Next Garden <i class="fas fa-chevron-right" aria-hidden="true"></i>', FALSE ); ?> 
</div>


<?php get_footer();?>