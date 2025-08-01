@extends('layout.layout')

@php
        $title='Email';
        $subTitle = 'Components / Email';
        $script = '<script>
                // Table Header Checkbox checked all js Start
                $("#selectAll").on("change", function() {
                    $(".form-check .form-check-input").prop("checked", $(this).prop("checked"));

                    if ($(this).prop("checked")) {
                        $(".email-item").addClass("active");
                    } else {
                        $(".email-item").removeClass("active");
                    }
                });

                // Active Item with js
                $(".form-check .form-check-input").on("change", function() {
                    if ($(this).is(":checked")) {
                        $(this).closest(".email-item").addClass("active");
                    } else {
                        $(this).closest(".email-item").removeClass("active");
                    }
                });

                // Selected Checkbox count amount js Start
                $(".email-card .form-check-input").on("change", function() {
                    let selectedCount = $(".email-card .form-check-input:checked").length;

                    if (selectedCount > 0) {
                        $(".delete-button").removeClass("hidden");
                    } else {
                        $(".delete-button").addClass("hidden")
                    }
                });
                // Selected Checkbox count amount js End

                $(".delete-button").on("click", function() {
                    $(".email-item.active").addClass("hidden")
                });

                // Page Reload Js
                $(".reload-button").on("click", function() {
                    history.go(0);
                });

                // Starred Button js
                $(".starred-button").on("click", function() {
                    $(this).toggleClass("active")
                });
                </script>';
@endphp

