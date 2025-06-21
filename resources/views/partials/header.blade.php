<header
    class="{{ empty($company_settings['site_transparent']) || $company_settings['site_transparent'] == 'on' ? 'bg-transparent' : 'bg-white shadow' }} w-full">
    <div class="flex items-center justify-between px-4 py-2">
        <div class="flex items-center">
            <ul class="flex items-center space-x-2">
                <li>
                    <a href="#!" id="mobile-collapse" class="flex items-center">
                        <div class="hamburger hamburger--arrowturn">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="relative">
                    <a class="flex items-center space-x-2 cursor-pointer" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        @if (!empty(Auth::user()->avatar))
                            <span class="inline-block w-8 h-8 rounded-full overflow-hidden border-2 border-primary">
                                <img alt="#"
                                    src="{{ check_file(Auth::user()->avatar) ? get_file(Auth::user()->avatar) : '' }}"
                                    class="object-cover w-full h-full">
                            </span>
                        @else
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-primary text-white font-bold">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </span>
                        @endif
                        <span class="hidden md:inline-block ms-2">{{ Auth::user()->name }}</span>
                        <i class="ti ti-chevron-down drp-arrow nocolor hidden md:inline-block"></i>
                    </a>
                    <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded shadow-lg z-50 hidden group-hover:block">
                        @permission('user profile manage')
                            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">
                                <i class="ti ti-user"></i>
                                <span>{{ __('Profile') }}</span>
                            </a>
                        @endpermission
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                            class="block px-4 py-2 hover:bg-gray-100">
                            <i class="ti ti-power"></i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class="flex items-center space-x-2">
            <ul class="flex items-center space-x-2">
                @impersonating($guard = null)
                    <li>
                        <a class="btn btn-danger btn-sm me-3 bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700" href="{{ route('exit.company') }}">
                            <i class="ti ti-ban"></i>
                            {{ __('Exit Company Login') }}
                        </a>
                    </li>
                @endImpersonating
                @permission('user chat manage')
                    @php
                        $unseenCounter = App\Models\ChMessage::where('to_id', Auth::user()->id)
                            ->where('seen', 0)
                            ->count();
                    @endphp
                    <li>
                        <a class="relative flex items-center" href="{{ url('/chatify') }}">
                            <i class="ti ti-message-circle"></i>
                            @if($unseenCounter)
                                <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs rounded-full px-1.5 py-0.5">
                                    {{ $unseenCounter }}
                                </span>
                            @endif
                        </a>
                    </li>
                @endpermission
                @permission('workspace create')
                    @if (PlanCheck('Workspace', Auth::user()->id) == true)
                        <li>
                            <a href="#!" class="flex items-center space-x-1 px-3 py-1 rounded bg-primary text-white hover:bg-primary-dark"
                                data-url="{{ route('workspace.create') }}" data-ajax-popup="true" data-size="lg"
                                data-title="{{ __('Create New Workspace') }}">
                                <i class="ti ti-circle-plus"></i>
                                <span class="hidden md:inline-block">{{ __('Create Workspace') }}</span>
                            </a>
                        </li>
                    @endif
                @endpermission
                @permission('workspace manage')
                    <li class="relative">
                        <a class="flex items-center space-x-1 px-3 py-1 rounded bg-gray-100 hover:bg-gray-200 cursor-pointer"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-apps"></i>
                            <span class="hidden md:inline-block">{{ Auth::user()->ActiveWorkspaceName() }}</span>
                            <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                        </a>
                        <div class="dropdown-menu absolute right-0 mt-2 w-64 bg-white rounded shadow-lg z-50 hidden group-hover:block">
                            @foreach (getWorkspace() as $workspace)
                                @if ($workspace->id == getActiveWorkSpace())
                                    <div class="flex justify-between items-center px-4 py-2">
                                        <a href="#" class="flex items-center space-x-2">
                                            <i class="ti ti-checks text-primary"></i>
                                            <span>{{ $workspace->name }}</span>
                                            @if ($workspace->created_by == Auth::user()->id)
                                                <span class="badge bg-gray-800 text-white px-2 py-0.5 rounded text-xs">
                                                    {{ Auth::user()->roles->first()->name }}</span>
                                            @else
                                                <span class="badge bg-gray-800 text-white px-2 py-0.5 rounded text-xs"> {{ __('Shared') }}</span>
                                            @endif
                                        </a>
                                        @if ($workspace->created_by == Auth::user()->id)
                                            @permission('workspace edit')
                                                <a data-url="{{ route('workspace.edit', $workspace->id) }}"
                                                    class="ml-3 text-green-600 hover:text-green-800"
                                                    data-ajax-popup="true"
                                                    data-title="{{ __('Edit Workspace Name') }}">
                                                    <i class="ti ti-pencil"></i>
                                                </a>
                                            @endpermission
                                        @endif
                                    </div>
                                @else
                                    @php
                                        $route = ($workspace->is_disable == 1) ?  route('workspace.change', $workspace->id) : '#';
                                    @endphp
                                    <div class="flex justify-between items-center px-4 py-2">
                                        <a href="{{ $route }}" class="flex items-center space-x-2">
                                            <span>{{ $workspace->name }}</span>
                                            @if ($workspace->created_by == Auth::user()->id)
                                                <span class="badge bg-gray-800 text-white px-2 py-0.5 rounded text-xs"> {{ Auth::user()->roles->first()->name }}</span>
                                            @else
                                                <span class="badge bg-gray-800 text-white px-2 py-0.5 rounded text-xs"> {{ __('Shared') }}</span>
                                            @endif
                                        </a>
                                        @if ($workspace->is_disable == 0)
                                            <span class="ml-3 text-gray-400"><i class="ti ti-lock"></i></span>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                            @if (getWorkspace()->count() > 1)
                                @permission('workspace delete')
                                    <hr class="my-2 border-gray-200" />
                                    <a href="#!" data-url="{{route('company.info', Auth::user()->id)}}" class="block px-4 py-2 hover:bg-gray-100" data-ajax-popup="true" data-size="lg" data-title="{{__('Workspace Info')}}">
                                        <i class="ti ti-circle-x"></i>
                                        <span>{{ __('View') }}</span>
                                    </a>
                                    <hr class="my-2 border-gray-200" />
                                    <form id="remove-workspace-form"
                                        action="{{ route('workspace.destroy', getActiveWorkSpace()) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#!" class="block px-4 py-2 hover:bg-gray-100 text-red-600 remove_workspace">
                                            <i class="ti ti-circle-x"></i>
                                            <span>{{ __('Remove') }}</span>
                                            <br>
                                            <small class="text-red-500">{{ __('Active Workspace Will Consider') }}</small>
                                        </a>
                                    </form>
                                @endpermission
                            @endif
                        </div>
                    </li>
                @endpermission
                <li class="relative">
                    <a class="flex items-center space-x-1 px-3 py-1 rounded bg-gray-100 hover:bg-gray-200 cursor-pointer"
                        data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-world nocolor"></i>
                        <span class="hidden md:inline-block">{{ Str::upper(getActiveLanguage()) }}</span>
                        <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                    </a>
                    <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded shadow-lg z-50 hidden group-hover:block">
                        @foreach (languages() as $key => $language)
                            <a href="{{ route('lang.change', $key) }}"
                                class="block px-4 py-2 hover:bg-gray-100 @if ($key == getActiveLanguage()) text-red-600 @endif">
                                <span>{{ Str::ucfirst($language) }}</span>
                            </a>
                        @endforeach
                        @if (Auth::user()->type == 'super admin')
                            @permission('language create')
                                <a href="#" data-url="{{ route('create.language') }}"
                                    class="block px-4 py-2 border-t pt-3 text-primary hover:bg-gray-100"
                                    data-ajax-popup="true"
                                    data-title="{{ __('Create New Language') }}">
                                    <span>{{ __('Create Language') }}</span>
                                </a>
                            @endpermission
                            @permission('language manage')
                                <a href="{{ route('lang.index', [Auth::user()->lang]) }}"
                                    class="block px-4 py-2 pt-3 text-primary hover:bg-gray-100">
                                    <span>{{ __('Manage Languages') }}</span>
                                </a>
                            @endpermission
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
