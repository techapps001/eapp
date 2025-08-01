@extends('layout.layout')
@php
    $title='Tooltip & Popover';
    $subTitle = 'Components / Tooltip & Popover';
    $script='<script src="' . asset('assets/js/defaultCarousel.js') . '"></script>';   
@endphp

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Default Tooltip</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <button data-tooltip-target="tooltip-Secondary" data-tooltip-placement="top" type="button" class="btn bg-purple-600/10 hover:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded-lg px-8 py-[11px]">
                            Secondary
                        </button>
                        <div id="tooltip-Secondary" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Secondary
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-Success" data-tooltip-placement="top" type="button" class="btn bg-success-600/10 hover:bg-success-600/25 text-success-600 dark:text-success-400 rounded-lg px-8 py-[11px]">
                            Success
                        </button>
                        <div id="tooltip-Success" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Success
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-Info" data-tooltip-placement="top" type="button" class="btn bg-info-600/10 hover:bg-info-600/25 text-info-600 dark:text-info-400 rounded-lg px-8 py-[11px]">
                            Info
                        </button>
                        <div id="tooltip-Info" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Info
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-Warning" data-tooltip-placement="top" type="button" class="btn bg-warning-600/10 hover:bg-warning-600/25 text-warning-600 dark:text-warning-400 rounded-lg px-8 py-[11px]">
                            Warning
                        </button>
                        <div id="tooltip-Warning" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Warning
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-Danger" data-tooltip-placement="top" type="button" class="btn bg-danger-600/10 hover:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-lg px-8 py-[11px]">
                            Danger
                        </button>
                        <div id="tooltip-Danger" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Danger
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-Dark" data-tooltip-placement="top" type="button" class="btn bg-neutral-600/10 hover:bg-neutral-600/25 text-neutral-600 dark:text-neutral-400 rounded-lg px-8 py-[11px]">
                            Dark
                        </button>
                        <div id="tooltip-Dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Dark
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Default Position</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">

                        <button data-tooltip-target="tooltip-top" data-tooltip-placement="top" type="button" class="btn border border-neutral-400 text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-600 rounded-lg px-8 py-[11px]">
                            Tooltip On Top
                        </button>
                        <div id="tooltip-top" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip On Top
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-right" data-tooltip-placement="right" type="button" class="btn border border-neutral-400 text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-600 rounded-lg px-8 py-[11px]">
                            Tooltip On Right
                        </button>
                        <div id="tooltip-right" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip On Right
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-left" data-tooltip-placement="left" type="button" class="btn border border-neutral-400 text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-600 rounded-lg px-8 py-[11px]">
                            Tooltip On Left
                        </button>
                        <div id="tooltip-left" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip On Left
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-bottom" data-tooltip-placement="bottom" type="button" class="btn border border-neutral-400 text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-600 rounded-lg px-8 py-[11px]">
                            Tooltip On bottom
                        </button>
                        <div id="tooltip-bottom" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip On bottom
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Tooltip Animation</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <button data-tooltip-target="tooltip-animation-Secondary" data-tooltip-placement="top" type="button" class="btn border border-purple-600 hover:bg-purple-600/10 text-purple-600 dark:text-purple-400 rounded-lg px-8 py-[11px]">
                            Secondary
                        </button>
                        <div id="tooltip-animation-Secondary" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Secondary
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-animation-Success" data-tooltip-placement="top" type="button" class="btn border border-success-600 hover:bg-success-600/10 text-success-600 dark:text-success-400 rounded-lg px-8 py-[11px]">
                            Success
                        </button>
                        <div id="tooltip-animation-Success" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Success
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-animation-Info" data-tooltip-placement="top" type="button" class="btn border border-info-600 hover:bg-info-600/10 text-info-600 dark:text-info-400 rounded-lg px-8 py-[11px]">
                            Info
                        </button>
                        <div id="tooltip-animation-Info" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Info
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-animation-Warning" data-tooltip-placement="top" type="button" class="btn border border-warning-600 hover:bg-warning-600/10 text-warning-600 dark:text-warning-400 rounded-lg px-8 py-[11px]">
                            Warning
                        </button>
                        <div id="tooltip-animation-Warning" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Warning
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-animation-Danger" data-tooltip-placement="top" type="button" class="btn border border-danger-600 hover:bg-danger-600/10 text-danger-600 dark:text-danger-400 rounded-lg px-8 py-[11px]">
                            Danger
                        </button>
                        <div id="tooltip-animation-Danger" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Danger
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-animation-Dark" data-tooltip-placement="top" type="button" class="btn border border-neutral-600 hover:bg-neutral-600/10 text-neutral-600 dark:text-neutral-400 rounded-lg px-8 py-[11px]">
                            Dark
                        </button>
                        <div id="tooltip-animation-Dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                            Tooltip Dark
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Tooltip Popover Positions</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">

                        <button data-popover-target="popover-Secondary" data-popover-placement="top" type="button" class="btn bg-purple-600 hover:bg-purple-700 text-white rounded-lg px-8 py-[11px]">
                            Secondary
                        </button>
                        <div data-popover id="popover-Secondary" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                            <div class="px-3 py-2">
                                <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Secondary</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>

                        <button data-popover-target="popover-Success" data-tooltip-placement="top" type="button" class="btn bg-success-600 hover:bg-success-700 text-white rounded-lg px-8 py-[11px]">
                            Success
                        </button>
                        <div data-popover id="popover-Success" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                            <div class="px-3 py-2">
                                <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Success</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>

                        <button data-popover-target="popover-Info" data-tooltip-placement="top" type="button" class="btn bg-info-600 hover:bg-info-700 text-white rounded-lg px-8 py-[11px]">
                            Info
                        </button>
                        <div data-popover id="popover-Info" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                            <div class="px-3 py-2">
                                <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Info</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>

                        <button data-popover-target="popover-Warning" data-tooltip-placement="top" type="button" class="btn bg-warning-600 hover:bg-warning-700 text-white rounded-lg px-8 py-[11px]">
                            Warning
                        </button>
                        <div data-popover id="popover-Warning" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                            <div class="px-3 py-2">
                                <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Warning</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>

                        <button data-popover-target="popover-Danger" data-tooltip-placement="top" type="button" class="btn bg-danger-600 hover:bg-danger-700 text-white rounded-lg px-8 py-[11px]">
                            Danger
                        </button>
                        <div data-popover id="popover-Danger" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                            <div class="px-3 py-2">
                                <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Danger</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>

                        <button data-popover-target="popover-Dark" data-tooltip-placement="top" type="button" class="btn bg-neutral-600 hover:bg-neutral-700 text-white rounded-lg px-8 py-[11px]">
                            Dark
                        </button>
                        <div data-popover id="popover-Dark" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                            <div class="px-3 py-2">
                                <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Dark</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Tooltip Text popup</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <ul class="list-decimal ps-5">
                            <li class="text-secondary-light mb-2">
                                This is tooltip text
                                <button data-popover-target="popover-description1" data-popover-placement="right" class="text-primary-600" type="button"> popup </button>
                            </li>
                            <li data-popover id="popover-description1" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-primary-600 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Dark 1 </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div data-popper-arrow></div>
                                </div>
                            </li>
                            <li class="text-secondary-light mb-2">
                                This is tooltip text
                                <button data-popover-target="popover-description2" data-popover-placement="right" class="text-primary-600" type="button"> popup </button>
                            </li>
                            <li data-popover id="popover-description2" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-primary-600 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Dark 2 </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div data-popper-arrow></div>
                                </div>
                            </li>
                            <li class="text-secondary-light mb-2">
                                This is tooltip text
                                <button data-popover-target="popover-description3" data-popover-placement="right" class="text-primary-600" type="button"> popup </button>
                            </li>
                            <li data-popover id="popover-description3" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-primary-600 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Dark 3 </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div data-popper-arrow></div>
                                </div>
                            </li>
                            <li class="text-secondary-light mb-2">
                                This is tooltip text
                                <button data-popover-target="popover-description4" data-popover-placement="right" class="text-primary-600" type="button"> popup </button>
                            </li>
                            <li data-popover id="popover-description4" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-primary-600 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Dark 4 </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div data-popper-arrow></div>
                                </div>
                            </li>
                            <li class="text-secondary-light">
                                This is tooltip text
                                <button data-popover-target="popover-description5" data-popover-placement="right" class="text-primary-600" type="button"> popup </button>
                            </li>
                            <li data-popover id="popover-description5" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-primary-600 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Title Dark 5 </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div data-popper-arrow></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Tooltip Text with icon popup </h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <ul class="list-decimal ps-5">
                            <li class="text-secondary-light mb-2">
                                This is tooltip text
                                <button data-popover-target="popover-description11" data-popover-placement="right" class="text-neutral-600 dark:text-white hover:text-primary-600 dark:hover:text-primary-600" type="button"> <i class="ri-question-line"></i> </button>
                            </li>
                            <li data-popover id="popover-description11" class="absolute z-10 invisible inline-block w-64 text-sm text-white transition-opacity duration-300 bg-primary-600 border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="font-semibold text-lg mb-1 text-white dark:text-white">Title Dark 1 </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </li>
                            <li class="text-secondary-light mb-2">
                                This is tooltip text
                                <button data-popover-target="popover-description12" data-popover-placement="right" class="text-neutral-600 dark:text-white hover:text-primary-600 dark:hover:text-primary-600" type="button"> <i class="ri-question-line"></i> </button>
                            </li>
                            <li data-popover id="popover-description12" class="absolute z-10 invisible inline-block w-64 text-sm text-white transition-opacity duration-300 bg-primary-600 border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="font-semibold text-lg mb-1 text-white dark:text-white">Title Dark 2 </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </li>
                            <li class="text-secondary-light mb-2">
                                This is tooltip text
                                <button data-popover-target="popover-description13" data-popover-placement="right" class="text-neutral-600 dark:text-white hover:text-primary-600 dark:hover:text-primary-600" type="button"> <i class="ri-question-line"></i> </button>
                            </li>
                            <li data-popover id="popover-description13" class="absolute z-10 invisible inline-block w-64 text-sm text-white transition-opacity duration-300 bg-primary-600 border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="font-semibold text-lg mb-1 text-white dark:text-white">Title Dark 3 </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </li>
                            <li class="text-secondary-light mb-2">
                                This is tooltip text
                                <button data-popover-target="popover-description14" data-popover-placement="right" class="text-neutral-600 dark:text-white hover:text-primary-600 dark:hover:text-primary-600" type="button"> <i class="ri-question-line"></i> </button>
                            </li>
                            <li data-popover id="popover-description14" class="absolute z-10 invisible inline-block w-64 text-sm text-white transition-opacity duration-300 bg-primary-600 border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="font-semibold text-lg mb-1 text-white dark:text-white">Title Dark 4 </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </li>
                            <li class="text-secondary-light">
                                This is tooltip text
                                <button data-popover-target="popover-description15" data-popover-placement="right" class="text-neutral-600 dark:text-white hover:text-primary-600 dark:hover:text-primary-600" type="button"> <i class="ri-question-line"></i> </button>
                            </li>
                            <li data-popover id="popover-description15" class="absolute z-10 invisible inline-block w-64 text-sm text-white transition-opacity duration-300 bg-primary-600 border border-gray-200 rounded-lg opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800 shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="font-semibold text-lg mb-1 text-white dark:text-white">Title Dark 5 </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
