{{-- @php(the_content())

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
 --}}

<?php  

$query = new WP_Query( array( 'post_type' => 'post' ) );

if ($query->have_posts()) :
    
  while ($query->have_posts()) : 
    
    $query->the_post(); ?>

    <?php the_title(); ?>

<?php endwhile;
endif; ?>






    
