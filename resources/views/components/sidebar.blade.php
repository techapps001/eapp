<aside class="sidebar {{ empty($company_settings['site_transparent']) || $company_settings['site_transparent'] == 'on' ? 'transprent-bg' : '' }}">
    <button type="button" class="sidebar-close-btn !mt-4">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>

    {{-- Logo --}}
    <div>
        <a href="{{ route('home') }}" class="sidebar-logo">
            <img src="{{ get_file(sidebar_logo()) }}{{ '?' . time() }}" alt="site logo" class="light-logo">
            <img src="{{ get_file(sidebar_logo()) }}{{ '?' . time() }}" alt="site logo" class="dark-logo">
            <img src="{{ get_file(sidebar_logo()) }}{{ '?' . time() }}" alt="site logo" class="logo-icon">
        </a>
    </div>

    {{-- Search Bar --}}
    <div class="px-3 py-4">
        <div class="search-container relative">
            <i class="ti ti-search absolute left-3 top-2.5 text-gray-500"></i>
            <input
                type="text"
                class="form-control form-control-sm sidebar-search-input search-input pl-10 w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm"
                placeholder="{{ __('Search...') }}"
                aria-label="Search" />
        </div>
    </div>

    {{-- Menu Area --}}
    <div class="sidebar-menu-area">
        @if(!empty($company_settings['category_wise_sidemenu']) && $company_settings['category_wise_sidemenu'] == 'on')
            {{-- If using tab-based category sidemenu --}}
            <div class="tab-container">
                <div class="tab-sidemenu">
                    <ul class="dash-tab-link nav flex-column" role="tablist" id="dash-layout-submenus">
                        {{-- Dynamically generated tab links will go here --}}
                    </ul>
                </div>
                <div class="tab-link">
                    <div class="navbar-content">
                        <div class="tab-content" id="dash-layout-tab">
                            {{-- Tab content here --}}
                        </div>
                        <ul class="sidebar-menu" id="sidebar-menu">
                            {!! getMenu() !!}
                            @stack('custom_side_menu')
                        </ul>
                    </div>
                </div>
            </div>
        @else
            {{-- Default single menu structure --}}
            <ul class="sidebar-menu" id="sidebar-menu">
                {!! getMenu() !!}
                @stack('custom_side_menu')
            </ul>
        @endif
    </div>
</aside>
