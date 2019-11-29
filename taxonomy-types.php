
<?php
/*
* Template Name: Garden Types Taxonomy
*/
?>

<?php get_header();?>



<div class="garden-types-page-container">

    <h1 class="text-center greentwo uppercase averia">All <?php echo single_cat_title();?>  Gardens</h1>

    <?php echo category_description();?>

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