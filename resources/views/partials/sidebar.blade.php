<nav class="bg-white dark:bg-gray-900 {{ empty($company_settings['site_transparent']) || $company_settings['site_transparent'] == 'on' ? 'bg-opacity-60 backdrop-blur' : '' }} w-64 min-h-screen shadow-lg">
    <div class="flex flex-col h-full">
        <div class="flex items-center justify-center h-20 border-b border-gray-200 dark:border-gray-700">
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <img src="{{ get_file(sidebar_logo()) }}{{ '?' . time() }}" alt="" class="h-10 w-auto" />
            </a>
        </div>
        {{-- sidebar search --}}
        <div class="px-4 py-3">
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                    <i class="ti ti-search"></i>
                </span>
                <input type="text"
                    class="block w-full pl-10 pr-3 py-2 text-sm border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-200"
                    placeholder="{{ __('Search...') }}" aria-label="Search" />
            </div>
        </div>
        @if(!empty($company_settings['category_wise_sidemenu']) && $company_settings['category_wise_sidemenu'] == 'on')
          <div class="flex flex-col flex-1">
            <div class="border-b border-gray-200 dark:border-gray-700">
              <ul class="flex flex-col" role="tablist" id="dash-layout-submenus">
              </ul>
            </div>
            <div class="flex-1 overflow-y-auto">
              <div>
                <div id="dash-layout-tab"></div>
                <ul class="space-y-1 mt-4">
                    {!! getMenu() !!}
                    @stack('custom_side_menu')
                </ul>
              </div>
            </div>
          </div>
        @else
          <div class="flex-1 overflow-y-auto">
              <ul class="space-y-1 mt-4">
                  {!! getMenu() !!}
                  @stack('custom_side_menu')
              </ul>
          </div>
        @endif
    </div>
</nav>
