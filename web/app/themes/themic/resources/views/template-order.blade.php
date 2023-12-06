{{--
  Template Name: Passer commande
--}}

@php
  $query = new WP_Query( 
    [ 
      'post_type' => 'page',
      'post_name__in' => ['Ventes Directes Speciales', 'Commandes en gros'],
      'order' => 'ASC',
    ]
);

@endphp

@extends('layouts.app')

@section('content')

<div class="pages__order">
 <div class="pages__order-header">
  <div class="pages__order-title">Passer une commande</div>

  <div class="pages__order-description">Vous avez la possibilité de directement passer commande chez nous par Internet. 
      Pour cela, veuillez choisir votre catégorie :
  </div>
 </div>

  <div class="pages__order-content">
    @while($query->have_posts()) @php($query->the_post())

    <div>
    
      <div class="flex justify-center items-center gap-8">
        @include('partials.components.default-card')
      </div>
    </div>
    @endwhile
  </div>

</div>
@endsection
