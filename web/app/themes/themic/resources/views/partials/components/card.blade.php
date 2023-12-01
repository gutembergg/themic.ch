@php
    $postId = get_post()->ID;
    $postLink = '';
    $linkTarget = '';

    if(get_field('link_pdf')) {
      $postLink = get_field('link_pdf', $postId);
      $linkTarget = '_blank';
    } else {
      $postLink = get_post_permalink($postId);
    }
@endphp

<div>
  <a href="<?php echo $postLink ?>" target="<?php echo $linkTarget ?>">
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
      <img class="card__img" src="@php echo get_the_post_thumbnail_url() @endphp" alt="article">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">
          <?php echo the_title(); ?>
        </div>
        <p class="text-gray-700 text-base">
          <?php echo get_field('content', $postId); ?>
        </p>
      </div>
    </div>
  </a>
  </div>

