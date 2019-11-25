
<?php
/*
* Template Name: Gardens
*/
?>

<?php get_header();?>


<div class="garden-types">

    <?php
        $gardens = get_terms( array(
            'taxonomy'   => 'types',
        ) );
    ?>

    <?php
        foreach($gardens as $garden){ ?>
            <a class="garden_type_link" href="<?php echo get_term_link($garden); ?>">
                <div class="type_garden">
                    <div class="title_garden">
                        <h2>
                            <?php echo $garden->name; ?> Gardens
                        </h2>
                    </div>
                </div>
            </a>
       <?php }

    ?>

</div>


<div class="all-gardens">
    <h2>All Gardens</h2>
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