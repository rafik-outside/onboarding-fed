<header class="header px-10 py-6 bg-white top-0">
    <div class="align-items-center justify-content-between d-flex">
        @if ($headerLogo)
            <div class="">
                <i class="icon-bars me-9 d-xl-none"></i>
                <a href="{{ home_url('/') }}" title="{{ $headerLogo['alt'] }}">
                    <img class="header__brand" src="{{ $headerLogo['url'] }}" alt="{{ $headerLogo['alt'] }}">
                </a>
            </div>
        @endif
        @if ($cta)
            @include('components.link-component', [
                'cta' => $cta,
                'a_class' => 'btn-outline-space d-xl-none d-md-block d-none btn-outline-space--size-medium',
            ])
        @endif

        @if ($hasPrimaryMenu)
            <nav class="nav-primary d-none  d-xl-block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                @if ($hasPrimaryMenu && $primaryMenus)
                    <ul class="d-flex header__nav-menu">
                        @foreach ($primaryMenus as $primary)
                            @include('sections._menu-component', [
                                'primary' => $primary,
                                'external_link' => false,
                                'a_class' => 'me-40 header__na',
                            ])
                        @endforeach
                @endif
            </nav>
        @endif
    </div>
</header>
