<?php

/**
 * NameOfBlock block for the home page
 * 
 */

 $className = 'slide-hero';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

 // $nameOfVar = get_field('name_of_field');


 ?>

<div class="<?php echo esc_attr($className) ?>">
<!-- 

CONTENT GOES HERE

-->

</div>