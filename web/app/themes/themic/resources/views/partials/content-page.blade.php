{{-- @php(the_content())

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
 --}}

<?php  

$isFrontPage = is_front_page();

$query = new WP_Query( 
  [ 
    'post_type' => 'post',
    'meta_key' => 'visible_in_home_page',
    'meta_value' => true 
  ]
);

if ($isFrontPage && $query->have_posts()) :
?>

<h3 class="text-3xl font-semibold text-slate-500 text-center mb-16">Nos recommandations</h3>


<div class="mx-auto max-w-[90vw] front-page__posts">
  <?php

    while ($query->have_posts()) : 
      
      $query->the_post(); ?>

      @include('partials.components.card')

  <?php endwhile;
  endif; ?>
</div>






    
