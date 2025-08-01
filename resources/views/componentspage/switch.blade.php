@extends('layout.layout')
@php
    $title='Radio';
    $subTitle = 'Components / Radio';
@endphp

@section('content')

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Default Radio</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex items-center flex-wrap gap-7">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>
                </div>

                <div class="flex items-center flex-wrap gap-7 mt-6">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Switch Disable</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex items-center flex-wrap gap-7">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked disabled>
                        <span class="relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked disabled>
                        <span class="relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked disabled>
                        <span class="relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked disabled>
                        <span class="relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>
                </div>

                <div class="flex items-center flex-wrap gap-7 mt-6">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" disabled>
                        <span class="relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" disabled>
                        <span class="relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" disabled>
                        <span class="relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" disabled>
                        <span class="relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Switch With Tex</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex items-center flex-wrap gap-7">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300">Yes</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300">No</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Switch Horizontal</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex items-center flex-wrap gap-7">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300">Horizontal 1</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300">Horizontal 2</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300">Horizontal 3</span>
                    </label>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300">Horizontal 4</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

@endsection
