<header class="header">

    @if ($headerLogo)
        <a class="" href="{{ home_url('/') }}">
            <img class="header__brand" src="{{ $headerLogo['url'] }}" alt="{{ $headerLogo['alt'] }}">
        </a>
    @endif
    @if ($hasPrimaryMenu)
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            @if ($hasPrimaryMenu && $primaryMenus)
                <ul class="d-flex d-none d-xl-block ">
                    @foreach ($primaryMenus as $primary)
                    <li class="">{{ $primary['title']< }}/li>

                  
                    @endforeach
            @endif
        </nav>
    @endif
</header>
