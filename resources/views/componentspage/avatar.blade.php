@extends('layout.layout')
@php
    $title='Avatars';
    $subTitle = 'Components / Avatars';
@endphp

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <div class="col-span-12 xl:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Avatar Sizes</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-3">
                        <img src="{{ asset('assets/images/avatar/avatar1.png') }}" class="w-6 h-6 rounded-full object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar1.png') }}" class="w-8 h-8 rounded-full object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar1.png') }}" class="w-10 h-10 rounded-full object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar1.png') }}" class="w-[44px] h-[44px] rounded-full object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar1.png') }}" class="w-[56px] h-[56px] rounded-full object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar1.png') }}" class="w-[64px] h-[64px] rounded-full object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar1.png') }}" class="w-[72px] h-[72px] rounded-full object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar1.png') }}" class="w-[80px] h-[80px] rounded-full object-fit-cover" alt="Avatar">
                    </div>
                    <div class="flex items-center flex-wrap gap-3 mt-6">
                        <img src="{{ asset('assets/images/avatar/avatar2.png') }}" class="w-6 h-6 rounded-lg object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar2.png') }}" class="w-8 h-8 rounded-lg object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar2.png') }}" class="w-10 h-10 rounded-lg object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar2.png') }}" class="w-[44px] h-[44px] rounded-lg object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar2.png') }}" class="w-[56px] h-[56px] rounded-lg object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar2.png') }}" class="w-[64px] h-[64px] rounded-lg object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar2.png') }}" class="w-[72px] h-[72px] rounded-lg object-fit-cover" alt="Avatar">
                        <img src="{{ asset('assets/images/avatar/avatar2.png') }}" class="w-[80px] h-[80px] rounded-lg object-fit-cover" alt="Avatar">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Avatar With content</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-3">
                        <span class="w-6 h-6 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400">24</span>
                        <span class="w-8 h-8 rounded-full object-fit-cover flex justify-center items-center font-semibold text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400">32</span>
                        <span class="w-10 h-10 rounded-full object-fit-cover flex justify-center items-center font-semibold text-sm bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400">40</span>
                        <span class="w-[44px] h-[44px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-base bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400">44</span>
                        <span class="w-[56px] h-[56px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-lg bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400">56</span>
                        <span class="w-[64px] h-[64px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-xl bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400">64</span>
                    </div>
                    <div class="flex items-center flex-wrap gap-3 mt-6">
                        <span class="w-6 h-6 rounded object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400">24</span>
                        <span class="w-8 h-8 rounded-lg object-fit-cover flex justify-center items-center font-semibold text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400">32</span>
                        <span class="w-10 h-10 rounded-lg object-fit-cover flex justify-center items-center font-semibold text-sm bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400">40</span>
                        <span class="w-[44px] h-[44px] rounded-lg object-fit-cover flex justify-center items-center font-semibold text-base bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400">44</span>
                        <span class="w-[56px] h-[56px] rounded-lg object-fit-cover flex justify-center items-center font-semibold text-lg bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400">56</span>
                        <span class="w-[64px] h-[64px] rounded-lg object-fit-cover flex justify-center items-center font-semibold text-xl bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400">64</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Avatar Shape Style</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap justify-between gap-3">
                        <img src="{{ asset('assets/images/avatar/avatar-shape1.png') }}" alt="" class="w-[120px] h-[120px] rounded-lg object-fit-cover">
                        <img src="{{ asset('assets/images/avatar/avatar-shape2.png') }}" alt="" class="w-[120px] h-[120px] rounded-full object-fit-cover">
                        <img src="{{ asset('assets/images/avatar/avatar-shape3.png') }}" alt="" class="w-auto h-[120px]  object-fit-cover">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0 h-full">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Status Indicator</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-3">
                        <div class="relative">
                            <img src="{{ asset('assets/images/avatar/status-avatar.png') }}" class="w-6 h-6 rounded-full object-fit-cover" alt="Avatar">
                            <span class="w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]"></span>
                        </div>
                        <div class="relative">
                            <img src="{{ asset('assets/images/avatar/status-avatar.png') }}" class="w-8 h-8 rounded-full object-fit-cover" alt="Avatar">
                            <span class="w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]"></span>
                        </div>
                        <div class="relative">
                            <img src="{{ asset('assets/images/avatar/status-avatar.png') }}" class="w-10 h-10 rounded-full object-fit-cover" alt="Avatar">
                            <span class="w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]"></span>
                        </div>
                        <div class="relative">
                            <img src="{{ asset('assets/images/avatar/status-avatar.png') }}" class="w-[44px] h-[44px] rounded-full object-fit-cover" alt="Avatar">
                            <span class="w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]"></span>
                        </div>
                    </div>
                    <div class="flex items-center flex-wrap gap-3 mt-6">
                        <div class="relative">
                            <span class="w-6 h-6 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400">24</span>
                            <span class="w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]"></span>
                        </div>
                        <div class="relative">
                            <span class="w-8 h-8 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400">24</span>
                            <span class="w-2 h-2 bg-purple-600 border br-white rounded-full absolute end-0 bottom-[3px]"></span>
                        </div>
                        <div class="relative">
                            <span class="w-10 h-10 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400">24</span>
                            <span class="w-2 h-2 bg-success-600 border br-white rounded-full absolute end-0 bottom-[3px]"></span>
                        </div>
                        <div class="relative">
                            <span class="w-[44px] h-[44px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400">24</span>
                            <span class="w-2 h-2 bg-info-600 border br-white rounded-full absolute end-0 bottom-[3px]"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0 h-full">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Avatar Group</h6>
                </div>
                <div class="card-body p-6">
                    <div class="flex -space-x-2 overflow-hidden">
                        <img src="{{ asset('assets/images/avatar/avatar-group1.png') }}" alt="" class="w-6 h-6 rounded-full object-fit-cover relative">
                        <img src="{{ asset('assets/images/avatar/avatar-group2.png') }}" alt="" class="w-6 h-6 rounded-full object-fit-cover relative ms--10px">
                        <img src="{{ asset('assets/images/avatar/avatar-group3.png') }}" alt="" class="w-6 h-6 rounded-full object-fit-cover relative ms--10px">
                        <img src="{{ asset('assets/images/avatar/avatar-group4.png') }}" alt="" class="w-6 h-6 rounded-full object-fit-cover relative ms--10px">
                        <img src="{{ asset('assets/images/avatar/avatar-group5.png') }}" alt="" class="w-6 h-6 rounded-full object-fit-cover relative ms--10px">
                        <img src="{{ asset('assets/images/avatar/avatar-group6.png') }}" alt="" class="w-6 h-6 rounded-full object-fit-cover relative ms--10px">
                        <img src="{{ asset('assets/images/avatar/avatar-group6.png') }}" alt="" class="w-6 h-6 rounded-full object-fit-cover relative ms--10px">
                        <span class="w-6 h-6 rounded-full object-fit-cover relative ms--10px border bg-neutral-100 text-neutral-600 dark:bg-neutral-600 dark:text-white dark:border-neutral-500 text-xs inline-flex items-center justify-center">
                            +5
                        </span>
                        <button type="button" class="w-6 h-6 rounded-full border border-primary-600 text-primary-600 ms-8 border-dashed text-secondary-light text-xs inline-flex items-center justify-center">
                            <iconify-icon icon="ic:baseline-plus" class=""></iconify-icon>
                        </button>
                    </div>
                    <div class="flex -space-x-2 overflow-hidden mt-6">
                        <img src="{{ asset('assets/images/avatar/avatar-group1.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover relative">
                        <img src="{{ asset('assets/images/avatar/avatar-group2.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover relative ms--10px">
                        <img src="{{ asset('assets/images/avatar/avatar-group3.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover relative ms--10px">
                        <img src="{{ asset('assets/images/avatar/avatar-group4.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover relative ms--10px">
                        <img src="{{ asset('assets/images/avatar/avatar-group5.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover relative ms--10px">
                        <img src="{{ asset('assets/images/avatar/avatar-group6.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover relative ms--10px">
                        <img src="{{ asset('assets/images/avatar/avatar-group6.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover relative ms--10px">
                        <span class="w-8 h-8 rounded-full object-fit-cover relative ms--10px border bg-neutral-100 text-neutral-600 dark:bg-neutral-600 dark:text-white dark:border-neutral-500 text-xs inline-flex items-center justify-center">
                            +5
                        </span>
                        <button type="button" class="w-8 h-8 rounded-full border border-primary-600 text-primary-600 ms-8 border-dashed text-secondary-light text-lg inline-flex items-center justify-center">
                            <iconify-icon icon="ic:baseline-plus" class=""></iconify-icon>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0 h-full">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Images With content</h6>
                </div>
                <div class="card-body p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/avatar/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover shrink-0">
                            <div class="grow inline-flex flex-col">
                                <h6 class="text-sm mb-0">Will mart</h6>
                                <span class="text-xs text-secondary-light">random@gmail.com</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/avatar/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover shrink-0">
                            <div class="grow inline-flex flex-col">
                                <h6 class="text-sm mb-0">Will mart</h6>
                                <span class="text-xs text-secondary-light">random@gmail.com</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/avatar/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover shrink-0">
                            <div class="grow inline-flex flex-col">
                                <h6 class="text-sm mb-0">Sangeeta</h6>
                                <span class="text-xs text-secondary-light">random@gmail.com</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/avatar/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full object-fit-cover shrink-0">
                            <div class="grow inline-flex flex-col">
                                <h6 class="text-sm mb-0">Sangeeta</h6>
                                <span class="text-xs text-secondary-light">random@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
