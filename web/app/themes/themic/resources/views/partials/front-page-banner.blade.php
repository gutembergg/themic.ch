<div id="banner" class="page-header">
    @php
     $size = 'slider';
    @endphp
  
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide banner-frontPage__image">
        <div class="banner-frontPage__content theMobileNavigation__content text-5xl">
          @php
           echo get_field("front_page_banner_text")
          @endphp
        </div>
        @php echo wp_get_attachment_image(get_field("front_page_banner"), $size, false,  array( "class" => "img-desktop" )); @endphp
        @php echo wp_get_attachment_image(get_field("front_page_banner_mobile_image"), 'large', false,  array( "class" => "img-mobile" )); @endphp
      </div>
      <div class="swiper-slide banner-frontPage__image">
        <div class="banner-frontPage__content theMobileNavigation__content text-5xl">
          @php
           echo get_field("front_page_banner_text_2")
          @endphp
        </div>
        @php echo wp_get_attachment_image(get_field("front_page_banner_2"), $size, false, array( "class" => "img-desktop" )); @endphp
        @php echo wp_get_attachment_image(get_field("front_page_banner_mobile_image_2"), 'large', false,  array( "class" => "img-mobile" )); @endphp
      </div>
    </div>
  </div>
  
  
  </div>