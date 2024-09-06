<header class="header px-10 py-6 bg-white top-0">
    <div class="align-items-center justify-content-between d-flex">
        @if ($headerLogo)
            <div class="">
                <i class="icon-bars me-9 d-xl-none header-toggle-js header__open-menu-button"></i>
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

        @if ($hasPrimaryMenu && $primaryMenus)
            <nav class="header__nav  d-xl-block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! $primaryMenus !!}
                <i class="icon-close class d-xl-none  header__nav__close-button text-white header-toggle-js"></i>
            </nav>
        @endif
    </div>
</header>
