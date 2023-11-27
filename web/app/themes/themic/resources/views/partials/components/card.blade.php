<div>
  <a href="<?php echo get_post_permalink(get_post()->ID) ?>">
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
      <img class="card__img" src="@php echo get_the_post_thumbnail_url() @endphp" alt="article">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">
          <?php echo the_title(); ?>
        </div>
        <p class="text-gray-700 text-base">
          <?php echo get_the_content(); ?>
        </p>
      </div>
    </div>
  </a>
  </div>

