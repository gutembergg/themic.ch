<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
   {{--  {!! $siteName !!} --}}
  </a>
{{--   <ul class="flex">
    <li class="mr-6">
      <a class="text-blue-500 hover:text-blue-800" href="#">Active</a>
    </li>
    <li class="mr-6">
      <a class="text-blue-500 hover:text-blue-800" href="#">Link</a>
    </li>
    <li class="mr-6">
      <a class="text-blue-500 hover:text-blue-800" href="#">Link</a>
    </li>
    <li class="mr-6">
      <a class="text-gray-400 cursor-not-allowed" href="#">Disabled</a>
    </li>
  </ul>
 --}}
  @if (has_nav_menu('primary_navigation'))
    <nav class="flex items-center justify-between flex-wrap bg-white max-w-[92vw] p-6 font-semibold" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      <div class="flex items-center flex-shrink-0 text-white mr-6">
        <img src="@asset('images/logo_google.png')" alt="logo">
      </div>
      <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
      </div>
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex', 'echo' => false]) !!}
    </nav>
  @endif
</header>
