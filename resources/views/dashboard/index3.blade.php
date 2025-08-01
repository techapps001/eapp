@extends('layout.layout')
@php
    $title='Dashboard';
    $subTitle = 'eCommerce';
    $script = '<script src="' . asset('assets/js/homethreeChart.js') . '"></script> ';
@endphp

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <div class="md:col-span-12 2xl:col-span-9">
            <div class="card rounded-lg border-0">
                <div class="grid grid-cols-1 2xl:grid-cols-12">
                    <div class="xl:col-span-12 2xl:col-span-6">
                        <div class="card-body p-6">
                            <div class="flex items-center flex-wrap gap-2 justify-between">
                                <h6 class="mb-2 font-bold text-lg">Revenue Report</h6>
                                <div class="">
                                    <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                        <option>Yearly</option>
                                        <option>Monthly</option>
                                        <option>Weekly</option>
                                        <option>Today</option>
                                    </select>
                                </div>
                            </div>
                            <ul class="flex flex-wrap items-center mt-4 gap-3">
                                <li class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-sm bg-primary-600"></span>
                                    <span class="text-secondary-light text-sm font-semibold">
                                        Earning:
                                        <span class="text-neutral-600 dark:text-neutral-200 font-bold">$400,00,000.00</span>
                                    </span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-sm bg-warning-600"></span>
                                    <span class="text-secondary-light text-sm font-semibold">
                                        Expense:
                                        <span class="text-neutral-600 dark:text-neutral-200 font-bold">$20,000.00</span>
                                    </span>
                                </li>
                            </ul>
                            <div class="mt-[60px]">
                                <div id="paymentStatusChart" class="margin-16-minus"></div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 2xl:col-span-6 2xl:border-l border-neutral-200 dark:border-neutral-600">
                        <div class="grid grid-cols-1 sm:grid-cols-2 border-s-neutral-300">
                            <div class="card-body p-6 h-full flex flex-col border-b sm:border-r border-neutral-200 dark:border-neutral-600">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-0.5">
                                    <div>
                                        <span class="w-[44px] h-[44px] text-primary-600 dark:text-primary-500 bg-primary-600/20 border border-primary-300 dark:border-primary-600/50 shrink-0 flex justify-center items-center rounded-lg h6 mb-4">
                                            <iconify-icon icon="fa-solid:box-open" class="icon"></iconify-icon>
                                        </span>
                                        <span class="mb-1 font-medium text-secondary-light text-base">Total Products</span>
                                        <h6 class="font-semibold text-neutral-900 mt-2 mb-px">300</h6>
                                    </div>
                                </div>
                                <p class="text-sm mb-0 mt-3">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-500 text-sm">+200</span> this week</p>
                            </div>
                            <div class="card-body p-6 h-full flex flex-col border-b border-neutral-200 dark:border-neutral-600">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-0.5">
                                    <div>
                                        <span class="w-[44px] h-[44px] text-warning-600 dark:text-warning-500 bg-warning-600/20 border border-warning-300 dark:border-warning-600/50 shrink-0 flex justify-center items-center rounded-lg h6 mb-4">
                                            <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                        </span>
                                        <span class="mb-1 font-medium text-secondary-light text-base">Total Customer</span>
                                        <h6 class="font-semibold text-neutral-900 mt-2 mb-px">50,000</h6>
                                    </div>
                                </div>
                                <p class="text-sm mb-0 mt-3">Increase by  <span class="bg-danger-100 dark:bg-danger-600/25 px-1 py-0.5 rounded-sm font-medium text-danger-600 dark:text-danger-500 text-sm">-5k</span> this week</p>
                            </div>
                            <div class="card-body p-6 h-full flex flex-col sm:border-r border-neutral-200 dark:border-neutral-600">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-0.5">
                                    <div>
                                        <span class="w-[44px] h-[44px] text-purple-600 dark:text-purple-500 bg-purple-600/20 border border-purple-300 dark:border-purple-600/50 shrink-0 flex justify-center items-center rounded-lg h6 mb-4">
                                            <iconify-icon icon="majesticons:shopping-cart" class="icon"></iconify-icon>
                                        </span>
                                        <span class="mb-1 font-medium text-secondary-light text-base">Total Orders</span>
                                        <h6 class="font-semibold text-neutral-900 mt-2 mb-px">1400</h6>
                                    </div>
                                </div>
                                <p class="text-sm mb-0 mt-3">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-500 text-sm">+1k</span> this week</p>
                            </div>
                            <div class="card-body p-6 h-full flex flex-col">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-0.5">
                                    <div>
                                        <span class="w-[44px] h-[44px] text-pink-600 dark:text-pink-500 bg-pink-600/20 border border-pink-300 dark:border-pink-600/50 shrink-0 flex justify-center items-center rounded-lg h6 mb-4">
                                            <iconify-icon icon="ri:discount-percent-fill" class="icon"></iconify-icon>
                                        </span>
                                        <span class="mb-1 font-medium text-secondary-light text-base">Total Sales</span>
                                        <h6 class="font-semibold text-neutral-900 mt-2 mb-px">$25,00,000.00</h6>
                                    </div>
                                </div>
                                <p class="text-sm mb-0 mt-3">Increase by  <span class="bg-success-100 dark:bg-success-600/25 px-1 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-500 text-sm">+$10k</span> this week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:col-span-12 lg:col-span-6 2xl:col-span-3">
            <div class="card h-full rounded-lg border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="mb-2 font-bold text-lg">Customers Statistics</h6>
                        <div class="">
                            <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                <option>Yearly</option>
                                <option>Monthly</option>
                                <option>Weekly</option>
                                <option>Today</option>
                            </select>
                        </div>
                    </div>

                    <div class="relative">
                        <span class="w-[80px] h-[80px] bg-white dark:bg-neutral-700 shadow-lg text-neutral-600 dark:text-neutral-200 font-semibold text-xl flex justify-center items-center rounded-full absolute end-0 top-0 z-1">+30%</span>
                        <div id="statisticsDonutChart" class="mt-9 grow apexcharts-tooltip-z-none title-style circle-none"></div>
                        <span class="w-[80px] h-[80px] bg-white dark:bg-neutral-700 shadow-lg text-neutral-600 dark:text-neutral-200 font-semibold text-xl flex justify-center items-center rounded-full absolute start-0 bottom-0 z-1">+25%</span>
                    </div>

                    <ul class="flex flex-wrap items-center justify-between mt-4 gap-3">
                        <li class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-sm bg-primary-600"></span>
                            <span class="text-secondary-light text-sm font-normal">
                                Male:
                                <span class="text-neutral-600 dark:text-neutral-200 font-bold">20,000</span>
                            </span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-sm bg-warning-600"></span>
                            <span class="text-secondary-light text-sm font-normal">
                                Female:
                                <span class="text-neutral-600 dark:text-neutral-200 font-bold">25,000</span>
                            </span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="md:col-span-12 lg:col-span-6 2xl:col-span-9">
            <div class="card h-full border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                        <h6 class="mb-2 font-bold text-lg">Recent Orders</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Users</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Items</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col" class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/users/user1.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <span class="text-lg text-secondary-light font-semibold grow">Dianne Russell</span>
                                        </div>
                                    </td>
                                    <td>#6352148</td>
                                    <td>iPhone 14 max</td>
                                    <td>2</td>
                                    <td>$5,000.00</td>
                                    <td class="text-center"> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/users/user2.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <span class="text-lg text-secondary-light font-semibold grow">Wade Warren</span>
                                        </div>
                                    </td>
                                    <td>#6352148</td>
                                    <td>Laptop HPH </td>
                                    <td>3</td>
                                    <td>$1,000.00</td>
                                    <td class="text-center"> <span class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm">Pending</span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/users/user3.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <span class="text-lg text-secondary-light font-semibold grow">Albert Flores</span>
                                        </div>
                                    </td>
                                    <td>#6352148</td>
                                    <td>Smart Watch </td>
                                    <td>7</td>
                                    <td>$1,000.00</td>
                                    <td class="text-center"> <span class="bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 px-6 py-1.5 rounded-full font-medium text-sm">Shipped</span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/users/user4.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <span class="text-lg text-secondary-light font-semibold grow">Bessie Cooper</span>
                                        </div>
                                    </td>
                                    <td>#6352148</td>
                                    <td>Nike Air Shoe</td>
                                    <td>1</td>
                                    <td>$3,000.00</td>
                                    <td class="text-center"> <span class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-6 py-1.5 rounded-full font-medium text-sm">Canceled</span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/users/user5.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <span class="text-lg text-secondary-light font-semibold grow">Arlene McCoy</span>
                                        </div>
                                    </td>
                                    <td>#6352148</td>
                                    <td>New Headphone </td>
                                    <td>5</td>
                                    <td>$4,000.00</td>
                                    <td class="text-center"> <span class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-6 py-1.5 rounded-full font-medium text-sm">Canceled</span> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:col-span-12 lg:col-span-6 2xl:col-span-3">
            <div class="card h-full border-0">

                <div class="card-body">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="mb-2 font-bold text-lg">Transactions</h6>
                        <div class="">
                            <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light">
                                <option>This Month</option>
                                <option>Last Month</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-8">
                        <div class="flex items-center justify-between gap-3 mb-5">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment1.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">Paytm</h6>
                                    <span class="text-sm text-secondary-light font-normal">Starbucks</span>
                                </div>
                            </div>
                            <span class="text-danger text-base font-medium">-$20</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-5">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment2.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">PayPal</h6>
                                    <span class="text-sm text-secondary-light font-normal">Client Payment</span>
                                </div>
                            </div>
                            <span class="text-success-600 text-base font-medium">+$800</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-5">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment3.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">Stripe</h6>
                                    <span class="text-sm text-secondary-light font-normal">Ordered iPhone 14</span>
                                </div>
                            </div>
                            <span class="text-danger-600 text-base font-medium">-$300</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-5">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment4.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">Razorpay</h6>
                                    <span class="text-sm text-secondary-light font-normal">Refund</span>
                                </div>
                            </div>
                            <span class="text-success-600 text-base font-medium">+$400</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-5">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment1.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">Paytm</h6>
                                    <span class="text-sm text-secondary-light font-normal">Starbucks</span>
                                </div>
                            </div>
                            <span class="text-danger-600 text-base font-medium">-$1400</span>
                        </div>

                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/payment/payment3.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">Stripe</h6>
                                    <span class="text-sm text-secondary-light font-normal">Ordered iPhone 14</span>
                                </div>
                            </div>
                            <span class="text-success-600 text-base font-medium">+$800</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="md:col-span-12 lg:col-span-6 2xl:col-span-4">
            <div class="card h-full border-0 rounded-lg">
                <div class="card-body p-6">
                    <h6 class="mb-3 font-bold text-lg">Recent Orders</h6>
                    <div class="flex items-center gap-2">
                        <h6 class="font-semibold mb-0">$27,200</h6>
                        <p class="text-sm mb-0">
                            <span class="bg-success-600/20 border border-success-600/25 px-2 py-1 rounded-full font-semibold text-success-600 dark:text-success-400 text-sm inline-flex items-center gap-1">
                                10%
                                <iconify-icon icon="iconamoon:arrow-up-2-fill" class="icon"></iconify-icon>
                            </span>
                            Increases
                        </p>
                    </div>
                    <div id="recent-orders" class="mt-7"></div>
                </div>
            </div>
        </div>
        <div class="md:col-span-12 lg:col-span-6 2xl:col-span-4">
            <div class="card rounded-lg border-0">

                <div class="card-body">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="mb-2 font-bold text-lg">Distribution Maps</h6>
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
                                <img src="{{ asset('assets/images/flags/flag1.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-4">
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
                                <img src="{{ asset('assets/images/flags/flag2.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-4">
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
                                <img src="{{ asset('assets/images/flags/flag3.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-4">
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
                                <img src="{{ asset('assets/images/flags/flag4.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-4">
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
        <div class="md:col-span-12 lg:col-span-6 2xl:col-span-4">
            <div class="card h-full border-0">

                <div class="card-body">
                    <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                        <h6 class="mb-2 font-bold text-lg mb-0">Top Customers</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>

                    <div class="mt-8">

                        <div class="flex items-center justify-between gap-3 mb-8">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/users/user6.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">Dianne Russell</h6>
                                    <span class="text-sm text-secondary-light font-normal">017******58</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">Orders: 30</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-8">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/users/user1.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">Wade Warren</h6>
                                    <span class="text-sm text-secondary-light font-normal">017******58</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">Orders: 30</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-8">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/users/user2.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">Albert Flores</h6>
                                    <span class="text-sm text-secondary-light font-normal">017******58</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">Orders: 35</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-8">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/users/user3.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">Bessie Cooper</h6>
                                    <span class="text-sm text-secondary-light font-normal">017******58</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">Orders: 20</span>
                        </div>

                        <div class="flex items-center justify-between gap-3 mb-8">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/users/user4.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">Arlene McCoy</h6>
                                    <span class="text-sm text-secondary-light font-normal">017******58</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">Orders: 25</span>
                        </div>

                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/users/user6.png') }}" alt="" class="w-10 h-10 rounded-lg shrink-0">
                                <div class="grow">
                                    <h6 class="text-base mb-0 font-normal">John Doe</h6>
                                    <span class="text-sm text-secondary-light font-normal">017******58</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 dark:text-neutral-200 text-base font-medium">Orders: 32</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="md:col-span-12 2xl:col-span-6">
            <div class="card h-full border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                        <h6 class="mb-2 font-bold text-lg mb-0">Top Selling Product</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Items</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Discount </th>
                                    <th scope="col">Sold</th>
                                    <th scope="col" class="text-center">Total Orders</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/product/product-img1.png') }}" alt="" class="shrink-0 me-3 rounded-lg me-3">
                                            <div class="grow">
                                                <h6 class="text-base mb-0 font-normal">Blue t-shirt</h6>
                                                <span class="text-sm text-secondary-light font-normal">Fashion</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$400.00</td>
                                    <td>15%</td>
                                    <td>300</td>
                                    <td class="text-center">
                                        <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm">70</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/product/product-img2.png') }}" alt="" class="shrink-0 me-3 rounded-lg me-3">
                                            <div class="grow">
                                                <h6 class="text-base mb-0 font-normal">Nike Air Shoe</h6>
                                                <span class="text-sm text-secondary-light font-normal">Fashion</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$150.00</td>
                                    <td>N/A</td>
                                    <td>200</td>
                                    <td class="text-center">
                                        <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm">70</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/product/product-img3.png') }}" alt="" class="shrink-0 me-3 rounded-lg me-3">
                                            <div class="grow">
                                                <h6 class="text-base mb-0 font-normal">Woman Dresses</h6>
                                                <span class="text-sm text-secondary-light font-normal">Fashion</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$300.00</td>
                                    <td>$50.00</td>
                                    <td>1400</td>
                                    <td class="text-center">
                                        <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm">70</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/product/product-img4.png') }}" alt="" class="shrink-0 me-3 rounded-lg me-3">
                                            <div class="grow">
                                                <h6 class="text-base mb-0 font-normal">Smart Watch</h6>
                                                <span class="text-sm text-secondary-light font-normal">Fashion</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$400.00</td>
                                    <td>$50.00</td>
                                    <td>700</td>
                                    <td class="text-center">
                                        <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm">70</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/product/product-img5.png') }}" alt="" class="shrink-0 me-3 rounded-lg me-3">
                                            <div class="grow">
                                                <h6 class="text-base mb-0 font-normal">Hoodie Rose</h6>
                                                <span class="text-sm text-secondary-light font-normal">Fashion</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$300.00</td>
                                    <td>25%</td>
                                    <td>400</td>
                                    <td class="text-center">
                                        <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm">70</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:col-span-12 2xl:col-span-6">
            <div class="card h-full border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                        <h6 class="mb-2 font-bold text-lg">Stock Report</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0 style-two">
                            <thead>
                                <tr>
                                    <th scope="col">Items</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">
                                        <div class="max-w-[44px]2 mx-auto">
                                            <span>Stock</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nike Air Shoes</td>
                                    <td>$400.00</td>
                                    <td>
                                        <div class="max-w-[44px]2 mx-auto">
                                            <div class="w-full">
                                                <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary-600 rounded-full" style="width: 0%;"></div>
                                                </div>
                                            </div>
                                            <span class="mt-3 text-secondary-light text-sm font-medium">Out of Stock</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nike Air Shoes</td>
                                    <td>$300.00</td>
                                    <td>
                                        <div class="max-w-[44px]2 mx-auto">
                                            <div class="w-full">
                                                <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-danger-600 rounded-full" style="width: 40%;"></div>
                                                </div>
                                            </div>
                                            <span class="mt-3 text-secondary-light text-sm font-medium">18 Low Stock</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nike Air Shoes</td>
                                    <td>$400.00</td>
                                    <td>
                                        <div class="max-w-[44px]2 mx-auto">
                                            <div class="w-full">
                                                <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-success-600 rounded-full" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                            <span class="mt-3 text-secondary-light text-sm font-medium">80 High Stock</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nike Air Shoes</td>
                                    <td>$300.00</td>
                                    <td>
                                        <div class="max-w-[44px]2 mx-auto">
                                            <div class="w-full">
                                                <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-success-600 rounded-full" style="width: 50%;"></div>
                                                </div>
                                            </div>
                                            <span class="mt-3 text-secondary-light text-sm font-medium">50 High Stock</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nike Air Shoes</td>
                                    <td>$150.00</td>
                                    <td>
                                        <div class="max-w-[44px]2 mx-auto">
                                            <div class="w-full">
                                                <div class="progress progress-sm rounded-full" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-success-600 rounded-full" style="width: 70%;"></div>
                                                </div>
                                            </div>
                                            <span class="mt-3 text-secondary-light text-sm font-medium">70 High Stock</span>
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

@endsection
