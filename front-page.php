<?php
/*
* Template Name: Home Page
*/
?>

<?php get_header();?>



<div class="slider-container">
    <?php
    $sliderQ = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'slider',
        'orderby'=>'date', 
        'order'=>'ASC'
    ));

   if ($sliderQ->have_posts()) {
        while ($sliderQ->have_posts()){
        $sliderQ->the_post();            
        $url = wp_get_attachment_url( get_post_thumbnail_id($sliderQ->ID) );
        echo '<div class="slider" style="background-image:url(' . $url . ')">';?>
            <span>
                <?php the_title(); ?>
                <a href="<?php the_field('slider_button_link');?>">
                    <?php the_field('slider_button_text');?>
                </a>
            </span>
        <?php echo '</div>';
        }
    }

    ?>
</div>


<div class="illustration">
    <img src="<?php echo bloginfo('template_directory').'/assets/img/icons.svg'; ?>">
</div>

<?php
if (have_posts()):
    while (have_posts() ):
        the_post();
        $pic = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
?>

<div class="about">
    <div>
        <img src="<?php echo $pic;?>" alt="">
    </div>
    
    <div>
        <h1>About</h1>
        <p><?php the_content();?></p>
    </div>
    
</div>


    <?php    
    endwhile;
endif;
?>















<?php get_footer();?>