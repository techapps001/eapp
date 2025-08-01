@extends('layout.layout')
@php
    $title='Dropdown';
    $subTitle = 'Components / Dropdown';
@endphp

@section('content')

    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Basic Dropdown Primary</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">

                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="defaultActionPill" data-dropdown-placement="bottom" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                            Default Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="defaultActionPill" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="outlineActionPill" data-dropdown-placement="bottom" class="text-primary-600 focus:bg-primary-600 hover:bg-primary-700 border border-primary-600 hover:text-white focus:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:text-primary-400 dark:hover:text-white dark:focus:text-white dark:focus:ring-primary-800" type="button">
                            Outline Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="outlineActionPill" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="focusActionPill" data-dropdown-placement="bottom" class="bg-primary-50 hover:bg-primary-600 focus:ring-4 focus:outline-none hover:text-white text-primary-600 focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-primary-600/25 dark:text-primary-400 dark:hover:text-white dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                            Focus Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="focusActionPill" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="focusActionPillTwo" data-dropdown-placement="bottom" class="hover:bg-primary-600 focus:ring-4 focus:outline-none hover:text-white text-primary-600 focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:text-primary-400 dark:hover:text-white dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                            Focus Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="focusActionPillTwo" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                </div>
            </div>
        </div>

        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Dropup Primary</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">

                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="defaultActionPillDroppop" data-dropdown-placement="top" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                            Default Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="defaultActionPillDroppop" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="outlineActionPillDroppop" data-dropdown-placement="top" class="text-primary-600 focus:bg-primary-600 hover:bg-primary-700 border border-primary-600 hover:text-white focus:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:text-primary-400 dark:hover:text-white dark:focus:text-white dark:focus:ring-primary-800" type="button">
                            Outline Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="outlineActionPillDroppop" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="focusActionPillDroppop" data-dropdown-placement="top" class="bg-primary-50 hover:bg-primary-600 focus:ring-4 focus:outline-none hover:text-white text-primary-600 focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-primary-600/25 dark:text-primary-400 dark:hover:text-white dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                            Focus Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="focusActionPillDroppop" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="focusActionPillTwoDroppop" data-dropdown-placement="top" class="hover:bg-primary-600 focus:ring-4 focus:outline-none hover:text-white text-primary-600 focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:text-primary-400 dark:hover:text-white dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                            Focus Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="focusActionPillTwoDroppop" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                </div>
            </div>
        </div>

        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Dropright Warning</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">

                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="defaultActionPillDropRight" data-dropdown-placement="right" class="text-white bg-warning-600 hover:bg-warning-700 focus:ring-4 focus:outline-none focus:ring-warning-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-warning-600 dark:hover:bg-warning-700 dark:focus:ring-warning-800" type="button">
                            Default Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="defaultActionPillDropRight" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">warning Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="outlineActionPillDropRight" data-dropdown-placement="right" class="text-warning-600 focus:bg-warning-600 hover:bg-warning-700 border border-warning-600 hover:text-white focus:text-white focus:ring-4 focus:outline-none focus:ring-warning-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:text-warning-400 dark:hover:text-white dark:focus:text-white dark:focus:ring-warning-800" type="button">
                            Outline Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="outlineActionPillDropRight" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">warning Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="focusActionPillDropRight" data-dropdown-placement="right" class="bg-warning-100 hover:bg-warning-600 focus:ring-4 focus:outline-none hover:text-white text-warning-600 focus:ring-warning-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-warning-600/25 dark:text-warning-400 dark:hover:text-white dark:hover:bg-warning-700 dark:focus:ring-warning-800" type="button">
                            Focus Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="focusActionPillDropRight" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">warning Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="focusActionPillTwoDropRight" data-dropdown-placement="right" class="hover:bg-warning-600 focus:ring-4 focus:outline-none hover:text-white text-warning-600 focus:ring-warning-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:text-warning-400 dark:hover:text-white dark:hover:bg-warning-700 dark:focus:ring-warning-800" type="button">
                            Focus Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="focusActionPillTwoDropRight" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">warning Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                </div>
            </div>
        </div>

        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Dropright Warning</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">

                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="defaultActionPillDropLeft" data-dropdown-placement="left" class="text-white bg-warning-600 hover:bg-warning-700 focus:ring-4 focus:outline-none focus:ring-warning-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-warning-600 dark:hover:bg-warning-700 dark:focus:ring-warning-800" type="button">
                            <svg class="w-2.5 h-2.5 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            Default Action
                        </button>
                        <!-- Dropdown menu -->
                        <div id="defaultActionPillDropLeft" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">warning Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="outlineActionPillDropLeft" data-dropdown-placement="left" class="text-warning-600 focus:bg-warning-600 hover:bg-warning-700 border border-warning-600 hover:text-white focus:text-white focus:ring-4 focus:outline-none focus:ring-warning-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:text-warning-400 dark:hover:text-white dark:focus:text-white dark:focus:ring-warning-800" type="button">
                            <svg class="w-2.5 h-2.5 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            Outline Action
                        </button>
                        <!-- Dropdown menu -->
                        <div id="outlineActionPillDropLeft" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">warning Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="focusActionPillDropLeft" data-dropdown-placement="left" class="bg-warning-100 hover:bg-warning-600 focus:ring-4 focus:outline-none hover:text-white text-warning-600 focus:ring-warning-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-warning-600/25 dark:text-warning-400 dark:hover:text-white dark:hover:bg-warning-700 dark:focus:ring-warning-800" type="button">
                            <svg class="w-2.5 h-2.5 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            Focus Action
                        </button>
                        <!-- Dropdown menu -->
                        <div id="focusActionPillDropLeft" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">warning Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="focusActionPillTwoDropLeft" data-dropdown-placement="left" class="hover:bg-warning-600 focus:ring-4 focus:outline-none hover:text-white text-warning-600 focus:ring-warning-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:text-warning-400 dark:hover:text-white dark:hover:bg-warning-700 dark:focus:ring-warning-800" type="button">
                            <svg class="w-2.5 h-2.5 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            Focus Action
                        </button>
                        <!-- Dropdown menu -->
                        <div id="focusActionPillTwoDropLeft" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">warning Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                </div>
            </div>
        </div>

        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Placement</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">

                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="defaultActionPillDropPlacement" data-dropdown-placement="bottom" class="text-white bg-success-600 hover:bg-success-700 focus:ring-4 focus:outline-none focus:ring-success-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-success-600 dark:hover:bg-success-700 dark:focus:ring-success-800" type="button">
                            Default Action
                        </button>
                        <!-- Dropdown menu -->
                        <div id="defaultActionPillDropPlacement" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">success Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="outlineActionPillDropPlacement" data-dropdown-placement="bottom" class="text-success-600 focus:bg-success-600 hover:bg-success-700 border border-success-600 hover:text-white focus:text-white focus:ring-4 focus:outline-none focus:ring-success-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:text-success-400 dark:hover:text-white dark:focus:text-white dark:focus:ring-success-800" type="button">
                            Outline Action
                        </button>
                        <!-- Dropdown menu -->
                        <div id="outlineActionPillDropPlacement" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">success Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="focusActionPillDropPlacement" data-dropdown-placement="bottom" class="bg-success-100 hover:bg-success-600 focus:ring-4 focus:outline-none hover:text-white text-success-600 focus:ring-success-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-success-600/25 dark:text-success-400 dark:hover:text-white dark:hover:bg-success-700 dark:focus:ring-success-800" type="button">
                            Focus Action
                        </button>
                        <!-- Dropdown menu -->
                        <div id="focusActionPillDropPlacement" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">success Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->

                </div>
            </div>
        </div>

        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Grouped Dropdown Buttons</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">

                    <!-- Dropdown Start -->
                    <div class="">
                        <div class="flex">
                            <button class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-s-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                                1
                            </button>
                            <button class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium text-base px-5 py-4 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                                2
                            </button>
                            <button data-dropdown-toggle="defaultActionPillDropGroup" data-dropdown-placement="bottom" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-e-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                                Default Action
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Dropdown menu -->
                        <div id="defaultActionPillDropGroup" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <div class="flex">
                            <button class="hover:bg-warning-600 border hover:text-white border-warning-600 text-warning-600  focus:ring-4 focus:outline-none focus:ring-warning-300 font-medium rounded-s-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-warning-600 dark:hover:bg-warning-700 dark:focus:ring-warning-800" type="button">
                                1
                            </button>
                            <button class="hover:bg-warning-600 border border-x-0 hover:text-white border-warning-600 text-warning-600  focus:ring-4 focus:outline-none focus:ring-warning-300 font-medium text-base px-5 py-4 text-center inline-flex items-center dark:bg-warning-600 dark:hover:bg-warning-700 dark:focus:ring-warning-800" type="button">
                                2
                            </button>
                            <button data-dropdown-toggle="outlineActionPillDropGroup" data-dropdown-placement="bottom" class="hover:bg-warning-600 border hover:text-white border-warning-600 text-warning-600  focus:ring-4 focus:outline-none focus:ring-warning-300 font-medium rounded-e-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-warning-600 dark:hover:bg-warning-700 dark:focus:ring-warning-800" type="button">
                                Default Action
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Dropdown menu -->
                        <div id="outlineActionPillDropGroup" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">success Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->

                </div>
            </div>
        </div>

        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Custom Dropdown</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center justify-between gap-3">

                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="defaultActionPillDropCustom" data-dropdown-placement="right" class="text-neutral-600 text-xl d-flex items-center justify-center w-10 h-10 ring-4 ring-transparent focus:ring-primary-300 rounded-lg" type="button">
                            <iconify-icon icon="entypo:dots-three-vertical" class="menu-icon"></iconify-icon>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="defaultActionPillDropCustom" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">success Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="outlineActionPillDropCustom" data-dropdown-placement="bottom" class="text-neutral-600 text-xl d-flex items-center justify-center w-10 h-10 ring-4 ring-transparent focus:ring-primary-300 rounded-lg" type="button">
                            <iconify-icon icon="ph:dots-three-outline-fill" class="menu-icon"></iconify-icon>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="outlineActionPillDropCustom" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">success Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="focusActionPillDropCustom" data-dropdown-placement="bottom" class="text-neutral-600 text-xl d-flex items-center justify-center w-10 h-10 ring-4 ring-transparent focus:ring-primary-300 rounded-lg" type="button">
                            <iconify-icon icon="entypo:dots-three-vertical" class="menu-icon"></iconify-icon>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="focusActionPillDropCustom" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">success Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="lastActionPillDropCustom" data-dropdown-placement="bottom" class="text-neutral-600 text-xl d-flex items-center justify-center w-10 h-10 ring-4 ring-transparent focus:ring-primary-300 rounded-lg" type="button">
                            <iconify-icon icon="ph:dots-three-outline-fill" class="menu-icon"></iconify-icon>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="lastActionPillDropCustom" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">success Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->

                </div>
            </div>
        </div>

        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Dropdown Sizes</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex flex-wrap items-center gap-3">

                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="defaultActionPillOneee" data-dropdown-placement="bottom" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-4 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                            Default Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="defaultActionPillOneee" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="defaultActionPilltwoo" data-dropdown-placement="bottom" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-3 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                            Default Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="defaultActionPilltwoo" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->
                    <!-- Dropdown Start -->
                    <div class="">
                        <button data-dropdown-toggle="defaultActionPillThreee" data-dropdown-placement="bottom" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-base px-5 py-2 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                            Default Action
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="defaultActionPillThreee" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-2xl w-44 dark:bg-gray-700">
                            <ul class="py-2 text-base text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Primary Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something Else</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown End -->

                </div>
            </div>
        </div>

    </div>

@endsection
