<?php

/**
 * Pricing block for the home page
 * 
 */

 $className = 'pricing';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

$title = get_field('pricing_title');


 ?>


<div class="relative w-full mx-auto text-white basic-sans">
      <h2 class="pb-20 text-4xl font-bold text-center text-white"><?php echo $title ?></h2>
      <div class="w-full mx-auto grid-gap md:grid md:gap-0 md:grid-cols-3 ">

      <?php if ( have_rows( 'price_option' ) ): ?>
            <?php while ( have_rows( 'price_option' ) ): the_row(); ?>
            <?php $recommended = get_sub_field('recommended'); 
                $recText = ' ';
                $recColours = ' ';
                if($recommended == true){
                    $recText = 'block';
                    $recColours = 'text-brandPurple';
                } else {
                    $recText = 'hidden';
                    $recColours = 'text-black';
                }
            ?>
      <div class="py-6 mb-10 bg-white rounded-md md:mb-0">
      <div class="pb-8 text-center">
        <div class="h-8">
          <p class="text-brandPurple uppercase text-xs font-bold <?php echo $recText ?> ">
            Recommended
          </p>
        </div>
        <div class="mb-4 text-2xl font-bold text-black">
          <p><?php echo wp_kses_post( get_sub_field( 'title' )) ?></p>
        </div>
        <div class="mb-6 text-sm leading-tight text-gray-700">
          <p class="w-9/12 p-0 m-0 mx-auto"><?php echo wp_kses_post( get_sub_field( 'info ' )) ?></p>
        </div>
        <div
          class="text-4xl leading-tight font-bold <?php echo $recColours ?>">
          &pound;<?php echo wp_kses_post( get_sub_field( 'price' )) ?>
        </div>
        <p class="pb-12 text-xs text-gray-600"><?php echo wp_kses_post( get_sub_field( 'billing_frequency' )) ?></p>

        <button copy="Order" type="button">Order</button>
      </div>

      <div class="px-6 pt-6 border-t-2 border-b-0 border-l-0 border-r-0 border-gray-400">
        <p class="pb-2 text-sm font-bold text-center text-black">
          What's included
        </p>
        <ul>
        <?php if ( have_rows( 'features' ) ): ?>
            <?php while ( have_rows( 'features' ) ): the_row(); ?>
              <li class="pb-2 text-xs font-bold text-black" key={i}>
              <?php echo wp_kses_post( get_sub_field( 'feature' )) ?>
              </li>
              <?php endwhile; ?>
        <?php endif; ?>
        </ul>
      </div>
    </div>

    <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>