<?php
/**
 * Homepage carousel.
 *
 *
 * @package MD_Partitions
 */

function md_partitions_home_carousel() {
    if( is_page_template('front-page.php') ) {
        if( function_exists('get_field') ) {

            $addCarousel = get_field('add_image_carousel');

            if( $addCarousel == 'Yes' && have_rows('slides') ): ?>

                <div id="home-carousel" class="carousel-type-1">
                    <ul>

                    <?php while ( have_rows('slides') ) : the_row(); ?>

                        <li>
                            <?php $text = get_sub_field('slide_caption');
                            $imageArr = get_sub_field('slide_image');
                            $image = wp_get_attachment_image_src($imageArr[id], 'front-page-slide-1'); ?>
                            <img src="<?php echo $image[0] ?>" alt="<?php echo $imageArr[title]; ?>">
                            <span><?php echo $text; ?></span>
                        </li>
                    <?php endwhile; ?>

                    </ul>

                    <?php $rows = get_field('slides');
                    $rowCount = count($rows); ?>

                    <ol class="carousel-nav">
                        <?php for ($i = 1; $i <= $rowCount; $i++) { ?>
                            <li><a href="#"><?php echo $i; ?></a></li>
                        <?php } ?>
                    </ol>
                </div>

            <?php endif;
        }
    }
}


