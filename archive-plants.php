<?php
/*
* Template Name: Archive Plants
*/
?>

<?php get_header();?>



<div class="plant-button-box">
    <?php
        $locations = get_terms( array(
            'taxonomy'   => 'locations',
        ) );
    ?>

    <?php
        foreach( $locations as $location ) { ?>
            <a class="plant_location_link" href="<?php echo get_term_link($location); ?>">
                <div class="location_img">
                    <div class="locations-title">
                        <h2>
                            <?php echo $location->name; ?> <br> Plants
                        </h2>
                    </div>
                </div>
            </a>
        <?php }
    ?>
</div>


<div class="all-plants">
    <h2>All Plants</h2>
    <ul>
    <?php
    if (have_posts()):
        while (have_posts() ):
            the_post();
            ?>
            <li>
                <a href="<?php echo get_permalink();?>">
                    <?php echo the_post_thumbnail();?>
                </a>
            </li>
            <?php
        endwhile;
    endif;
    ?>
    </ul>
</div>


<?php get_footer();?>