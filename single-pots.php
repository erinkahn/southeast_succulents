<?php get_header();?>


<div class="single-pot">
    <?php
    if (have_posts()):
        while (have_posts() ):
            the_post();
            ?>
            <div class="pot-img">
                <img src="<?php echo the_post_thumbnail();?>">
            </div>
            <div class="pot-description">
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

    <?php $prev_post = get_adjacent_post( false, '', true )->ID; ?>
    <?php if ($prev_post) { ?>
        <a href="<?php echo get_permalink( $prev_post ); ?>"><?php echo '<i class="fas fa-chevron-left"></i> Previous Pot';?> </a>
    <?php } ?>

    <?php $next_post = get_adjacent_post( false, '', false)->ID; ?>
    <?php if ($next_post) { ?>
        <a href="<?php echo get_permalink( $next_post); ?>"><?php echo ' Next Pot<i class="fas fa-chevron-right"></i>';?> </a>
    <?php } ?>

</div>





<?php get_footer();?>