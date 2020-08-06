<?php

/**
 * Hero block for the home page
 * 
 */

 $className = 'hero';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

 $titleLight = get_field('title_light');
 $titleBold = get_field('title_bold');
 $notified = get_field('notified');
 $formButtonPlaceholder = get_field('formButtonPlaceholder');
 $formButtonCopy = get_field('formButtonCopy');

 ?>

<div class="w-full py-16 sm:py-40 basic-sans <?php echo esc_attr($className) ?>">
      <div class="w-11/12 mx-auto text-center sm:w-8/12">
        <h3 class="mb-4 text-5xl font-bold leading-tight text-white sm:leading-normal basic-sans">
          <span class="basic-sans-thin"><?php echo $titleLight ?></span>
          <?php echo $titleBold ?>
        </h3>
        <p class="w-full mx-auto text-2xl text-white sm:w-8/12 basic-sans-thin">
          <?php echo $subheading ?>
        </p>

        <h5 class="pb-6 mt-32 text-xl font-bold text-white sm:mt-16 basic-sans">
        <?php echo $notified ?>
        </h5>
        <form>
          <div class="relative flex flex-col w-10/12 mx-auto sm:flex-row sm:w-3/6">
            <input
              class="w-full py-2 mb-4 text-center bg-white bg-opacity-25 rounded-full sm:pl-3 sm:text-left sm:mb-0"
              placeholder="<?php echo $formButtonPlaceholder ?>"
            ></input>
            <button class="relative right-0 px-6 py-2 text-center text-white bg-black rounded-full sm:absolute">
            <?php echo $formButtonCopy ?>
            </button>
          </div>
        </form>
      </div>
</div>