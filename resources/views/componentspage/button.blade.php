@extends('layout.layout')
@php
    $title='Button';
    $subTitle = 'Components / Button';
@endphp

@section('content')

    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Default Buttons</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="btn bg-primary-600 hover:bg-primary-700 text-white rounded-lg px-5 py-[11px]">Primary</button>
                    <button type="button" class="btn bg-purple-600 hover:bg-purple-700 text-white rounded-lg px-5 py-[11px]">Secondary</button>
                    <button type="button" class="btn bg-success-600 hover:bg-success-700 text-white rounded-lg px-5 py-[11px]">Success</button>
                    <button type="button" class="btn bg-info-600 hover:bg-info-700 text-white rounded-lg px-5 py-[11px]">Info</button>
                    <button type="button" class="btn bg-warning-600 hover:bg-warning-700 text-white rounded-lg px-5 py-[11px]">Warning</button>
                    <button type="button" class="btn bg-danger-600 hover:bg-danger-700 text-white rounded-lg px-5 py-[11px]">Danger</button>
                    <button type="button" class="btn bg-neutral-900 hover:bg-neutral-700 text-white text-base rounded-lg px-5 py-[11px]">Dark</button>
                    <button type="button" class="btn hover:text-primary-600 text-secondary-light text-decoration-none rounded-lg px-5 py-[11px]">Link</button>
                    <button type="button" class="btn bg-light-100 hover:bg-neutral-200 dark:bg-neutral-600 dark:hover:bg-neutral-500 text-dark rounded-lg px-5 py-[11px]">Light</button>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Outline Buttons</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="btn border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white rounded-lg px-5 py-[11px]">Primary</button>
                    <button type="button" class="btn border border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white rounded-lg px-5 py-[11px]">Secondary</button>
                    <button type="button" class="btn border border-success-600 text-success-600 hover:bg-success-600 hover:text-white rounded-lg px-5 py-[11px]">Success</button>
                    <button type="button" class="btn border border-info-600 text-info-600 hover:bg-info-600 hover:text-white rounded-lg px-5 py-[11px]">Info</button>
                    <button type="button" class="btn border border-warning-600 text-warning-600 hover:bg-warning-600 hover:text-white rounded-lg px-5 py-[11px]">Warning</button>
                    <button type="button" class="btn border border-danger-600 text-danger-600 hover:bg-danger-600 hover:text-white rounded-lg px-5 py-[11px]">Danger</button>
                    <button type="button" class="btn border border-neutral-900 text-neutral-900 hover:bg-neutral-900 hover:text-white rounded-lg px-5 py-[11px]">Dark</button>
                    <button type="button" class="btn hover:text-primary-600 text-secondary-light text-decoration-none rounded-lg px-5 py-[11px]">Link</button>
                    <button type="button" class="btn border border-neutral-200 text-neutral-500 hover:bg-neutral-200 text-dark rounded-lg px-5 py-[11px]">Light</button>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Rounded Buttons</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="btn bg-primary-600 hover:bg-primary-700 text-white rounded-full px-5 py-[11px]">Primary</button>
                    <button type="button" class="btn bg-purple-600 hover:bg-purple-700 text-white rounded-full px-5 py-[11px]">Secondary</button>
                    <button type="button" class="btn bg-success-600 hover:bg-success-700 text-white rounded-full px-5 py-[11px]">Success</button>
                    <button type="button" class="btn bg-info-600 hover:bg-info-700 text-white rounded-full px-5 py-[11px]">Info</button>
                    <button type="button" class="btn bg-warning-600 hover:bg-warning-700 text-white rounded-full px-5 py-[11px]">Warning</button>
                    <button type="button" class="btn bg-danger-600 hover:bg-danger-700 text-white rounded-full px-5 py-[11px]">Danger</button>
                    <button type="button" class="btn bg-neutral-900 hover:bg-neutral-700 text-white text-base rounded-full px-5 py-[11px]">Dark</button>
                    <button type="button" class="btn hover:text-primary-600 text-secondary-light text-decoration-none rounded-full px-5 py-[11px]">Link</button>
                    <button type="button" class="btn bg-light-100 hover:bg-neutral-200 dark:bg-neutral-600 dark:hover:bg-neutral-500 text-dark rounded-full px-5 py-[11px]">Light</button>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Rounded Buttons</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="btn border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white rounded-full px-5 py-[11px]">Primary</button>
                    <button type="button" class="btn border border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white rounded-full px-5 py-[11px]">Secondary</button>
                    <button type="button" class="btn border border-success-600 text-success-600 hover:bg-success-600 hover:text-white rounded-full px-5 py-[11px]">Success</button>
                    <button type="button" class="btn border border-info-600 text-info-600 hover:bg-info-600 hover:text-white rounded-full px-5 py-[11px]">Info</button>
                    <button type="button" class="btn border border-warning-600 text-warning-600 hover:bg-warning-600 hover:text-white rounded-full px-5 py-[11px]">Warning</button>
                    <button type="button" class="btn border border-danger-600 text-danger-600 hover:bg-danger-600 hover:text-white rounded-full px-5 py-[11px]">Danger</button>
                    <button type="button" class="btn border border-neutral-900 text-neutral-900 hover:bg-neutral-900 hover:text-white rounded-full px-5 py-[11px]">Dark</button>
                    <button type="button" class="btn hover:text-primary-600 text-secondary-light text-decoration-none rounded-full px-5 py-[11px]">Link</button>
                    <button type="button" class="btn border border-neutral-200 text-neutral-500 hover:bg-neutral-200 text-dark rounded-full px-5 py-[11px]">Light</button>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Soft Buttons</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="btn bg-primary-100 dark:bg-primary-600/25 dark:hover:bg-primary-600 hover:bg-primary-600 text-primary-600 hover:text-white rounded-full px-5 py-[11px]">Primary</button>
                    <button type="button" class="btn bg-purple-100 dark:bg-purple-600/25 dark:hover:bg-purple-600 hover:bg-purple-600 text-purple-600 hover:text-white rounded-full px-5 py-[11px]">Secondary</button>
                    <button type="button" class="btn bg-success-100 dark:bg-success-600/25 dark:hover:bg-success-600 hover:bg-success-600 text-success-600 hover:text-white rounded-full px-5 py-[11px]">Success</button>
                    <button type="button" class="btn bg-info-100 dark:bg-info-600/25 dark:hover:bg-info-600 hover:bg-info-600 text-info-600 hover:text-white rounded-full px-5 py-[11px]">Info</button>
                    <button type="button" class="btn bg-warning-100 dark:bg-warning-600/25 dark:hover:bg-warning-600 hover:bg-warning-600 text-warning-600 hover:text-white rounded-full px-5 py-[11px]">Warning</button>
                    <button type="button" class="btn bg-danger-100 dark:bg-danger-600/25 dark:hover:bg-danger-600 hover:bg-danger-600 text-danger-600 hover:text-white rounded-full px-5 py-[11px]">Danger</button>
                    <button type="button" class="btn bg-neutral-100 dark:bg-neutral-600/50 dark:hover:bg-neutral-600 hover:bg-neutral-600 text-neutral-500 hover:text-white text-base rounded-full px-5 py-[11px]">Dark</button>
                    <button type="button" class="btn hover:text-primary-600 text-secondary-light text-decoration-none rounded-full px-5 py-[11px]">Link</button>
                    <button type="button" class="btn bg-light-100 dark:bg-light-600/25 hover:bg-neutral-200 dark:bg-neutral-600 dark:hover:bg-neutral-500 text-dark rounded-full px-5 py-[11px]">Light</button>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Text Buttons</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="btn text-primary-600 rounded-full px-5 py-[11px]">Primary</button>
                    <button type="button" class="btn text-purple-600 rounded-full px-5 py-[11px]">Secondary</button>
                    <button type="button" class="btn text-success-600 rounded-full px-5 py-[11px]">Success</button>
                    <button type="button" class="btn text-info-600 rounded-full px-5 py-[11px]">Info</button>
                    <button type="button" class="btn text-warning-600 rounded-full px-5 py-[11px]">Warning</button>
                    <button type="button" class="btn text-danger-600 rounded-full px-5 py-[11px]">Danger</button>
                    <button type="button" class="btn text-neutral-600 text-base rounded-full px-5 py-[11px]">Dark</button>
                    <button type="button" class="btn hover:text-primary-600 text-secondary-light text-decoration-none rounded-full px-5 py-[11px]">Link</button>
                    <button type="button" class="btn text-dark rounded-full px-5 py-[11px]">Light</button>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Buttons with Label</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="btn btn-primary-600 rounded-lg px-5 py-[11px] flex items-center gap-2">
                        <iconify-icon icon="mingcute:square-arrow-left-line" class="text-xl"></iconify-icon> Left Icon
                    </button>
                    <button type="button" class="btn btn-outline-primary-600 rounded-lg px-5 py-[11px] flex items-center gap-2">
                        <iconify-icon icon="mingcute:square-arrow-left-line" class="text-xl"></iconify-icon> Left Icon
                    </button>

                    <button type="button" class="btn bg-success-600 hover:bg-success-700 text-white rounded-lg px-5 py-[11px] flex items-center gap-2">
                        Right Icon
                        <iconify-icon icon="mingcute:square-arrow-right-line" class="text-xl"></iconify-icon>
                    </button>
                    <button type="button" class="btn border border-success-600 text-success-600 hover:bg-success-600 hover:text-white rounded-lg px-5 py-[11px] flex items-center gap-2">
                        Right Icon
                        <iconify-icon icon="mingcute:square-arrow-right-line" class="text-xl"></iconify-icon>
                    </button>

                    <button type="button" class="btn bg-warning-600 hover:bg-warning-700 text-white w-[60px] h-[50px] flex items-center justify-center gap-2">
                        <iconify-icon icon="mingcute:square-arrow-up-line" class="text-xl"></iconify-icon>
                    </button>
                    <button type="button" class="btn border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white w-[60px] h-[50px] flex items-center justify-center gap-2">
                        <iconify-icon icon="mingcute:square-arrow-down-line" class="text-xl"></iconify-icon>
                    </button>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Buttons with Label Round</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="btn btn-primary-600 rounded-full px-5 py-[11px] flex items-center gap-2">
                        <iconify-icon icon="mingcute:square-arrow-left-line" class="text-xl"></iconify-icon> Left Icon
                    </button>
                    <button type="button" class="btn btn-outline-primary-600 rounded-full px-5 py-[11px] flex items-center gap-2">
                        <iconify-icon icon="mingcute:square-arrow-left-line" class="text-xl"></iconify-icon> Left Icon
                    </button>

                    <button type="button" class="btn bg-success-600 hover:bg-success-700 text-white rounded-full px-5 py-[11px] flex items-center gap-2">
                        Right Icon
                        <iconify-icon icon="mingcute:square-arrow-right-line" class="text-xl"></iconify-icon>
                    </button>
                    <button type="button" class="btn border border-success-600 text-success-600 hover:bg-success-600 hover:text-white rounded-full px-5 py-[11px] flex items-center gap-2">
                        Right Icon
                        <iconify-icon icon="mingcute:square-arrow-right-line" class="text-xl"></iconify-icon>
                    </button>
                    <button type="button" class="btn bg-warning-600 hover:bg-warning-700 text-white rounded-full w-[60px] h-[50px] flex items-center justify-center gap-2">
                        <iconify-icon icon="mingcute:square-arrow-up-line" class="text-xl"></iconify-icon>
                    </button>
                    <button type="button" class="btn border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white rounded-full w-[60px] h-[50px] flex items-center justify-center gap-2">
                        <iconify-icon icon="mingcute:square-arrow-down-line" class="text-xl"></iconify-icon>
                    </button>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Buttons Sizes</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="btn btn-primary-600 rounded-lg px-6 py-[14px]"> Large Button</button>
                    <button type="button" class="btn bg-success-600 hover:bg-success-700 text-white rounded-lg px-5 py-[10px]">Medium Button</button>
                    <button type="button" class="btn bg-warning-600 hover:bg-warning-700 text-white rounded-lg px-3.5 py-2 text-sm">Small Button</button>
                </div>
                <div class="flex flex-wrap items-center gap-3 mt-4">
                    <button type="button" class="btn bg-primary-100 text-primary-600 hover:bg-primary-700 hover:text-white rounded-lg px-6 py-[14px]"> Large Button</button>
                    <button type="button" class="btn bg-success-100 text-success-600 hover:bg-success-700 hover:text-white rounded-lg px-5 py-[10px]">Medium Button</button>
                    <button type="button" class="btn bg-warning-100 text-warning-600 hover:bg-warning-700 hover:text-white rounded-lg px-3.5 py-2 text-sm">Small Button</button>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Checkbox & Radio Buttons</h6>
            </div>
            <div class="card-body py-4 px-6 flex flex-wrap items-center gap-3">
                <ul class="flex items-center">
                    <li>
                        <input type="checkbox" id="checkbox-1" class="hidden peer" required="">
                        <label for="checkbox-1" class="w-full px-5 py-[11px] text-primary-600 border border-primary-600 cursor-pointer peer-checked:border-primary-600 hover:text-white dark:peer-checked:text-white peer-checked:text-white hover:bg-primary-600 peer-checked:bg-primary-600 rounded-s-lg">
                            Checkbox 1
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="checkbox-2" class="hidden peer">
                        <label for="checkbox-2" class="w-full px-5 py-[11px] text-primary-600 border border-primary-600 cursor-pointer peer-checked:border-primary-600 hover:text-white dark:peer-checked:text-white peer-checked:text-white hover:bg-primary-600 peer-checked:bg-primary-600 border-x-0">
                            Checkbox 2
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="checkbox-3" class="hidden peer">
                        <label for="checkbox-3" class="w-full px-5 py-[11px] text-primary-600 border border-primary-600 cursor-pointer peer-checked:border-primary-600 hover:text-white dark:peer-checked:text-white peer-checked:text-white hover:bg-primary-600 peer-checked:bg-primary-600 rounded-e-lg">
                            Checkbox 3
                        </label>
                    </li>
                </ul>

                <ul class="flex items-center">
                    <li>
                        <input type="radio" name="radio" id="radio-1" class="hidden peer">
                        <label for="radio-1" class="w-full px-5 py-[11px] text-warning-600 border border-warning-600 cursor-pointer peer-checked:border-warning-600 hover:text-white dark:peer-checked:text-white peer-checked:text-white hover:bg-warning-600 peer-checked:bg-warning-600 rounded-s-lg">
                            Radio 1
                        </label>
                    </li>
                    <li>
                        <input type="radio" name="radio" id="radio-2" class="hidden peer">
                        <label for="radio-2" class="w-full px-5 py-[11px] text-warning-600 border border-warning-600 cursor-pointer peer-checked:border-warning-600 hover:text-white dark:peer-checked:text-white peer-checked:text-white hover:bg-warning-600 peer-checked:bg-warning-600 border-x-0">
                            Radio 2
                        </label>
                    </li>
                    <li>
                        <input type="radio" name="radio" id="radio-3" class="hidden peer">
                        <label for="radio-3" class="w-full px-5 py-[11px] text-warning-600 border border-warning-600 cursor-pointer peer-checked:border-warning-600 hover:text-white dark:peer-checked:text-white peer-checked:text-white hover:bg-warning-600 peer-checked:bg-warning-600 rounded-e-lg">
                            Radio 3
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Buttons Group</h6>
            </div>
            <div class="card-body py-4 px-6 flex flex-wrap items-center gap-5">
                <div class="flex items-center" role="group" aria-label="Default button group">
                    <button type="button" class="bg-primary-600 hover:bg-primary-700 px-5 py-[11px] text-white rounded-s-lg">Left</button>
                    <button type="button" class="bg-primary-600 hover:bg-primary-700 px-5 py-[11px] text-white">Middle</button>
                    <button type="button" class="bg-primary-600 hover:bg-primary-700 px-5 py-[11px] text-white rounded-e-lg">Right</button>
                </div>
                <div class="flex items-center" role="group" aria-label="Default button group">
                    <button type="button" class="bg-primary-600 hover:bg-primary-700 px-5 py-[11px] text-white rounded-s-full">Left</button>
                    <button type="button" class="bg-primary-600 hover:bg-primary-700 px-5 py-[11px] text-white">Middle</button>
                    <button type="button" class="bg-primary-600 hover:bg-primary-700 px-5 py-[11px] text-white rounded-e-full">Right</button>
                </div>
                <div class="flex items-center" role="group" aria-label="Default button group">
                    <button type="button" class="bg-neutral-100 hover:bg-neutral-700 px-5 py-[11px] text-neutral-600 hover:text-white rounded-s-lg">
                        <iconify-icon icon="heroicons:bars-3-bottom-left-16-solid" class="text-xl"></iconify-icon>
                    </button>
                    <button type="button" class="bg-neutral-100 hover:bg-neutral-700 px-5 py-[11px] text-neutral-600 hover:text-white">
                        <iconify-icon icon="fe:bar" class="text-xl"></iconify-icon>
                    </button>
                    <button type="button" class="bg-neutral-100 hover:bg-neutral-700 px-5 py-[11px] text-neutral-600 hover:text-white rounded-e-lg">
                        <iconify-icon icon="heroicons:bars-3-bottom-right-16-solid" class="text-xl"></iconify-icon>
                    </button>
                </div>
                <div class="btn-group" role="group" aria-label="Default button group">
                    <button type="button" class="btn btn-light-100 px-5 py-[13px] rounded-lg text-dark flex">
                    </button>
                    <button type="button" class="btn btn-light-100 px-5 py-[13px] rounded-lg text-dark flex">
                    </button>
                    <button type="button" class="btn btn-light-100 px-5 py-[13px] rounded-lg text-dark flex">
                    </button>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Buttons Group</h6>
            </div>
            <div class="card-body p-6">
                <button type="button" class="btn btn-primary-600 rounded-lg px-5 py-[11px]">Custom Button</button>
            </div>
        </div>

    </div>
    
@endsection