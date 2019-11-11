
<?php
/*
* Template Name: Pots
*/
?>

<?php get_header();?>



<?php
if (have_posts()):
    while (have_posts() ):
        the_post();
        ?>
        
        <?php
    endwhile;
endif;
?>

<div class="pots-container">
    <?php
    $potQ = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'pots',
        'orderby'=>'date', 
        'order'=>'ASC'
    ));

   if ($potQ->have_posts()) {
        while ($potQ->have_posts()){
        $potQ->the_post();            
        $url = wp_get_attachment_url( get_post_thumbnail_id($potQ->ID) );
        echo '<div class="pot" style="background-image:url(' . $url . ')">';?>
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