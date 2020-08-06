<?php

/**
 * Hero block for the home page
 * 
 */

 $className = 'header';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

$tagLine = get_field('tag_line');
$buttonCopy = get_field('button_copy');

 ?>

<div class="relative top-0 w-full py-8">
  <div class="container mx-auto">
    <div class="relative flex items-center justify-between w-11/12 mx-auto sm:w-10/12">
      <img style="margin-left: 8%"/>
      <div class="flex items-center">
        <p class="pr-10 text-white text-bold basic-sans">
        <?php echo $tagLine ?>
        </p>
        <button type="button" ><?php echo $buttonCopy ?></button>
      </div>
    </div>
  </div>
</div>