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

$posts = $query->posts;
@endphp


@extends('layouts.app')

@section('content')

@foreach ($posts as $post)
    <div> <?php $post ?></div>

@endforeach


 {{--  @while($query->have_posts()) @php(the_post())

 
    @include('partials.page-header')
    @include('partials.content-page')
    <div class="catalog">
      <h1>Catalogue2222</h1>
    </div>
    
  @endwhile --}}
@endsection
