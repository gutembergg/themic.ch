@extends('layouts.app')


@section('content')

  @while(have_posts()) @php(the_post())
    @include('partials.front-page-banner')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
