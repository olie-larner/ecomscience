<?php

/**
 * Hero block for the home page
 * 
 */

 $className = 'post-hero';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

 $image = get_field('post_hero_image');

 ?>

<div class="w-full py-16 sm:py-40 basic-sans <?php echo esc_attr($className) ?>">
      <div class="w-11/12 mx-auto text-center">
            <img src="<?php echo $image['sizes']['large'] ?>" alt="<?php $image['altText'] ?>" />
      </div>
</div>