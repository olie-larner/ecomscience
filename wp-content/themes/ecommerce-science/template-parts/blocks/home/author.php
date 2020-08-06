<?php

/**
 * Author block for the home page
 * 
 */

 $className = 'author';

 if(!empty($block['className'])) {
     $className .= ' ' . $block['className'];
 }

 if(!empty($block['align'])){
     $className .= ' align' . $block['align'];
 }

$authorName = get_field('author_name');
$authorCompany = get_field('author_company');
$aboutAuthor = get_field('about_author');
$authorImage = get_field('author_image');

?>

<div class="relative w-full pb-24 text-white basic-sans <?php echo esc_attr($className) ?>">

      <div class="container max-w-screen-lg mx-auto">
        <h2 class="pb-10 text-3xl text-center text-white">Course author</h2>

       
          <div class="relative w-64 mx-auto rounded-full" >
            <img src="<?php echo $authorImage['sizes']['large'] ?>" alt="" class="object-cover w-full" />
          </div>

          <div class="relative pt-8 text-center" >
            <h4 class="pb-6 text-xl font-bold">
              <?php echo $authorName ?>
              <span class="basic-sans-thin"><?php echo $authorCompany ?></span>
            </h4>
            <p class="w-11/12 mx-auto basic-sans-thin">
            <?php echo $aboutAuthor ?>
            </p>
          </div>
      </div>
    </div>