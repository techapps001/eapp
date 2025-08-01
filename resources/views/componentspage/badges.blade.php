@extends('layout.layout')
@php
    $title='Badges';
    $subTitle = 'Components / Badges';
@endphp

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Default Badges</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="badge text-sm font-semibold bg-primary-600 px-5 py-1.5 rounded text-white">Primary</span>
                        <span class="badge text-sm font-semibold bg-purple-600 px-5 py-1.5 rounded text-white">Secondary</span>
                        <span class="badge text-sm font-semibold bg-success-600 px-5 py-1.5 rounded text-white">Success</span>
                        <span class="badge text-sm font-semibold bg-info-600 px-5 py-1.5 rounded text-white">Info</span>
                        <span class="badge text-sm font-semibold bg-warning-600 px-5 py-1.5 rounded text-white">Warning</span>
                        <span class="badge text-sm font-semibold bg-danger-600 px-5 py-1.5 rounded text-white">Danger</span>
                        <span class="badge text-sm font-semibold bg-neutral-800 px-5 py-1.5 rounded text-white">Dark</span>
                        <span class="badge text-sm font-semibold bg-transparent px-5 py-1.5 rounded text-primary-600">Link</span>
                        <span class="badge text-sm font-semibold bg-light-600 dark:bg-neutral-600 px-5 py-1.5 rounded text-dark">Light</span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Outline Badges</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="badge text-sm font-semibold border border-primary-600 text-primary-600 bg-transparent px-5 py-1.5 rounded">Primary</span>
                        <span class="badge text-sm font-semibold border border-purple-600 dark:text-purple-400 bg-transparent px-5 py-1.5 rounded">Secondary</span>
                        <span class="badge text-sm font-semibold border border-success-600 text-success-600 bg-transparent px-5 py-1.5 rounded">Success</span>
                        <span class="badge text-sm font-semibold border border-info-600 text-info-600 bg-transparent px-5 py-1.5 rounded">Info</span>
                        <span class="badge text-sm font-semibold border border-warning-600 text-warning-600 bg-transparent px-5 py-1.5 rounded">Warning</span>
                        <span class="badge text-sm font-semibold border border-danger-600 text-danger-600 bg-transparent px-5 py-1.5 rounded">Danger</span>
                        <span class="badge text-sm font-semibold border border-neutral-800 text-neutral-800 bg-transparent px-5 py-1.5 rounded">Dark</span>
                        <span class="badge text-sm font-semibold bg-transparent px-5 py-1.5 rounded text-primary-600">Link</span>
                        <span class="badge text-sm font-semibold border bg-transparent px-5 py-1.5 rounded text-secondary-light">Light</span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Soft Badges</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="badge text-sm font-semibold text-primary-600 bg-primary-100 dark:bg-primary-600/25 px-5 py-1.5 rounded">Primary</span>
                        <span class="badge text-sm font-semibold text-purple-600 bg-purple-100 dark:bg-purple-600/25 px-5 py-1.5 rounded">Secondary</span>
                        <span class="badge text-sm font-semibold text-success-600 bg-success-100 dark:bg-success-600/25 px-5 py-1.5 rounded">Success</span>
                        <span class="badge text-sm font-semibold text-info-600 bg-info-100 dark:bg-info-600/25 px-5 py-1.5 rounded">Info</span>
                        <span class="badge text-sm font-semibold text-warning-600 bg-warning-100 dark:bg-warning-600/25 px-5 py-1.5 rounded">Warning</span>
                        <span class="badge text-sm font-semibold text-danger-600 bg-danger-100 dark:bg-danger-600/25 px-5 py-1.5 rounded">Danger</span>
                        <span class="badge text-sm font-semibold text-neutral-800 bg-neutral-300 dark:text-neutral-900 px-5 py-1.5 rounded">Dark</span>
                        <span class="badge text-sm font-semibold bg-transparent px-5 py-1.5 rounded text-primary-600">Link</span>
                        <span class="badge text-sm font-semibold bg-light-100 dark:bg-neutral-600 px-5 py-1.5 rounded text-secondary-light">Light</span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Default Badges</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="badge text-sm font-semibold rounded-full bg-primary-600 px-5 py-1.5 text-white">Primary</span>
                        <span class="badge text-sm font-semibold rounded-full bg-purple-600 px-5 py-1.5 text-white">Secondary</span>
                        <span class="badge text-sm font-semibold rounded-full bg-success-600 px-5 py-1.5 text-white">Success</span>
                        <span class="badge text-sm font-semibold rounded-full bg-info-600 px-5 py-1.5 text-white">Info</span>
                        <span class="badge text-sm font-semibold rounded-full bg-warning-600 px-5 py-1.5 text-white">Warning</span>
                        <span class="badge text-sm font-semibold rounded-full bg-danger-600 px-5 py-1.5 text-white">Danger</span>
                        <span class="badge text-sm font-semibold rounded-full bg-neutral-800 px-5 py-1.5 text-white">Dark</span>
                        <span class="badge text-sm font-semibold rounded-full bg-transparent px-5 py-1.5 text-primary-600">Link</span>
                        <span class="badge text-sm font-semibold rounded-full bg-light-600 dark:bg-neutral-600 px-5 py-1.5 text-dark">Light</span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Gradient Badges</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="badge text-sm font-semibold bg-gradient-to-r from-primary-700 to-primary-400  px-5 py-1.5 rounded text-white">Primary</span>
                        <span class="badge text-sm font-semibold bg-gradient-to-r from-purple-700 to-purple-400  px-5 py-1.5 rounded text-white">Secondary</span>
                        <span class="badge text-sm font-semibold bg-gradient-to-r from-success-700 to-success-400  px-5 py-1.5 rounded text-white">Success</span>
                        <span class="badge text-sm font-semibold bg-gradient-to-r from-info-700 to-info-400  px-5 py-1.5 rounded text-white">Info</span>
                        <span class="badge text-sm font-semibold bg-gradient-to-r from-warning-700 to-warning-400  px-5 py-1.5 rounded text-white">Warning</span>
                        <span class="badge text-sm font-semibold bg-gradient-to-r from-danger-700 to-danger-400  px-5 py-1.5 rounded text-white">Danger</span>
                        <span class="badge text-sm font-semibold bg-gradient-to-r from-neutral-700 to-neutral-400  px-5 py-1.5 rounded text-white">Dark</span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Badges With Button</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <button type="button" class="badge text-sm font-semibold bg-primary-600 px-4 py-1.5 rounded text-white flex items-center gap-2">
                            Primary
                            <span class="badge text-neutral-900 dark:text-neutral-900 bg-white w-5 h-5 flex items-center justify-center rounded text-xs">4</span>
                        </button>
                        <button type="button" class="badge text-sm font-semibold bg-purple-600 px-4 py-1.5 rounded text-white flex items-center gap-2">
                            Secondary
                            <span class="badge text-neutral-900 dark:text-neutral-900 bg-white w-5 h-5 flex items-center justify-center rounded text-xs">4</span>
                        </button>
                        <button type="button" class="badge text-sm font-semibold bg-success-600 px-4 py-1.5 rounded text-white flex items-center gap-2">
                            Success
                            <span class="badge text-neutral-900 dark:text-neutral-900 bg-white w-5 h-5 flex items-center justify-center rounded text-xs">4</span>
                        </button>
                        <button type="button" class="badge text-sm font-semibold bg-info-600 px-4 py-1.5 rounded text-white flex items-center gap-2">
                            Info
                            <span class="badge text-neutral-900 dark:text-neutral-900 bg-white w-5 h-5 flex items-center justify-center rounded text-xs">4</span>
                        </button>
                        <button type="button" class="badge text-sm font-semibold bg-warning-600 px-4 py-1.5 rounded text-white flex items-center gap-2">
                            Warning
                            <span class="badge text-neutral-900 dark:text-neutral-900 bg-white w-5 h-5 flex items-center justify-center rounded text-xs">4</span>
                        </button>
                        <button type="button" class="badge text-sm font-semibold bg-danger-600 px-4 py-1.5 rounded text-white flex items-center gap-2">
                            Danger
                            <span class="badge text-neutral-900 dark:text-neutral-900 bg-white w-5 h-5 flex items-center justify-center rounded text-xs">4</span>
                        </button>
                        <button type="button" class="badge text-sm font-semibold bg-neutral-800 px-4 py-1.5 rounded text-white flex items-center gap-2">
                            Dark
                            <span class="badge text-neutral-900 dark:text-neutral-900 bg-white w-5 h-5 flex items-center justify-center rounded text-xs">4</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Default Badges</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full bg-primary-600  text-white">1</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full bg-purple-600  text-white">2</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full bg-success-600  text-white">3</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full bg-warning-600  text-white">4</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full bg-danger-600  text-white">5</span>

                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full text-primary-600 dark:text-primary-500 bg-primary-50 dark:bg-primary-600/25">1</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full text-purple-600 dark:text-purple-500 bg-purple-50 dark:bg-purple-600/25">1</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full text-success-600 dark:text-success-500 bg-success-100 dark:bg-success-600/25">3</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full text-warning-600 dark:text-warning-500 bg-warning-100 dark:bg-warning-600/25">4</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full text-danger-600 dark:text-danger-500 bg-danger-100 dark:bg-danger-600/25">5</span>

                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full border border-primary-600 text-primary-600 dark:text-primary-500">1</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full border border-purple-600 text-purple-600 dark:text-purple-500">1</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full border border-success-600 text-success-600 dark:text-success-500">3</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full border border-warning-600 text-warning-600 dark:text-warning-500">4</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded-full border border-danger-600 text-danger-600 dark:text-danger-500">5</span>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Default Badges</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded bg-primary-600  text-white">1</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded bg-purple-600  text-white">2</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded bg-success-600  text-white">3</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded bg-warning-600  text-white">4</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded bg-danger-600  text-white">5</span>

                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded text-primary-600 dark:text-primary-500 bg-primary-50 dark:bg-primary-600/25">1</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded text-purple-600 dark:text-purple-500 bg-purple-50 dark:bg-purple-600/25">2</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded text-success-600 dark:text-success-500 bg-success-100 dark:bg-success-600/25">3</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded text-warning-600 dark:text-warning-500 bg-warning-100 dark:bg-warning-600/25">4</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded text-danger-600 dark:text-danger-500 bg-danger-100 dark:bg-danger-600/25">5</span>

                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded border border-primary-600 text-primary-600 dark:text-primary-500">1</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded border border-purple-600 text-purple-600 dark:text-purple-500">2</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded border border-success-600 text-success-600 dark:text-success-500">3</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded border border-warning-600 text-warning-600 dark:text-warning-500">4</span>
                        <span class="badge text-sm font-semibold w-8 h-8 flex justify-center items-center rounded border border-danger-600 text-danger-600 dark:text-danger-500">5</span>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Default Badges</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="flex flex-wrap items-center gap-3">
                            <button type="button" class="bg-primary-600 text-white rounded relative px-5 py-2 text-sm line-height-1 flex items-center">
                                Inbox
                                <span class="absolute top-0 -end-[8px] -translate-y-1/2 px-1 py-0.5 badge rounded-full bg-primary-600 border border-white">2</span>
                            </button>
                        </div>
                        <div class="flex flex-wrap items-center gap-3">
                            <button type="button" class="bg-warning-600 text-white rounded relative px-5 py-2 text-sm line-height-1 flex items-center">
                                Inbox
                                <span class="absolute top-0 -end-[8px] -translate-y-1/2 px-1 py-0.5 badge rounded-full bg-danger-600">99+</span>
                            </button>
                        </div>

                        <div class="flex flex-wrap items-center gap-3">
                            <button type="button" class="relative">
                                <img src="{{ asset('assets/images/lang-flag.png') }}" alt="image" class="w-8 h-8 object-fit-cover rounded-full">
                                <span class="absolute top-0 -end-[8px] -translate-y-1/2 px-1 py-0.5 leading-[1] flex items-center justify-center badge rounded-full bg-danger-600 border border-white text-white">2</span>
                            </button>
                        </div>

                        <button class="relative rounded-full flex justify-center items-center" type="button">
                            <iconify-icon icon="mage:email" class="text-neutral-600 dark:text-neutral-200 text-[32px]"></iconify-icon>
                            <span class="absolute top-0 -end-[8px] -translate-y-1/2 px-1 py-0.5 leading-[1] flex items-center justify-center badge rounded-full bg-danger-600 text-white">2</span>
                        </button>

                        <button class="relative rounded-full flex justify-center items-center" type="button">
                            <iconify-icon icon="iconoir:bell" class="text-neutral-600 dark:text-neutral-200 text-[32px]"></iconify-icon>
                            <span class="absolute top-0 -end-[8px] -translate-y-1/2 px-1 py-0.5 leading-[1] flex items-center justify-center badge rounded-full bg-danger-600 text-white">2</span>
                        </button>
                        <button class="relative rounded-full flex justify-center items-center" type="button">
                            <iconify-icon icon="iconoir:bell" class="text-neutral-600 dark:text-neutral-200 text-[32px]"></iconify-icon>
                            <span class="absolute top-0 start-1/2 -translate-y-1/2 -translate-x-1/2 px-1 py-0.5 leading-[1] flex items-center justify-center rounded-full bg-danger-600 text-white w-2 h-2"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Badge Dots Style </h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-primary-600 rounded-full"></span>
                            <span class="text-primary-600 font-medium">Primary</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-purple-600 rounded-full"></span>
                            <span class="dark:text-purple-400 font-medium">Secondary</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                            <span class="text-success-600 font-medium">Success</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-info-600 rounded-full"></span>
                            <span class="text-info-600 font-medium">Info</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-warning-600 rounded-full"></span>
                            <span class="text-warning-600 font-medium">Warning</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-danger-600 rounded-full"></span>
                            <span class="text-danger-600 font-medium">Danger</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
