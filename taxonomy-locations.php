
<?php
/*
* Template Name: Plants Taxonomy
*/
?>

<?php get_header();?>


<div class="locations-page-container">

    <?php
    if (have_posts()):
        while (have_posts() ):
            the_post();
            
            $terms = get_the_terms( $post->ID , 'locations' );
            foreach ( $terms as $term ) {
            echo $term->slug;
            }?>

            <h3><?php echo the_title();?></h3>
            <?php echo the_excerpt(); ?>

            <?php
        endwhile;
    endif;
    ?>


    <?php
    $locationsQ = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'plants',
        'tax_query' => array(
        array (
            'taxonomy' => 'locations',
            'field' => 'slug',
            'terms' => 'locations',
        )
    ),
    ));

   if ($locationsQ->have_posts()) {
        while ($locationsQ->have_posts()){
        $locationsQ->the_post();            
        $url = wp_get_attachment_url( get_post_thumbnail_id($locationsQ->ID) );
        echo '<div class="locations" style="background-image:url(' . $url . ')">';?>
            <span>
                <h3><b><?php the_title(); ?></b></h3>
                <a href="<?php echo get_permalink(); ?>">VIEW PRODUCT</a>
            </span>
        <?php echo '</div>';
         wp_reset_query();
        }
    }

    ?>

</div>


<?php get_footer();?>