<?php

/**
 * NameOfBlock block for the home page
 * 
 */

 $className = 'video';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

 $videoSource = get_field('video_source');

 ?>


<div className="relative flex items-center mb-24 w-full <?php echo esc_attr($className) ?>">
<div class="w-1/2 mx-auto">
<?php echo $videoSource ?>
</div>

</div>