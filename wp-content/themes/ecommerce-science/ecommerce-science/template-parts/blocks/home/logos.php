<?php

/**
 * NameOfBlock block for the home page
 * 
 */

 $className = 'logos';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

 $title_logos = get_field('title_logos');
 $desktopImage = get_field('desktop_image');
 $desktopClass = ' ';
 $require = get_field('require_a_mobile_image');
 $mobileImage = get_field('mobile_image');
 $mobileClass = ' ';

if($require == true){ 
$desktopClass = "hidden md:block"; 
$mobileClass = "block md:hidden";
} else { 
$desktopClass = "block";
$mobileClass = "hidden";
}
 ?>


<div class="relative w-10/12 h-auto max-w-screen-xl py-16 mx-auto <?php echo esc_attr($class) ?>" >
    <p class="pb-6 text-2xl text-center text-white text-bold basic-sans">
        <?php echo $title_logos ?>
    </p>
    <img src="<?php echo $desktopImage['sizes']['large'] ?>" alt="" class="<?php echo $desktopClass ?> w-auto border-none max-w-full" />
    <img
        src="<?php echo $mobileImage['sizes']['large'] ?>"
        alt=""
        class="block w-auto max-w-full border-none md:hidden"
    />
</div>

