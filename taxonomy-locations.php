
<?php
/*
* Template Name: Plants Taxonomy
*/
?>

<?php get_header();?>


<div class="locations-page-container">

    <h1>All <?php echo single_cat_title();?>  Plants</h1>

    <ul>
    <?php
    if (have_posts()):
        while (have_posts() ):
            the_post();
            ?>
            <li>
                <h3>
                    <a href="<?php echo get_permalink();?>">
                        <?php echo the_title();?>
                    </a>
                </h3>
                <?php echo the_excerpt(); ?>
            </li>
            <?php
        endwhile;
    endif;
    ?>
    </ul>


</div>


<?php get_footer();?>