@extends('layout.layout')
@php
    $title='Dashboard';
    $subTitle = 'CRM';
    $script = '<script src="' . asset('assets/js/homeTwoChart.js') . '"></script> ';
@endphp

@section('content')

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-6">
        <div class="lg:col-span-12 2xl:col-span-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-primary-600/10 to-bg-white">
                    <div class="card-body p-0">
                        <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                            <div class="flex items-center gap-2">
                                <span class="mb-0 w-[44px] h-[44px] bg-primary-600 shrink-0 text-white flex justify-center items-center rounded-full h6">
                                    <iconify-icon icon="mingcute:user-follow-fill" class="icon"></iconify-icon>
                                </span>
                                <div>
                                    <span class="mb-2 font-medium text-secondary-light text-sm">New Users</span>
                                    <h6 class="font-semibold">15,000</h6>
                                </div>
                            </div>

                            <div id="new-user-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                        <p class="text-sm mb-0">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+200</span> this week</p>
                    </div>
                </div>

                <div class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-success-600/10 to-bg-white">
                    <div class="card-body p-0">
                        <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                            <div class="flex items-center gap-2">
                                <span class="mb-0 w-[44px] h-[44px] bg-success-600 shrink-0 text-white flex justify-center items-center rounded-full h6">
                                    <iconify-icon icon="mingcute:user-follow-fill" class="icon"></iconify-icon>
                                </span>
                                <div>
                                    <span class="mb-2 font-medium text-secondary-light text-sm">Active Users</span>
                                    <h6 class="font-semibold">8,000</h6>
                                </div>
                            </div>

                            <div id="active-user-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                        <p class="text-sm mb-0">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+200</span> this week</p>
                    </div>
                </div>

                <div class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-warning-600/10 to-bg-white">
                    <div class="card-body p-0">
                        <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                            <div class="flex items-center gap-2">
                                <span class="mb-0 w-[44px] h-[44px] bg-warning-600 text-white shrink-0 flex justify-center items-center rounded-full h6">
                                    <iconify-icon icon="iconamoon:discount-fill" class="icon"></iconify-icon>
                                </span>
                                <div>
                                    <span class="mb-2 font-medium text-secondary-light text-sm">Total Sales</span>
                                    <h6 class="font-semibold">$5,00,000</h6>
                                </div>
                            </div>

                            <div id="total-sales-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                        <p class="text-sm mb-0">Increase by  <span class="bg-danger-100 dark:bg-danger-600/25 px-1 py-px rounded font-medium text-danger-600 dark:text-danger-400 text-sm">-$10k</span> this week</p>
                    </div>
                </div>

                <div class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-purple-600/10 to-bg-white">
                    <div class="card-body p-0">
                        <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                            <div class="flex items-center gap-2">
                                <span class="mb-0 w-[44px] h-[44px] bg-purple-600 text-white shrink-0 flex justify-center items-center rounded-full h6">
                                    <iconify-icon icon="mdi:message-text" class="icon"></iconify-icon>
                                </span>
                                <div>
                                    <span class="mb-2 font-medium text-secondary-light text-sm">Conversion</span>
                                    <h6 class="font-semibold">25%</h6>
                                </div>
                            </div>

                            <div id="conversion-user-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                        <p class="text-sm mb-0">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+5%</span> this week</p>
                    </div>
                </div>

                <div class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-pink-600/10 to-bg-white">
                    <div class="card-body p-0">
                        <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                            <div class="flex items-center gap-2">
                                <span class="mb-0 w-[44px] h-[44px] bg-pink-600 text-white shrink-0 flex justify-center items-center rounded-full h6">
                                    <iconify-icon icon="mdi:leads" class="icon"></iconify-icon>
                                </span>
                                <div>
                                    <span class="mb-2 font-medium text-secondary-light text-sm">Leads</span>
                                    <h6 class="font-semibold">250</h6>
                                </div>
                            </div>

                            <div id="leads-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                        <p class="text-sm mb-0">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+20</span> this week</p>
                    </div>
                </div>

                <div class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-cyan-600/10 to-bg-white">
                    <div class="card-body p-0">
                        <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                            <div class="flex items-center gap-2">
                                <span class="mb-0 w-[44px] h-[44px] bg-cyan-600 text-white shrink-0 flex justify-center items-center rounded-full h6">
                                    <iconify-icon icon="streamline:bag-dollar-solid" class="icon"></iconify-icon>
                                </span>
                                <div>
                                    <span class="mb-2 font-medium text-secondary-light text-sm">Total Profit</span>
                                    <h6 class="font-semibold">$3,00,700</h6>
                                </div>
                            </div>

                            <div id="total-profit-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                        </div>
                        <p class="text-sm mb-0">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+$15k</span> this week</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Revenue Growth start -->
        <div class="lg:col-span-12 2xl:col-span-4">
            <div class="card h-full rounded-lg border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <div>
                            <h6 class="mb-2 font-bold text-lg">Revenue Growth</h6>
                            <span class="text-sm font-medium text-secondary-light">Weekly Report</span>
                        </div>
                        <div class="text-end">
                            <h6 class="mb-2 font-bold text-lg">$50,000.00</h6>
                            <span class="bg-success-100 dark:bg-success-600/25 px-3 py-1 rounded font-medium text-success-600 dark:text-success-400 text-sm">$10k</span>
                        </div>
                    </div>
                    <div id="revenue-chart" class="mt-0"></div>
                </div>
            </div>
        </div>
        <!-- Revenue Growth End -->
        <!-- Earning Static start -->
        <div class="lg:col-span-12 2xl:col-span-8">
            <div class="card h-full rounded-lg border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <div>
                            <h6 class="mb-2 font-bold text-lg">Earning Statistic</h6>
                            <span class="text-sm font-medium text-secondary-light">Yearly earning overview</span>
                        </div>
                        <div class="">
                            <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                <option>Yearly</option>
                                <option>Monthly</option>
                                <option>Weekly</option>
                                <option>Today</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-5 flex justify-center flex-wrap gap-3">

                        <div class="inline-flex items-center gap-2 p-2 rounded-lg border transition hover:border-primary-600 border-neutral-200 dark:border-neutral-500 dark:hover:border-primary-600 pe-[46px] br-hover-primary group">
                            <span class="bg-neutral-100 dark:bg-neutral-600 w-[44px] h-[44px] text-2xl transition rounded-lg flex justify-center items-center text-secondary-light group-hover:text-white group-hover:bg-primary-600">
                                <iconify-icon icon="fluent:cart-16-filled" class="icon"></iconify-icon>
                            </span>
                            <div>
                                <span class="text-secondary-light text-sm font-medium">Sales</span>
                                <h6 class="text-base font-semibold mb-0">$200k</h6>
                            </div>
                        </div>

                        <div class="inline-flex items-center gap-2 p-2 rounded-lg border transition hover:border-primary-600 border-neutral-200 dark:border-neutral-500 dark:hover:border-primary-600 pe-[46px] br-hover-primary group">
                            <span class="bg-neutral-100 dark:bg-neutral-600 w-[44px] h-[44px] text-2xl transition rounded-lg flex justify-center items-center text-secondary-light group-hover:text-white group-hover:bg-primary-600">
                                <iconify-icon icon="uis:chart" class="icon"></iconify-icon>
                            </span>
                            <div>
                                <span class="text-secondary-light text-sm font-medium">Income</span>
                                <h6 class="text-base font-semibold mb-0">$200k</h6>
                            </div>
                        </div>

                        <div class="inline-flex items-center gap-2 p-2 rounded-lg border transition hover:border-primary-600 border-neutral-200 dark:border-neutral-500 dark:hover:border-primary-600 pe-[46px] br-hover-primary group">
                            <span class="bg-neutral-100 dark:bg-neutral-600 w-[44px] h-[44px] text-2xl transition rounded-lg flex justify-center items-center text-secondary-light group-hover:text-white group-hover:bg-primary-600">
                                <iconify-icon icon="ph:arrow-fat-up-fill" class="icon"></iconify-icon>
                            </span>
                            <div>
                                <span class="text-secondary-light text-sm font-medium">Profit</span>
                                <h6 class="text-base font-semibold mb-0">$200k</h6>
                            </div>
                        </div>
                    </div>

                    <div id="barChart"></div>
                </div>
            </div>
        </div>
        <!-- Earning Static End -->
        <!-- Campaign Static start -->
        <div class="lg:col-span-12 2xl:col-span-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="lg:col-span-6 2xl:col-span-12 col-xxl-12 col-sm-6">
                    <div class="card h-full rounded-lg border-0">
                        <div class="card-body p-6">
                            <div class="flex items-center flex-wrap gap-2 justify-between">
                                <h6 class="mb-2 font-bold text-lg">Campaigns</h6>
                                <div class="">
                                    <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                        <option>Yearly</option>
                                        <option>Monthly</option>
                                        <option>Weekly</option>
                                        <option>Today</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="flex items-center justify-between gap-3 mb-3">
                                    <div class="flex items-center">
                                        <span class="text-2xl line-height-1 flex align-content-center shrink-0 text-orange-500 dark:text-orange-500">
                                            <iconify-icon icon="majesticons:mail" class="icon"></iconify-icon>
                                        </span>
                                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm ps-4">Email</span>
                                    </div>
                                    <div class="flex items-center gap-2 w-full">
                                        <div class="ms-auto">
                                            <div class="w-[66px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                                <div class="bg-orange-500 h-2.5 rounded-full" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <span class="text-secondary-light font-xs font-semibold">80%</span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between gap-3 mb-3">
                                    <div class="flex items-center">
                                        <span class="text-2xl line-height-1 flex align-content-center shrink-0 text-success-500 dark:text-success-500">
                                            <iconify-icon icon="eva:globe-2-fill" class="icon"></iconify-icon>
                                        </span>
                                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm ps-4">Website</span>
                                    </div>
                                    <div class="flex items-center gap-2 w-full">
                                        <div class="ms-auto">
                                            <div class="w-[66px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                                <div class="bg-success-500 h-2.5 rounded-full" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <span class="text-secondary-light font-xs font-semibold">80%</span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between gap-3 mb-3">
                                    <div class="flex items-center">
                                        <span class="text-2xl line-height-1 flex align-content-center shrink-0 text-blue-600 dark:text-blue-500">
                                            <iconify-icon icon="fa6-brands:square-facebook" class="icon"></iconify-icon>
                                        </span>
                                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm ps-4">Facebook</span>
                                    </div>
                                    <div class="flex items-center gap-2 w-full">
                                        <div class="ms-auto">
                                            <div class="w-[66px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <span class="text-secondary-light font-xs font-semibold">80%</span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center">
                                        <span class="text-2xl line-height-1 flex align-content-center shrink-0 text-purple-600 dark:text-purple-500">
                                            <iconify-icon icon="fluent:location-off-20-filled" class="icon"></iconify-icon>
                                        </span>
                                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm ps-4">Email</span>
                                    </div>
                                    <div class="flex items-center gap-2 w-full">
                                        <div class="ms-auto">
                                            <div class="w-[66px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                                <div class="bg-purple-600 h-2.5 rounded-full" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <span class="text-secondary-light font-xs font-semibold">80%</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6 2xl:col-span-12 col-xxl-12 col-sm-6">
                    <div class="card h-full rounded-lg border-0 overflow-hidden">
                        <div class="card-body p-6">
                            <div class="flex items-center flex-wrap gap-2 justify-between">
                                <h6 class="mb-2 font-bold text-lg">Customer Overview</h6>
                                <div class="">
                                    <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                        <option>Yearly</option>
                                        <option>Monthly</option>
                                        <option>Weekly</option>
                                        <option>Today</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-center mt-4">
                                <ul class="shrink-0">
                                    <li class="flex items-center gap-2 mb-7">
                                        <span class="w-3 h-3 rounded-full bg-success-600"></span>
                                        <span class="text-secondary-light text-sm font-medium">Total: 400</span>
                                    </li>
                                    <li class="flex items-center gap-2 mb-7">
                                        <span class="w-3 h-3 rounded-full bg-warning-600"></span>
                                        <span class="text-secondary-light text-sm font-medium">New: 400</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="w-3 h-3 rounded-full bg-primary-600"></span>
                                        <span class="text-secondary-light text-sm font-medium">Active: 1400</span>
                                    </li>
                                </ul>
                                <div id="donutChart" class="grow apexcharts-tooltip-z-none title-style circle-none"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Campaign Static End -->
        <!-- Client Payment Status Start -->
        <div class="lg:col-span-6 2xl:col-span-4">
            <div class="card h-full rounded-lg border-0">
                <div class="card-body p-6">
                    <h6 class="mb-2 font-bold text-lg">Client Payment Status</h6>
                    <span class="text-sm font-medium text-secondary-light">Weekly Report</span>

                    <ul class="flex flex-wrap items-center justify-center mt-8">
                        <li class="flex items-center gap-2 me-7">
                            <span class="w-3 h-3 rounded-full bg-success-600"></span>
                            <span class="text-secondary-light text-sm font-medium">Paid: 400</span>
                        </li>
                        <li class="flex items-center gap-2 me-7">
                            <span class="w-3 h-3 rounded-full bg-info-600"></span>
                            <span class="text-secondary-light text-sm font-medium">Pending: 400</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-warning-600"></span>
                            <span class="text-secondary-light text-sm font-medium">Overdue: 1400</span>
                        </li>
                    </ul>
                    <div class="mt-[60px]">
                        <div id="paymentStatusChart" class="margin-16-minus"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Payment Status End -->
        <!-- Country Status Start -->
        <div class="lg:col-span-6 2xl:col-span-4">
            <div class="card rounded-lg border-0">

                <div class="card-body">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="mb-2 font-bold text-lg">Countries Status</h6>
                        <div class="">
                            <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                <option>Yearly</option>
                                <option>Monthly</option>
                                <option>Weekly</option>
                                <option>Today</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id="world-map" class="h-[200px] bg-neutral-100 dark:bg-neutral-600/30"></div>

                <div class="card-body p-6 max-h-[266px] scroll-sm overflow-y-auto">
                    <div class="">

                        <div class="flex items-center justify-between gap-3 mb-3 pb-2">
                            <div class="flex items-center w-full">
                                <img src="{{ asset('assets/images/flags/flag1.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow">
                                    <h6 class="text-sm mb-0">USA</h6>
                                    <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <div class="w-[66px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                    <div class="bg-primary-600 h-2.5 rounded-full" style="width: 80%"></div>
                                </div>
                                <span class="text-secondary-light font-xs font-semibold">80%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-3 pb-2">
                            <div class="flex items-center w-full">
                                <img src="{{ asset('assets/images/flags/flag2.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow">
                                    <h6 class="text-sm mb-0">Japan</h6>
                                    <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <div class="w-[66px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                    <div class="bg-orange-500 h-2.5 rounded-full" style="width: 60%"></div>
                                </div>
                                <span class="text-secondary-light font-xs font-semibold">60%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-3 pb-2">
                            <div class="flex items-center w-full">
                                <img src="{{ asset('assets/images/flags/flag3.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow">
                                    <h6 class="text-sm mb-0">France</h6>
                                    <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <div class="w-[66px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                    <div class="bg-warning-600 h-2.5 rounded-full" style="width: 49%"></div>
                                </div>
                                <span class="text-secondary-light font-xs font-semibold">49%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center w-full">
                                <img src="{{ asset('assets/images/flags/flag4.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow">
                                    <h6 class="text-sm mb-0">Germany</h6>
                                    <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <div class="w-[66px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                    <div class="bg-success-600 h-2.5 rounded-full" style="width: 100%"></div>
                                </div>
                                <span class="text-secondary-light font-xs font-semibold">100%</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Country Status End -->
        <!-- Top performance Start -->
        <div class="lg:col-span-12 2xl:col-span-4">
            <div class="card border-0 overflow-hidden">

                <div class="card-body">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="mb-2 font-bold text-lg">Top Performer</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>

                    <div class="mt-8">

                        <div class="flex items-center justify-between gap-3 mb-8">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/users/user1.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow">
                                    <h6 class="text-base mb-0">Dianne Russell</h6>
                                    <span class="text-sm text-secondary-light font-medium">Agent ID: 36254</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">60/80</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-8">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/users/user2.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow">
                                    <h6 class="text-base mb-0">Wade Warren</h6>
                                    <span class="text-sm text-secondary-light font-medium">Agent ID: 36254</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">50/70</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-8">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/users/user3.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow">
                                    <h6 class="text-base mb-0">Albert Flores</h6>
                                    <span class="text-sm text-secondary-light font-medium">Agent ID: 36254</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">55/75</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-8">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/users/user4.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow">
                                    <h6 class="text-base mb-0">Bessie Cooper</h6>
                                    <span class="text-sm text-secondary-light font-medium">Agent ID: 36254</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">60/80</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-8">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/users/user5.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow">
                                    <h6 class="text-base mb-0">Arlene McCoy</h6>
                                    <span class="text-sm text-secondary-light font-medium">Agent ID: 36254</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">55/75</span>
                        </div>

                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/users/user1.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow">
                                    <h6 class="text-base mb-0">Arlene McCoy</h6>
                                    <span class="text-sm text-secondary-light font-medium">Agent ID: 36254</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">50/70</span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Top performance End -->
        <!-- Latest Performance Start -->
        <div class="lg:col-span-12 2xl:col-span-6">
            <div class="card h-full border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 ps-0 py-0 pe-6 flex items-center justify-between">
                    <div class="border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                            <li class="" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg transition-colors ease-in-out duration-300 text-neutral-600 dark:text-white" id="todoList-styled-tab" data-tabs-target="#styled-todoList" type="button" role="tab" aria-controls="styled-todoList" aria-selected="false">To Do List</button>
                            </li>
                            <li class="" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg transition-colors ease-in-out duration-300 text-neutral-600 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="recentLead-styled-tab" data-tabs-target="#styled-recentLead" type="button" role="tab" aria-controls="styled-recentLead" aria-selected="false">Recent Leads</button>
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                        View All
                        <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                    </a>
                </div>

                <div class="card-body p-6">
                    <div id="default-styled-tab-content">
                        <div class="hidden rounded-lg" id="styled-todoList" role="tabpanel">
                            <div class="table-responsive scroll-sm">
                                <table class="table bordered-table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Task Name </th>
                                            <th scope="col">Assigned To </th>
                                            <th scope="col">Due Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel Management System</span>
                                                    <span class="text-sm block font-normal text-secondary-light">#5632</span>
                                                </div>
                                            </td>
                                            <td>Kathryn Murphy</td>
                                            <td>27 Mar 2025</td>
                                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span> </td>
                                            <td class="text-center text-neutral-700 text-xl">

                                                <button data-dropdown-toggle="dropdown1" class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white" type="button">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdown1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something else</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel Management System</span>
                                                    <span class="text-sm block font-normal text-secondary-light">#5632</span>
                                                </div>
                                            </td>
                                            <td>Darlene Robertson</td>
                                            <td>27 Mar 2025</td>
                                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span> </td>
                                            <td class="text-center text-neutral-700 text-xl">
                                                <button data-dropdown-toggle="dropdown2" class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white" type="button">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something else</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel Management System</span>
                                                    <span class="text-sm block font-normal text-secondary-light">#5632</span>
                                                </div>
                                            </td>
                                            <td>Courtney Henry</td>
                                            <td>27 Mar 2025</td>
                                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span> </td>
                                            <td class="text-center text-neutral-700 text-xl">
                                                <button data-dropdown-toggle="dropdown3" class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white" type="button">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdown3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something else</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel Management System</span>
                                                    <span class="text-sm block font-normal text-secondary-light">#5632</span>
                                                </div>
                                            </td>
                                            <td>Jenny Wilson</td>
                                            <td>27 Mar 2025</td>
                                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span> </td>
                                            <td class="text-center text-neutral-700 text-xl">
                                                <button data-dropdown-toggle="dropdown4" class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white" type="button">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdown4" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something else</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel Management System</span>
                                                    <span class="text-sm block font-normal text-secondary-light">#5632</span>
                                                </div>
                                            </td>
                                            <td>Leslie Alexander</td>
                                            <td>27 Mar 2025</td>
                                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span> </td>
                                            <td class="text-center text-neutral-700 text-xl">
                                                <button data-dropdown-toggle="dropdown5" class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white" type="button">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdown5" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something else</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-recentLead" role="tabpanel">
                            <div class="table-responsive scroll-sm">
                                <table class="table bordered-table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Task Name </th>
                                            <th scope="col">Assigned To </th>
                                            <th scope="col">Due Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel Management System</span>
                                                    <span class="text-sm block font-normal text-secondary-light">#5632</span>
                                                </div>
                                            </td>
                                            <td>Kathryn Murphy</td>
                                            <td>27 Mar 2025</td>
                                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span> </td>
                                            <td class="text-center text-neutral-700 text-xl">

                                                <button data-dropdown-toggle="dropdown6" class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white" type="button">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdown6" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something else</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel Management System</span>
                                                    <span class="text-sm block font-normal text-secondary-light">#5632</span>
                                                </div>
                                            </td>
                                            <td>Darlene Robertson</td>
                                            <td>27 Mar 2025</td>
                                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span> </td>
                                            <td class="text-center text-neutral-700 text-xl">
                                                <button data-dropdown-toggle="dropdown7" class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white" type="button">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdown7" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something else</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel Management System</span>
                                                    <span class="text-sm block font-normal text-secondary-light">#5632</span>
                                                </div>
                                            </td>
                                            <td>Courtney Henry</td>
                                            <td>27 Mar 2025</td>
                                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span> </td>
                                            <td class="text-center text-neutral-700 text-xl">
                                                <button data-dropdown-toggle="dropdown8" class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white" type="button">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdown8" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something else</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel Management System</span>
                                                    <span class="text-sm block font-normal text-secondary-light">#5632</span>
                                                </div>
                                            </td>
                                            <td>Jenny Wilson</td>
                                            <td>27 Mar 2025</td>
                                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span> </td>
                                            <td class="text-center text-neutral-700 text-xl">
                                                <button data-dropdown-toggle="dropdown9" class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white" type="button">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdown9" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something else</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel Management System</span>
                                                    <span class="text-sm block font-normal text-secondary-light">#5632</span>
                                                </div>
                                            </td>
                                            <td>Leslie Alexander</td>
                                            <td>27 Mar 2025</td>
                                            <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span> </td>
                                            <td class="text-center text-neutral-700 text-xl">
                                                <button data-dropdown-toggle="dropdown10" class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white" type="button">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div id="dropdown10" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another Actions</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something else</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="lg:col-span-12 2xl:col-span-6">
            <div class="card h-full border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center justify-between">
                    <h6 class="text-lg font-semibold mb-0">Last Transaction</h6>
                    <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                        View All
                        <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                    </a>
                </div>
                <div class="card-body p-6">
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table style-two mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5986124445445</td>
                                    <td>27 Mar 2025</td>
                                    <td> <span class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm">Pending</span> </td>
                                    <td>$20,000.00</td>
                                </tr>
                                <tr>
                                    <td>5986124445445</td>
                                    <td>27 Mar 2025</td>
                                    <td> <span class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-6 py-1.5 rounded-full font-medium text-sm">Rejected</span> </td>
                                    <td>$20,000.00</td>
                                </tr>
                                <tr>
                                    <td>5986124445445</td>
                                    <td>27 Mar 2025</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Completed</span> </td>
                                    <td>$20,000.00</td>
                                </tr>
                                <tr>
                                    <td>5986124445445</td>
                                    <td>27 Mar 2025</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Completed</span> </td>
                                    <td>$20,000.00</td>
                                </tr>
                                <tr>
                                    <td>5986124445445</td>
                                    <td>27 Mar 2025</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Completed</span> </td>
                                    <td>$20,000.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Performance End -->
    </div>

@endsection
