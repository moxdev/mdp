

<div class="highlight-box">

  <?php if( $page_link ): ?>

    <a href="<?php echo esc_url( $page_link ); ?>">

  <?php endif;

  if($img): ?>

    <img src="<?php echo esc_url( $img['sizes']['home-highlight'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>">

  <?php endif;

  if( $link_text ): ?>

    <span><?php echo esc_html( $link_text ); ?></span>

  <?php endif;

  if( $page_link ): ?>

    </a>

  <?php endif; ?>

</div><!-- highlight-box -->















<div class="home-highlight">
  <?php if($url): ?><a href="<?php echo $url; ?>"><?php endif;
  if($img): ?><img src="<?php echo $img['sizes']['home-highlight']; ?>" alt="<?php echo $img['alt']; ?>"><?php endif;
  if($linkTxt): ?><span><?php echo $linkTxt; ?></span><?php endif; echo "\n";
  if($url): ?></a><?php endif; ?>
</div>

add_image_size('home-highlight', 410, 275, true);

