
<?php
/*
* Template Name: Hypertufas
*/
?>

<?php get_header();?>

<!-- dont need a customm query loop -- wp automatically has all the archive posts here. you only need a custom query loop when ur putting part of the posts on a random page like home -->

<div class="pots-container">
    <p class="text-center averia greentwo">What is Hypertufa? Hypertufa is a material made from cement, peat moss, sand, perlite and/or vermiculite. It is ideal for garden containers because it gives the look and feel of stone without the weight. In addition to being light-weight, it is extremely durable in all seasons and can be made in a variety of textures and natural colors.</p>
    <?php
   
   if (have_posts()) {
        while (have_posts()){
        the_post();            
        $url = wp_get_attachment_url( get_post_thumbnail_id() );?>
        <a href="<?php echo get_permalink(); ?>">
            <img src="<?php echo $url;?>" alt="">
        </a>
        <?php wp_reset_query();
        }
    }

    ?>
</div>










<?php get_footer();?>