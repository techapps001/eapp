@extends('layout.layout')
@php
    $title='Dashboard';
    $subTitle = 'Investment';
    $script = ' <script src="' . asset('assets/js/homeFiveChart.js') . '"></script>';
@endphp

@section('content')

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-4 gap-6">

            <!-- Dashboard Widget Start -->
            <div class="card px-xl-6 px-4 py-4 shadow-none rounded-lg border-neutral-200 dark:border-neutral-600 h-full bg-gradient-to-r from-primary-600/10 to-bg-white">
                <div class="card-body p-0">
                    <div class="flex flex-wrap items-center justify-between gap-1">
                        <div class="flex items-center">

                            <div class="w-[64px] h-[64px] rounded-2xl bg-white flex-shrink-0 dark:bg-neutral-800/75 flex justify-center items-center me-2xl-5 me-xl-4 me-3">
                                <span class="w-10 h-10 bg-primary-600 shrink-0 text-white flex justify-center items-center rounded-lg h6 mb-0">
                                    <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                </span>
                            </div>

                            <div>
                                <span class="mb-2 font-medium text-secondary-light text-base">New Users</span>
                                <h6 class="font-semibold my-1">4000</h6>
                                <p class="text-sm mb-0">
                                    Increase by
                                    <span class="bg-success-100 dark:bg-success-600/50 px-1 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-400 text-sm">+200</span> this week
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Widget End -->
            <!-- Dashboard Widget Start -->
            <div class="card px-xl-6 px-4 py-4 shadow-none rounded-lg border-neutral-200 dark:border-neutral-600 h-full bg-gradient-to-r from-purple-600/10 to-bg-white">
                <div class="card-body p-0">
                    <div class="flex flex-wrap items-center justify-between gap-1">
                        <div class="flex items-center">

                            <div class="w-[64px] h-[64px] rounded-2xl bg-white flex-shrink-0 dark:bg-neutral-800/75 flex justify-center items-center me-2xl-5 me-xl-4 me-3">
                                <span class="w-10 h-10 bg-purple-600 shrink-0 text-white flex justify-center items-center rounded-lg h6 mb-0">
                                    <iconify-icon icon="solar:wallet-bold" class="text-white text-2xl mb-0"></iconify-icon>
                                </span>
                            </div>

                            <div>
                                <span class="mb-2 font-medium text-secondary-light text-base">Total Deposit</span>
                                <h6 class="font-semibold my-1">15,000</h6>
                                <p class="text-sm mb-0">
                                    Increase by
                                    <span class="bg-danger-100 dark:bg-danger-600/50 px-1 py-0.5 rounded-sm font-medium text-danger-600 dark:text-danger-400 text-sm">-200</span> this week
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Widget End -->
            <!-- Dashboard Widget Start -->
            <div class="card px-xl-6 px-4 py-4 shadow-none rounded-lg border-neutral-200 dark:border-neutral-600 h-full bg-gradient-to-r from-red-600/10 to-bg-white">
                <div class="card-body p-0">
                    <div class="flex flex-wrap items-center justify-between gap-1">
                        <div class="flex items-center">

                            <div class="w-[64px] h-[64px] rounded-2xl bg-white flex-shrink-0 dark:bg-neutral-800/75 flex justify-center items-center me-2xl-5 me-xl-4 me-3">
                                <span class="w-10 h-10 bg-red-600 shrink-0 text-white flex justify-center items-center rounded-lg h6 mb-0">
                                    <iconify-icon icon="fa6-solid:file-invoice-dollar" class="text-white text-2xl mb-0"></iconify-icon>
                                </span>
                            </div>

                            <div>
                                <span class="mb-2 font-medium text-secondary-light text-base">Total Expense</span>
                                <h6 class="font-semibold my-1">15,000</h6>
                                <p class="text-sm mb-0">
                                    Increase by
                                    <span class="bg-success-100 dark:bg-success-600/50 px-1 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-400 text-sm">+200</span> this week
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Widget End -->
            <!-- Dashboard Widget Start -->
            <div class="card px-xl-6 px-4 py-4 shadow-none rounded-lg border-neutral-200 dark:border-neutral-600 h-full bg-gradient-to-r from-success-600/10 to-bg-white">
                <div class="card-body p-0">
                    <div class="flex flex-wrap items-center justify-between gap-1">
                        <div class="flex items-center">

                            <div class="w-[64px] h-[64px] rounded-2xl bg-white flex-shrink-0 dark:bg-neutral-800/75 flex justify-center items-center me-2xl-5 me-xl-4 me-3">
                                <span class="w-10 h-10 bg-success-600 shrink-0 text-white flex justify-center items-center rounded-lg h6 mb-0">
                                    <iconify-icon icon="streamline:bag-dollar-solid" class="icon"></iconify-icon>
                                </span>
                            </div>

                            <div>
                                <span class="mb-2 font-medium text-secondary-light text-base">Total Earning</span>
                                <h6 class="font-semibold my-1">15,000</h6>
                                <p class="text-sm mb-0">
                                    Increase by
                                    <span class="bg-success-100 dark:bg-success-600/50 px-1 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-400 text-sm">+200</span> this week
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Widget End -->
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-6">
            <!-- Revenue Statistics Start -->
            <div class="col-span-12 2xl:col-span-8">
                <div class="card h-full rounded-lg border-0">
                    <div class="card-body p-6">
                        <div class="flex items-center flex-wrap gap-2 justify-between">
                            <div>
                                <h6 class="mb-2 font-bold text-lg">Revenue Statistics</h6>
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

                        <div class="mt-6 mb-6 flex flex-wrap">
                            <div class="me-10">
                                <span class="text-secondary-light text-sm mb-1">Income</span>
                                <div class="">
                                    <h6 class="font-semibold inline-block mb-0">$26,201</h6>
                                    <span class="!text-success-600 font-bold inline-flex items-center gap-1">10% <iconify-icon icon="iconamoon:arrow-up-2-fill" class="icon"></iconify-icon> </span>
                                </div>
                            </div>
                            <div>
                                <span class="text-secondary-light text-sm mb-1">Expenses</span>
                                <div class="">
                                    <h6 class="font-semibold inline-block mb-0">$18,120</h6>
                                    <span class="!text-danger-600 font-bold inline-flex items-center gap-1">10% <iconify-icon icon="iconamoon:arrow-down-2-fill" class="icon"></iconify-icon> </span>
                                </div>
                            </div>
                        </div>

                        <div id="upDownBarchart"></div>

                    </div>
                </div>
            </div>
            <!-- Revenue Statistics End -->
            <!-- Statistics Start -->
            <div class="col-span-12 lg:col-span-6 2xl:col-span-4">
                <div class="card h-full rounded-lg border-0">
                    <div class="card-body p-6">
                        <h6 class="mb-2 font-bold text-lg">Statistic</h6>

                        <div class="mt-6">
                            <div class="flex items-center gap-1 justify-between mb-11">
                                <div>
                                    <span class="text-secondary-light font-normal mb-3 text-xl">Daily Conversions</span>
                                    <h5 class="font-semibold mb-0">%60</h5>
                                </div>
                                <div class="relative h-[70px]">
                                    <div id="semiCircleGauge"></div>

                                    <span class="w-9 h-9 rounded-full bg-neutral-100 flex justify-center items-center absolute left-1/2 -translate-x-1/2 translate-y-[16px] top-1/2">
                                        <iconify-icon icon="mdi:emoji" class="text-primary-600 text-base mb-0"></iconify-icon>
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center gap-1 justify-between mb-11">
                                <div>
                                    <span class="text-secondary-light font-normal mb-3 text-xl">Visits By Day</span>
                                    <h5 class="font-semibold mb-0">20k</h5>
                                </div>
                                <div id="areaChart"></div>
                            </div>

                            <div class="flex items-center gap-1 justify-between">
                                <div>
                                    <span class="text-secondary-light font-normal mb-3 text-xl">Today Income</span>
                                    <h5 class="font-semibold mb-0">$5.5k</h5>
                                </div>
                                <div id="dailyIconBarChart"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Statistics End -->
            <!-- Most Location Start -->
            <div class="col-span-12 lg:col-span-6 2xl:col-span-3">
                <div class="card rounded-lg border-0">

                    <div class="card-body">
                        <h6 class="mb-2 font-bold text-lg">Most Location</h6>
                    </div>

                    <div id="world-map" class="h-[200px] bg-neutral-100 dark:bg-neutral-600/30"></div>

                    <div class="card-body p-6 max-h-[266px] scroll-sm overflow-y-auto">
                        <div>

                            <div class="flex items-center justify-between gap-3 mb-3 pb-2">
                                <div class="flex items-center w-full">
                                    <img src="{{ asset('assets/images/flags/flag1.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                    <div class="grow">
                                        <h6 class="text-sm mb-0">USA</h6>
                                        <span class="text-xs text-secondary-light font-medium">1,240 Users</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 w-full">
                                    <div class="w-full max-w-66 ms-auto">
                                        <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary-600 rounded-full" style="width: 80%;"></div>
                                        </div>
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
                                <div class="flex items-center gap-2 w-full">
                                    <div class="w-full max-w-66 ms-auto">
                                        <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-orange rounded-full" style="width: 60%;"></div>
                                        </div>
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
                                <div class="flex items-center gap-2 w-full">
                                    <div class="w-full max-w-66 ms-auto">
                                        <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-warning-600 rounded-full" style="width: 49%;"></div>
                                        </div>
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
                                <div class="flex items-center gap-2 w-full">
                                    <div class="w-full max-w-66 ms-auto">
                                        <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success-600 rounded-full" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                    <span class="text-secondary-light font-xs font-semibold">100%</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Most Location End -->
            <!-- My portfolio Start -->
            <div class="col-span-12 lg:col-span-6 2xl:col-span-3">
                <div class="card h-full rounded-lg border-0">
                    <div class="card-body p-6">
                        <h6 class="mb-2 font-bold text-lg">My Portfolio</h6>

                        <div class="relative">
                            <span class="w-[80px] h-[80px] bg-white dark:bg-neutral-700 shadow-xl text-neutral-600 dark:text-neutral-200 font-bold text-2xl flex justify-center items-center rounded-full absolute end-0 top-0 z-1">20k</span>
                            <div id="statisticsDonutChart" class="mt-9 grow apexcharts-tooltip-z-none title-style circle-none"></div>
                            <span class="w-[80px] h-[80px] bg-white dark:bg-neutral-700 shadow-xl text-neutral-600 dark:text-neutral-200 font-bold text-2xl flex justify-center items-center rounded-full absolute start-0 bottom-0 z-1">50k</span>
                        </div>

                        <ul class="flex flex-wrap flex-col mt-[64px] gap-3">
                            <li class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded-sm bg-primary-600"></span>
                                <span class="text-secondary-light text-lg font-normal">
                                    Total Gain:
                                    <span class="text-neutral-600 dark:text-neutral-200 font-bold text-lg">$50,000</span>
                                </span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded-sm bg-warning-600"></span>
                                <span class="text-secondary-light text-lg font-normal">
                                    Total Investment:
                                    <span class="text-neutral-600 dark:text-neutral-200 font-bold text-lg">$20,000</span>
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- My portfolio End -->
            <!-- Latest Investments Start -->
            <div class="col-span-12 lg:col-span-6 2xl:col-span-6">
                <div class="card h-full border-0">
                    <div class="card-body p-6">
                        <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                            <h6 class="font-bold text-lg mb-0">Latest Investments</h6>
                            <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>
                        <div class="table-responsive scroll-sm">
                            <table class="table bordered-table sm-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Asset</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price </th>
                                        <th scope="col">Date</th>
                                        <th scope="col" class="text-center">Total Orders</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/asset/asset-img1.png') }}" alt="" class="shrink-0 w-10 h-10 rounded-lg me-3">
                                                <div class="grow">
                                                    <h6 class="text-base mb-0 font-normal">Gold</h6>
                                                    <span class="text-sm text-secondary-light font-normal">Main Asset</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="text-base mb-0 font-normal">7400</h6>
                                            <span class="text-sm text-secondary-light font-normal">Ounces</span>
                                        </td>
                                        <td>$7,400.00</td>
                                        <td>25 May 2025</td>
                                        <td class="text-center">
                                            <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-4 py-1.5 rounded-lg font-medium text-sm">Completed</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/asset/asset-img2.png') }}" alt="" class="shrink-0 w-10 h-10 rounded-lg me-3">
                                                <div class="grow">
                                                    <h6 class="text-base mb-0 font-normal">Dollars</h6>
                                                    <span class="text-sm text-secondary-light font-normal">Currency</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="text-base mb-0 font-normal">5,40,000</h6>
                                            <span class="text-sm text-secondary-light font-normal">Dollars</span>
                                        </td>
                                        <td>$5,40,000.00</td>
                                        <td>25 May 2025</td>
                                        <td class="text-center">
                                            <span class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-4 py-1.5 rounded-lg font-medium text-sm">In Progress</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/asset/asset-img3.png') }}" alt="" class="shrink-0 w-10 h-10 rounded-lg me-3">
                                                <div class="grow">
                                                    <h6 class="text-base mb-0 font-normal">Stock Market</h6>
                                                    <span class="text-sm text-secondary-light font-normal">Product</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="text-base mb-0 font-normal">1400</h6>
                                            <span class="text-sm text-secondary-light font-normal">Products</span>
                                        </td>
                                        <td>$50,000.00</td>
                                        <td>25 May 2025</td>
                                        <td class="text-center">
                                            <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-4 py-1.5 rounded-lg font-medium text-sm">Completed</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/asset/asset-img4.png') }}" alt="" class="shrink-0 w-10 h-10 rounded-lg me-3">
                                                <div class="grow">
                                                    <h6 class="text-base mb-0 font-normal">Dimond</h6>
                                                    <span class="text-sm text-secondary-light font-normal">Asset</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="text-base mb-0 font-normal">350</h6>
                                            <span class="text-sm text-secondary-light font-normal">Ounces</span>
                                        </td>
                                        <td>$30,000.00</td>
                                        <td>25 May 2025</td>
                                        <td class="text-center">
                                            <span class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-4 py-1.5 rounded-lg font-medium text-sm">In Progress</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/asset/asset-img5.png') }}" alt="" class="shrink-0 w-10 h-10 rounded-lg me-3">
                                                <div class="grow">
                                                    <h6 class="text-base mb-0 font-normal">S&P 400</h6>
                                                    <span class="text-sm text-secondary-light font-normal">Index</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="text-base mb-0 font-normal">24,000</h6>
                                            <span class="text-sm text-secondary-light font-normal">Shares</span>
                                        </td>
                                        <td>$63,000.00</td>
                                        <td>25 May 2025</td>
                                        <td class="text-center">
                                            <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-4 py-1.5 rounded-lg font-medium text-sm">Completed</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Investments End -->
            <!-- Notice board Start -->
            <div class="col-span-12 lg:col-span-6 2xl:col-span-4">
                <div class="card h-full border-0">
                    <div class="card-body p-6">
                        <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                            <h6 class="font-bold text-lg mb-0">Notice board</h6>
                            <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>

                        <div class="flex items-start gap-2 mb-5">
                            <img src="{{ asset('assets/images/notice/board-img1.png') }}" alt="" class="shrink-0 w-10 h-10 me-3 rounded-lg">
                            <div class="grow">
                                <h6 class="text-base mb-1 font-semibold">Admin</h6>
                                <p class="text-sm text-secondary-light font-medium mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy.</p>
                                <span class="text-sm text-secondary-light font-normal">25 Jan 2025</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-2 mb-5">
                            <img src="{{ asset('assets/images/notice/board-img2.png') }}" alt="" class="shrink-0 w-10 h-10 me-3 rounded-lg">
                            <div class="grow">
                                <h6 class="text-base mb-1 font-semibold">Kathryn Murphy</h6>
                                <p class="text-sm text-secondary-light font-medium mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <span class="text-sm text-secondary-light font-normal">25 Jan 2025</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-2">
                            <img src="{{ asset('assets/images/notice/board-img3.png') }}" alt="" class="shrink-0 w-10 h-10 me-3 rounded-lg">
                            <div class="grow">
                                <h6 class="text-base mb-1 font-semibold">Cameron Williamson</h6>
                                <p class="text-sm text-secondary-light font-medium mb-1">Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <span class="text-sm text-secondary-light font-normal">25 Jan 2025</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Notice board End -->
            <!-- Total Transactions Start -->
            <div class="col-span-12 lg:col-span-6 2xl:col-span-4">
                <div class="card h-full border-0">
                    <div class="card-body p-6">
                        <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                            <h6 class="mb-2 font-bold text-lg">Total Transactions </h6>
                            <div class="">
                                <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                    <option>Yearly</option>
                                    <option>Monthly</option>
                                    <option>Weekly</option>
                                    <option>Today</option>
                                </select>
                            </div>
                        </div>

                        <ul class="flex flex-wrap items-center justify-between gap-3 mb-7">
                            <li class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded-sm bg-primary-600"></span>
                                <span class="text-secondary-light text-lg font-normal">
                                    Total Gain:
                                    <span class="text-neutral-600 dark:text-neutral-200 font-bold text-lg">$50,000</span>
                                </span>
                            </li>
                        </ul>

                        <div id="transactionLineChart"></div>

                    </div>
                </div>
            </div>
            <!-- Total Transactions End -->
            <!-- Project Status Start -->
            <div class="col-span-12 2xl:col-span-4">
                <div class="card h-full border-0">
                    <div class="card-body p-6">
                        <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                            <h6 class="mb-2 font-bold text-lg">Project Status</h6>
                            <div class="">
                                <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                    <option>Yearly</option>
                                    <option>Monthly</option>
                                    <option>Weekly</option>
                                    <option>Today</option>
                                </select>
                            </div>
                        </div>

                        <div class="table-responsive scroll-sm">
                            <table class="table sm-table bordered-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">
                                            <div class="max-w-[44px]2 mx-auto">
                                                <span>Stock</span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Gold</td>
                                        <td>2 Months</td>
                                        <td>
                                            <div class="max-w-[44px]2 mx-auto">
                                                <div class="w-full">
                                                    <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-red-600 rounded-full" style="width: 30%;"></div>
                                                    </div>
                                                </div>
                                                <span class="mt-2 text-secondary-light text-sm font-medium">30%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dollars</td>
                                        <td>3 Months</td>
                                        <td>
                                            <div class="max-w-[44px]2 mx-auto">
                                                <div class="w-full">
                                                    <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-warning-600 rounded-full" style="width: 50%;"></div>
                                                    </div>
                                                </div>
                                                <span class="mt-2 text-secondary-light text-sm font-medium">50%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stock Market</td>
                                        <td>1 Months</td>
                                        <td>
                                            <div class="max-w-[44px]2 mx-auto">
                                                <div class="w-full">
                                                    <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-info-600 rounded-full" style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                                <span class="mt-2 text-secondary-light text-sm font-medium">60%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dimond</td>
                                        <td>5 Months</td>
                                        <td>
                                            <div class="max-w-[44px]2 mx-auto">
                                                <div class="w-full">
                                                    <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-success-600 rounded-full" style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <span class="mt-2 text-secondary-light text-sm font-medium">80%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>S&P 400</td>
                                        <td>4 Months</td>
                                        <td>
                                            <div class="max-w-[44px]2 mx-auto">
                                                <div class="w-full">
                                                    <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-red-600 rounded-full" style="width: 70%;"></div>
                                                    </div>
                                                </div>
                                                <span class="mt-2 text-secondary-light text-sm font-medium">70%</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Project Status End -->
        </div>

@endsection
