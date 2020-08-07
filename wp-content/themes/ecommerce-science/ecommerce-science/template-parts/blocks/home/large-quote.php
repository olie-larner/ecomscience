<?php

/**
 * NameOfBlock block for the home page
 * 
 */

 $className = 'large-quote';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

 $largeQuote = get_field('large_quote');
 $quoteAuthor = get_field('large_quote_author');

 ?>



<div class="container relative pb-40 mx-auto text-white basic-sans <?php echo esc_attr($class) ?>">
      <div class="w-10/12 mx-auto">
        <p class="text-5xl leading-tight text-center">
          <?php echo $largeQuote ?>
        </p>
        <p class="pt-6 font-bold text-center"><?php echo $quoteAuthor ?></p>
      </div>
</div>