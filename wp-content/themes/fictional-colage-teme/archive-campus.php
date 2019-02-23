<?php

get_header();

pageBanner(array(
    'title' => 'Our Campuses',
    'subtitle' => 'We have several campuses place on this side of city.'
));
?>
    <div class="container container--narrow page-section">
        <div class="acf-map">

            <?php
            while (have_posts()){
                the_post();
                $mapLocation = get_field('map_location');
                ?>
                <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>"></div>
            <?php } ?>


        </div>
    </div>

<?php get_footer();

?>