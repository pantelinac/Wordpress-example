<?php

get_header();

pageBanner(array(
        'title' => 'All Events',
        'subtitle' => 'See what is happening in our world.'
));
?>



    <div class="container container--narrow page-section">
        <?php
        while (have_posts()){
            the_post();
            get_template_part('template-parts/content-event');
        }
        echo paginate_links();
        ?>
        <hr class="section-break">
        <p>Looking for past events? <a href="<?php echo site_url('/past-events'); ?>">Check our archive.</a></p>

    </div>

<?php get_footer();

?>