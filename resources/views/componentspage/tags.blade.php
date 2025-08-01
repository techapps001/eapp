@extends('layout.layout')
@php
    $title='Tags';
    $subTitle = 'Components / Tags';
    $script = '<script>
                        $(".remove-tag").on("click", function() {
                            $(this).closest("li").remove();
                        });
            </script>';
@endphp

@section('content')

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Default Tags</h6>
            </div>
            <div class="card-body p-6">
                <ul class="flex flex-wrap items-center gap-4 md:gap-8">
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium">Label</li>
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium">Label</li>
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium">Label</li>
                </ul>
                <ul class="tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5">
                    <li class="text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1">
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                    <li class="text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1">
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                    <li class="text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1">
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Colors tags</h6>
            </div>
            <div class="card-body p-6">
                <ul class="flex flex-wrap items-center gap-4 md:gap-8">
                    <li class="text-white bg-primary-600 border border-primary-600 rounded px-2 py-1.5 text-sm line-height-1 font-medium">Label</li>
                    <li class="text-white bg-purple-600 border border-purple-600 rounded px-2 py-1.5 text-sm line-height-1 font-medium">Label</li>
                    <li class="text-white bg-warning-600 border border-warning-600 rounded px-2 py-1.5 text-sm line-height-1 font-medium">Label</li>
                </ul>
                <ul class="tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5">
                    <li class="text-primary-600 border border-primary-600 rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1">
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                    <li class="dark:text-purple-400 border border-purple-600 rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1">
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                    <li class="text-warning-600 border border-warning-600 rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1">
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Tags With Image</h6>
            </div>
            <div class="card-body p-6">
                <ul class="flex flex-wrap items-center gap-3 sm:gap-5 mt-5">
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2">
                        <img src="{{ asset('assets/images/flags/flag-tag.png') }}" class="w-4 h-4 rounded-full" alt="">
                        Label
                    </li>
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2">
                        <img src="{{ asset('assets/images/flags/flag-tag.png') }}" class="w-4 h-4 rounded-full" alt="">
                        Label
                    </li>
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2">
                        <img src="{{ asset('assets/images/flags/flag-tag.png') }}" class="w-4 h-4 rounded-full" alt="">
                        Label
                    </li>
                </ul>
                <ul class="tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5">
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2">
                        <img src="{{ asset('assets/images/flags/flag-tag.png') }}" class="w-4 h-4 rounded-full" alt="">
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2">
                        <img src="{{ asset('assets/images/flags/flag-tag.png') }}" class="w-4 h-4 rounded-full" alt="">
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2">
                        <img src="{{ asset('assets/images/flags/flag-tag.png') }}" class="w-4 h-4 rounded-full" alt="">
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Tags Indicator </h6>
            </div>
            <div class="card-body p-6">
                <ul class="flex flex-wrap items-center gap-4 md:gap-8">
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2">
                        <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                        Label
                    </li>
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2">
                        <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                        Label
                    </li>
                    <li class="text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2">
                        <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                        Label
                    </li>
                </ul>
                <ul class="tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5">
                    <li class="text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-2">
                        <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                    <li class="text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-2">
                        <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                    <li class="text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-2">
                        <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                        Label
                        <button class="remove-tag text-lg flex justify-center items-center" type="button"><iconify-icon icon="iconamoon:sign-times-light" class="icon line-height-1"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection
