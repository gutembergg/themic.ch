<header>
  <a class="brand" href="{{ home_url('/') }}">
   {{--  {!! $siteName !!} --}}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="thePrimaryNavigation flex items-center justify-between flex-wrap bg-white w-full 
      py-6 font-semibold shadow-xl border-solid border-2" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">

      <div class="z-10 flex items-center flex-shrink-0 text-white ml-14">
        <img src="@asset('images/logo_google.png')" alt="logo">
      </div>
      <div class="z-10 flex self-end lg:hidden mr-14">
        <button class="btn-toggle-mobile flex items-center px-3 py-2 border rounded text-slate-300 
          border-slate-400 hover:text-slate-200 hover:border-slate-300">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
      </div>
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'theNavigationWrapper mr-14', 'menu_class' => 'nav flex theMobileNavigation', 'echo' => false]) !!}
    </nav> 
  @endif
</header>




