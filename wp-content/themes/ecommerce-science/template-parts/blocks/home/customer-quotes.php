<?php

/**
 * Customer Quotes block for the home page
 * 
 */

 $className = 'customer-quotes';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

$title = get_field('quotes_section_title');

 ?>

<div class="container relative py-40 mx-auto text-white basic-sans">
    <h2 class="pb-20 text-4xl font-bold text-center">
        <?php echo $title ?>
    </h2>
    <div class="w-10/12 mx-auto grid-gap sm:grid sm:gap-4 sm:grid-cols-2 ">
        <?php if ( have_rows( 'quotes' ) ): ?>
            <?php while ( have_rows( 'quotes' ) ): the_row(); ?>
            <div class="text-center">
                <p>"<?php echo wp_kses_post( get_sub_field( 'quote' )) ?>"</p>
                <p class="pt-4 font-bold">
                <?php echo wp_kses_post( get_sub_field( 'author' )) ?>, <?php echo wp_kses_post( get_sub_field( 'company' )) ?>
                </p>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>