@section('content')

        <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
            <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
                <div class="card h-full p-0 border-0">
                    <div class="card-body p-6">
                        <button type="button" class="btn bg-primary-600 hover:bg-primary-700 text-white dark:text-white text-sm btn-sm px-3 py-3 w-full rounded-lg flex items-center gap-2 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <iconify-icon icon="fa6-regular:square-plus" class="icon text-lg line-height-1"></iconify-icon>
                            Compose
                        </button>

                        <div class="mt-4">
                            <ul>
                                <li class="item-active mb-1.5">
                                    <a href="{{ route('email') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                        <span class="flex items-center gap-2.5 justify-between w-full">
                                            <span class="flex items-center gap-2.5">
                                                <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="uil:envelope" class="icon line-height-1"></iconify-icon></span>
                                                <span class="font-semibold">Inbox</span>
                                            </span>
                                            <span class="font-medium">800</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-1.5">
                                    <a href="{{ route('starred') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                        <span class="flex items-center gap-2.5 justify-between w-full">
                                            <span class="flex items-center gap-2.5">
                                                <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="ph:star-bold" class="icon line-height-1"></iconify-icon></span>
                                                <span class="font-semibold">Starred</span>
                                            </span>
                                            <span class="font-medium">250</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-1.5">
                                    <a href="{{ route('email') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                        <span class="flex items-center gap-2.5 justify-between w-full">
                                            <span class="flex items-center gap-2.5">
                                                <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="ion:paper-plane-outline" class="icon line-height-1"></iconify-icon></span>
                                                <span class="font-semibold">Sent</span>
                                            </span>
                                            <span class="font-medium">80</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-1.5">
                                    <a href="{{ route('email') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                        <span class="flex items-center gap-2.5 justify-between w-full">
                                            <span class="flex items-center gap-2.5">
                                                <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="lucide:pencil" class="icon line-height-1"></iconify-icon></span>
                                                <span class="font-semibold">Draft</span>
                                            </span>
                                            <span class="font-medium">50</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-1.5">
                                    <a href="{{ route('email') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                        <span class="flex items-center gap-2.5 justify-between w-full">
                                            <span class="flex items-center gap-2.5">
                                                <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="ph:warning-bold" class="icon line-height-1"></iconify-icon></span>
                                                <span class="font-semibold">Spam</span>
                                            </span>
                                            <span class="font-medium">30</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('email') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                        <span class="flex items-center gap-2.5 justify-between w-full">
                                            <span class="flex items-center gap-2.5">
                                                <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="material-symbols:delete-outline" class="icon line-height-1"></iconify-icon></span>
                                                <span class="font-semibold">Bin</span>
                                            </span>
                                            <span class="font-medium">20</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mt-6">
                                <h6 class="text-lg font-semibold text-neutral-600 dark:text-neutral-200 mb-4">TAGS</h6>
                                <ul>
                                    <li class="mb-5">
                                        <span class="line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5">
                                            <span class="w-2 h-2 bg-primary-600 rounded-full"></span>
                                            Personal
                                        </span>
                                    </li>
                                    <li class="mb-5">
                                        <span class="line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5">
                                            <span class="w-2 h-2 bg-purple-600 rounded-full"></span>
                                            Social
                                        </span>
                                    </li>
                                    <li class="mb-5">
                                        <span class="line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5">
                                            <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                                            Promotions
                                        </span>
                                    </li>
                                    <li class="mb-5">
                                        <span class="line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5">
                                            <span class="w-2 h-2 bg-warning-600 rounded-full"></span>
                                            Business
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
                <div class="card h-full p-0 border-0 email-card">
                    <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div class="flex items-center gap-3">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border bg-white dark:bg-neutral-600" type="checkbox" name="checkbox" id="selectAll">
                                    <div class="">
                                        <button data-dropdown-toggle="dropdownArrowDown" class="focus:ring-4 focus:outline-none focus:ring-blue-300  text-sm dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded-full w-4 h-4 flex items-center justify-center" type="button">
                                            <iconify-icon icon="typcn:arrow-sorted-down" class="icon line-height-1"></iconify-icon>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdownArrowDown" class="sm:min-w-max z-10 hidden border border-transparent dark:border-neutral-600 bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 dark:bg-gray-700">
                                            <ul class="rounded-lg bg-white dark:bg-neutral-700 shadow p-4 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <button type="button" class="px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900" data-bs-toggle="modal" data-bs-target="#exampleModalView">
                                                        All
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                        None
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                        Read
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                        Unread
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                        Starred
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                        Unstarred
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="delete-button hidden text-secondary-light text-xl flex">
                                    <iconify-icon icon="material-symbols:delete-outline" class="icon line-height-1"></iconify-icon>
                                </button>
                                <button type="button" class="reload-button text-secondary-light text-xl flex">
                                    <iconify-icon icon="tabler:reload" class="icon"></iconify-icon>
                                </button>

                                <div class="">
                                    <button data-dropdown-toggle="dropdownThreeDots" class="focus:ring-4 focus:outline-none focus:ring-blue-300  text-sm dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded-full w-4 h-4 flex items-center justify-center" type="button">
                                        <iconify-icon icon="entypo:dots-three-vertical" class="icon text-secondary-light"></iconify-icon>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownThreeDots" class="sm:min-w-max z-10 hidden border border-transparent dark:border-neutral-600 bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 dark:bg-gray-700">
                                        <ul class="p-4 text-sm text-gray-700 dark:text-gray-200">
                                            <li>
                                                <button type="button" class="dropdown-item px-4 py-2 rounded text-secondary-light hover:bg-neutral-200 dark:hover:bg-neutral-600 text-hover-neutral-900 flex items-center text-start gap-2.5" data-bs-toggle="modal" data-bs-target="#exampleModalView">
                                                    <iconify-icon icon="gravity-ui:envelope-open" class="icon text-lg line-height-1"></iconify-icon>
                                                    Mark all as read
                                                </button>
                                            </li>
                                            <li>
                                                <p class="ms-10 mt-2 text-neutral-500 mb-0">
                                                    Select messages to see more actions
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <form class="navbar-search lg:block hidden">
                                    <input type="text" class="bg-white dark:text-white dark:bg-neutral-700 h-10 w-auto" name="search" placeholder="Search">
                                    <iconify-icon icon="ion:search-outline" class="icon dark:text-white"></iconify-icon>
                                </form>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-secondary-light line-height-1">1-12 of 1,253</span>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination flex">
                                        <li class="page-item">
                                            <a class="page-link flex bg-white dark:bg-neutral-700 border text-secondary-light text-xl" href="javascript:void(0)"><iconify-icon icon="iconamoon:arrow-left-2" class="icon"></iconify-icon> </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link flex bg-white dark:bg-neutral-700 border text-secondary-light text-xl" href="javascript:void(0)"><iconify-icon icon="iconamoon:arrow-right-2" class="icon"></iconify-icon> </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="overflow-x-auto">
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Jerome Bell</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Kristin Watson</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Cody Fisher</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Dianne Russell</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Floyd Miles</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Devon Lane</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Dianne Russell</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Annette Black</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Bessie Cooper</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Courtney Henry</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                            <li class="email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max">
                                <div class="form-check style-check flex items-center">
                                    <input class="form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600" type="checkbox" name="checkbox">
                                </div>
                                <button type="button" class="starred-button icon text-xl text-secondary-light line-height-1 flex">
                                    <i class="ri-star-fill text-warning-600"></i>
                                </button>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]">Wade Warren</a>
                                <a href="{{ route('veiwDetails') }}" class="text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto">6:07 AM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

@endsection

