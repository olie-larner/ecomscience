<?php

/**
 * Contact Us block for the home page
 * 
 */

 $className = 'contact-us';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

$mainIntro = get_field('contact_main_intro');
$subHeading = get_field('contact_sub_heading');
$buttonCopy = get_field('contact_button_copy');

 ?>

<div class="container relative py-40 mx-auto text-white basic-sans">
      <div class="flex flex-col w-11/12 mx-auto md:flex-row">
        <div class="w-11/12 mx-auto md:mx-0 md:w-1/2">
          <h2 class="pb-10 text-4xl font-bold leading-tight text-center text-white md:pb-20 md:text-left">
            <?php echo $mainIntro ?>
          </h2>
        </div>

        <div class="w-11/12 mx-auto text-center md:mx-0 md:w-1/2 md:text-left">
          <p class="pb-10 text-2xl leading-tight"><?php echo $subHeading ?></p>
          <button type="button"><?php echo $buttonCopy ?></button>
        </div>
      </div>
    </div>