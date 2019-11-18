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
            'orderby'    => 'count',
            'hide_empty' => false,
            'fields'     => 'all'
        ) );
    ?>

    <?php
        foreach( $locations as $location ) {
        $args = array(
            'post_type' => 'plants',
            'locations' => $location->slug
        );
        $location_link = get_term_link( $location );
        $locationsQ = new WP_Query( $args );

        if ($locationsQ->have_posts() ) :
            while ( $locationsQ->have_posts() ) : $locationsQ->the_post(); ?>
            <a class="plant_location_link" href="<?php echo $location_link; ?>">
                <div class="location_img">
                    <div class="locations-title">
                        <h2>
                            <?php echo $location->name; ?> <br> Plants
                        </h2>
                    </div>
                </div>
            </a>
         <?php endwhile;
        wp_reset_postdata();
     endif; }?>
</div>


<?php get_footer();?>