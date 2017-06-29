<div class="home-highlight">
  <?php if($url): ?><a href="<?php echo $url; ?>"><?php endif;
  if($img): ?><img src="<?php echo $img['sizes']['home-highlight']; ?>" alt="<?php echo $img['alt']; ?>"><?php endif;
  if($linkTxt): ?><span><?php echo $linkTxt; ?></span><?php endif; echo "\n";
  if($url): ?></a><?php endif; ?>
</div>

add_image_size('home-highlight', 410, 275, true);

