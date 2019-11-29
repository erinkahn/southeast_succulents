
<?php
/*
* Template Name: Plants Taxonomy
*/
?>

<?php get_header();?>


<div class="locations-page-container">

    <h2 class="text-center greentwo uppercase averia">All <?php echo single_cat_title();?>  Plants</h2>

    <ul>
    <?php
    if (have_posts()):
        while (have_posts() ):
            the_post();
            ?>
            <li>
                <a href="<?php echo get_permalink();?>">
                    <?php echo the_post_thumbnail();?>
                    <div class="text-center averia greentwo"><?php echo the_title();?></div>
                </a>
            </li>
            <?php
        endwhile;
    endif;
    ?>
    
    </ul>


</div>


<?php get_footer();?>