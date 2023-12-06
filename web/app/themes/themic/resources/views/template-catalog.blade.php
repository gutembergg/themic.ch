{{--
  Template Name: Catalogue
--}}

@php
    $query = new WP_Query( 
  [ 
    'post_type' => 'post',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field' => 'name',
        'terms' => 'catalogue',
      ),
    ),
    
  ]
);

@endphp


@extends('layouts.app')

@section('content')


<?php
    if ($query->have_posts()) :
?>

<div class="catalog">
  <h1 class="catalog__title text-4xl font-semibold mb-10">Notre Catalogue</h1>

  <div class="mx-auto max-w-[90vw] grid__posts">
    @while($query->have_posts()) @php($query->the_post())

    @include('partials.components.card')
        
    @endwhile
  </div>

</div>

<?php
wp_reset_postdata();
  endif; 
?>

@endsection
