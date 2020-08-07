<?php

/**
 * NameOfBlock block for the home page
 * 
 */

 $className = 'whats-inside';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

 $sectionTitle = get_field('section_title');
 $extraImage = get_field('extra_image')['sizes']['large'];


 ?>


<div class="container relative mx-auto text-white basic-sans <?php echo esc_attr($className) ?>">
    <h2 class="pb-20 text-3xl text-center"><?php echo $sectionTitle ?></h2>
    <div class="w-10/12 mx-auto grid-gap sm:grid sm:grid-cols-3 sm:grid-rows-3">
		<?php if ( have_rows( 'days' ) ): ?>
            <?php while ( have_rows( 'days' ) ): the_row(); ?>
            <?php $image = get_sub_field( 'icon'); ?>
            <div class="mb-8 text-center">
                <div class="flex justify-center mb-8">
                    <img src="<?php echo get_sub_field('icon')['sizes']['large'] ?>" class="border-none" alt="" width="65" height="64"/>
                </div>

                <h5 class="pb-2 text-base font-bold text-white">Day <?php echo wp_kses_post( get_sub_field( 'day_number' )) ?></h5>
                <h3 class="pb-4 text-2xl text-white"><?php echo wp_kses_post( get_sub_field( 'day_title' )) ?></h3>
                <p class="w-10/12 mx-auto text-sm basic-sans-thin"><?php echo wp_kses_post( get_sub_field( 'day_info' )) ?></p>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="sm:col-span-2 ">
            <img src="<?php echo $extraImage ?>" alt="" class="w-full mx-auto border-none sm:w-10/12" />
        </div>
    </div>
</div>