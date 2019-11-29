
<?php
/*
* Template Name: Weddings + Events
*/
?>

<?php get_header();?>


<div class="weddings-events">

    <h2 class="text-center uppercase greentwo averia">Weddings & Events</h2>
    <p class="averia greentwo text-center">Have an event coming up? Maybe you're getting married. See what we can offer to add some natural beauty to your special day.</p>

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

    <a class="book averia" href="mailto:kurt@southeastsucculents.com?subject=Book an Event">Book Us</a>

</div>













<?php get_footer();?>