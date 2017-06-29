<?php
/**
 * Creates the Products Section for Drill Pages
 *
 *
 * @package MD_Partitions
 */

function md_partitions_product_section() {

  if ( function_exists( 'get_field' ) ) {

    $add_section = get_field( 'add_a_product_section' );

    if ( $add_section ): ?>

      <section class="product-section">
        <div class="product-section-wrapper">

          <?php

          if( have_rows('create_a_product_section') ):

              while ( have_rows('create_a_product_section') ) : the_row();

                  if( get_row_layout() == 'product_section' ):

                    $header   = get_sub_field('section_header');

                     ?>

                     <h2 class="section-header"><?php echo esc_html( $header ); ?></h2>

                     <?php if( have_rows('product') ): ?>

                         <div class="products">

                         <?php while( have_rows('product') ): the_row();

                             $img   = get_sub_field('image');
                             $title = get_sub_field('title');
                             $price = get_sub_field('price');
                             $desc  = get_sub_field('description');

                             ?>

                             <div class="product-wrapper">

                                 <?php if( !empty($img) ) : ?>

                                  <div class="image-wrapper">

                                    <img src="<?php echo esc_url( $img['sizes']['product-image'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>">

                                  </div>

                                 <?php endif; ?>

                                 <?php if( !empty($title) ) : ?>

                                  <h3 class="product-header"><?php echo esc_html( $title ); ?> <?php if($price): ?><span class="price"><?php echo esc_html( $price ); ?></span><?php endif; ?></h3>

                                 <?php endif; ?>

                                 <?php if( !empty($desc) ) : ?>

                                  <div class="description">

                                    <?php echo $desc; ?>

                                  </div>

                                 <?php endif; ?>

                             </div><!-- product-wrapper -->

                         <?php endwhile; ?>

                         </div><!-- products -->

                     <?php endif;

                  elseif( get_row_layout() == 'call_out_section' ):

                    $img     = get_sub_field('image');
                    $content = get_sub_field('call_out_content');

                    if ( $img ): ?>

                      <div class="callout-section">
                        <div class="callout-wrapper">
                          <div class="image-wrapper">

                            <img src="<?php echo esc_url( $img['sizes']['callout-image'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>">
                          </div>
                          <div class="content-wrapper">
                            <?php echo $content; ?>
                          </div>
                        </div>
                      </div>

                    <?php endif;

                  endif;

              endwhile;

          else :

              echo '<h2> There no product sections, please add sections in WordPress</h2>';

          endif;

          ?>

        </div>
      </section>

    <?php endif;
  }
}