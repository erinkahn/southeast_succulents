
<?php
/*
* Template Name: Weddings + Events
*/
?>

<?php get_header();?>


<div class="weddings-events">

    <h1 class="text-center uppercase greentwo averia">Weddings & Events</h1>
    <p class="averia greentwo text-center">Have an event coming up? Maybe you're getting married. See what we can offer to add some natural beauty to your event.</p>

    <div class="event-pic">
        <ul>
            <?php
            if (have_posts()):
            while (have_posts() ):
            the_post();?>
                <li>
                    <?php echo the_post_thumbnail();?>
                </li>
            <?php
            endwhile;
            endif;
            ?>
         </ul>
    </div>

</div>













<?php get_footer();?>