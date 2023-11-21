<div class="page-header">
  @php
   $size = 'slider';

  @endphp

  <div class="banner-frontPage">
    <p>Test</p>
    @php
     echo wp_get_attachment_image(get_field("front_page_banner"), $size);
    @endphp
  </div>

 {{-- <img src="@asset('images/banner.jpg')" class="banner" alt="banner">  
  {{-- <h1>{!! $title !!}</h1>--}}



</div>
