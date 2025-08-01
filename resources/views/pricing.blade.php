@extends('layout.layout')

@php
    $title='Pricing';
    $subTitle = 'Pricing';
@endphp

@section('content')

        <div class="card h-full p-0 rounded-xl border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="mb-0 text-lg">Pricing Plan Multiple  Color</h6>
            </div>
            <div class="card-body p-10">
                <div class="grid grid-cols-1 3xl:grid-cols-12">
                    <div class="col-span-12 3xl:col-span-10 3xl:col-start-2">
                        <div class="text-center">
                            <h4 class="mb-4">Pricing Plan</h4>
                            <p class="mb-0 text-lg text-secondary-light">No contracts. No surprise fees.</p>
                        </div>
                        <div class="mb-4 style-pill-button">
                            <ul class="flex flex-wrap justify-center font-medium text-center mt-8 mb-12 2xl:mb-[110px]" id="button-tab" data-tabs-toggle="#button-tab-content" role="tablist">
                                <li role="presentation">
                                    <button class="inline-block px-6 py-2.5 font-semibold rounded-full" id="button-monthly-tab" data-tabs-target="#button-monthly" type="button" role="tab" aria-controls="button-monthly" aria-selected="false">Monthly</button>
                                </li>
                                <li role="presentation">
                                    <button class="inline-block px-6 py-2.5 font-semibold rounded-full hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="button-yearly-tab" data-tabs-target="#button-yearly" type="button" role="tab" aria-controls="button-yearly" aria-selected="false">Yearly</button>
                                </li>
                            </ul>
                        </div>

                        <div id="button-tab-content">
                            <div id="button-monthly" role="tabpanel" aria-labelledby="button-monthly-tab">
                                <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-6 2xl:gap-0">
                                    <div class="pricing-plan-wrapper">
                                        <div class="relative rounded-[24px] overflow-hidden border py-6 lg:py-8 xl:py-10 2xl:py-[50px] px-5 lg:px-6 3xl:px-10 border-neutral-200 dark:border-neutral-600 bg-[#ebd7ff] dark:bg-purple-600/25">
                                            <div class="flex items-center gap-4">
                                                <span class="w-[72px] h-[72px] flex justify-center items-center rounded-2xl bg-white dark:bg-neutral-700">
                                                    <img src="{{ asset('assets/images/pricing/price-icon1.png') }}" alt="">
                                                </span>
                                                <div class="">
                                                    <span class="font-medium text-base text-secondary-light">For individuals</span>
                                                    <h6 class="mb-0">Basic</h6>
                                                </div>
                                            </div>
                                            <p class="mt-4 text-secondary-light mb-7">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                                            <h3 class="mb-6">$99 <span class="font-medium text-base text-secondary-light">/monthly</span> </h3>
                                            <span class="mb-5 font-medium">What's included</span>
                                            <ul>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">All analytics features</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Up to 250,000 tracked visits</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Normal support</span>
                                                </li>
                                                <li class="flex items-center gap-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Up to 3 team members</span>
                                                </li>
                                            </ul>
                                            <a href="javascript:void(0)" type="button" class="bg-purple-600 bg-hover-purple-700 text-white text-center border border-purple-600 text-sm btn-sm px-3 py-2.5 w-full rounded-lg mt-7" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>
                                        </div>
                                    </div>
                                    <div class="pricing-plan-wrapper">
                                        <div class="relative rounded-[24px] overflow-hidden border border-primary-200 dark:border-primary-600 py-6 lg:py-8 xl:py-10 2xl:py-[50px] px-5 lg:px-6 3xl:px-10 2xl:-mt-[50px] 2xl:scale-105 z-[1] bg-primary-600 text-white">
                                            <span class="bg-white bg-opacity-25 text-white rounded-se-[24px] rounded-es-[24px] py-2 px-6 text-sm absolute end-0 top-0 z-1">Popular</span>
                                            <div class="flex items-center gap-4">
                                                <span class="w-[72px] h-[72px] flex justify-center items-center rounded-2xl bg-white dark:bg-neutral-700">
                                                    <img src="{{ asset('assets/images/pricing/price-icon2.png') }}" alt="">
                                                </span>
                                                <div class="">
                                                    <span class="font-medium text-base text-white">For startups</span>
                                                    <h6 class="mb-0 text-white">Pro</h6>
                                                </div>
                                            </div>
                                            <p class="mt-4 text-white mb-7">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                                            <h3 class="mb-6 text-white">$199 <span class="font-medium text-base text-white">/monthly</span> </h3>
                                            <span class="mb-5 font-medium">What's included</span>
                                            <ul>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                                    <span class="text-white text-lg">All analytics features</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                                    <span class="text-white text-lg">Up to 250,000 tracked visits</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                                    <span class="text-white text-lg">Normal support</span>
                                                </li>
                                                <li class="flex items-center gap-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                                    <span class="text-white text-lg">Up to 3 team members</span>
                                                </li>
                                            </ul>
                                            <a href="javascript:void(0)" type="button" class="bg-white text-primary-600 text-center border border-white text-sm btn-sm px-3 py-2.5 w-full rounded-lg mt-7" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>

                                        </div>
                                    </div>
                                    <div class="pricing-plan-wrapper">
                                        <div class="relative rounded-[24px] overflow-hidden border py-6 lg:py-8 xl:py-10 2xl:py-[50px] px-5 lg:px-6 3xl:px-10 border-neutral-200 dark:border-neutral-600 bg-success-100 dark:bg-success-600/25">
                                            <div class="flex items-center gap-4">
                                                <span class="w-[72px] h-[72px] flex justify-center items-center rounded-2xl bg-white dark:bg-neutral-700">
                                                    <img src="{{ asset('assets/images/pricing/price-icon3.png') }}" alt="">
                                                </span>
                                                <div class="">
                                                    <span class="font-medium text-base text-secondary-light">For big companies</span>
                                                    <h6 class="mb-0">Enterprise</h6>
                                                </div>
                                            </div>
                                            <p class="mt-4 text-secondary-light mb-7">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                                            <h3 class="mb-6">$399 <span class="font-medium text-base text-secondary-light">/monthly</span> </h3>
                                            <span class="mb-5 font-medium">What’s included</span>
                                            <ul>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">All analytics features</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Up to 250,000 tracked visits</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Normal support</span>
                                                </li>
                                                <li class="flex items-center gap-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Up to 3 team members</span>
                                                </li>
                                            </ul>
                                            <a href="javascript:void(0)" type="button" class="bg-success-600 bg-hover-success-700 text-white text-center border border-success-600 text-sm btn-sm px-3 py-2.5 w-full rounded-lg mt-7" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="button-yearly" role="tabpanel" aria-labelledby="button-yearly-tab">
                                <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-6 2xl:gap-0">
                                    <div class="pricing-plan-wrapper">
                                        <div class="relative rounded-[24px] overflow-hidden border py-6 lg:py-8 xl:py-10 2xl:py-[50px] px-5 lg:px-6 3xl:px-10 border-neutral-200 dark:border-neutral-600 bg-[#ebd7ff] dark:bg-purple-600/25">
                                            <div class="flex items-center gap-4">
                                                <span class="w-[72px] h-[72px] flex justify-center items-center rounded-2xl bg-white dark:bg-neutral-700">
                                                    <img src="{{ asset('assets/images/pricing/price-icon1.png') }}" alt="">
                                                </span>
                                                <div class="">
                                                    <span class="font-medium text-base text-secondary-light">For individuals</span>
                                                    <h6 class="mb-0">Basic</h6>
                                                </div>
                                            </div>
                                            <p class="mt-4 text-secondary-light mb-7">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                                            <h3 class="mb-6">$399 <span class="font-medium text-base text-secondary-light">/monthly</span> </h3>
                                            <span class="mb-5 font-medium">What's included</span>
                                            <ul>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">All analytics features</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Up to 250,000 tracked visits</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Normal support</span>
                                                </li>
                                                <li class="flex items-center gap-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Up to 3 team members</span>
                                                </li>
                                            </ul>
                                            <a href="javascript:void(0)" type="button" class="bg-purple-600 bg-hover-purple-700 text-white text-center border border-purple-600 text-sm btn-sm px-3 py-2.5 w-full rounded-lg mt-7" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>
                                        </div>
                                    </div>
                                    <div class="pricing-plan-wrapper">
                                        <div class="relative rounded-[24px] overflow-hidden border border-primary-200 dark:border-primary-600 py-6 lg:py-8 xl:py-10 2xl:py-[50px] px-5 lg:px-6 3xl:px-10 2xl:-mt-[50px] 2xl:scale-105 z-[1] bg-primary-600 text-white">
                                            <span class="bg-white bg-opacity-25 text-white rounded-se-[24px] rounded-es-[24px] py-2 px-6 text-sm absolute end-0 top-0 z-1">Popular</span>
                                            <div class="flex items-center gap-4">
                                                <span class="w-[72px] h-[72px] flex justify-center items-center rounded-2xl bg-white dark:bg-neutral-700">
                                                    <img src="{{ asset('assets/images/pricing/price-icon2.png') }}" alt="">
                                                </span>
                                                <div class="">
                                                    <span class="font-medium text-base text-white">For startups</span>
                                                    <h6 class="mb-0 text-white">Pro</h6>
                                                </div>
                                            </div>
                                            <p class="mt-4 text-white mb-7">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                                            <h3 class="mb-6 text-white">$399 <span class="font-medium text-base text-white">/monthly</span> </h3>
                                            <span class="mb-5 font-medium">What's included</span>
                                            <ul>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                                    <span class="text-white text-lg">All analytics features</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                                    <span class="text-white text-lg">Up to 250,000 tracked visits</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                                    <span class="text-white text-lg">Normal support</span>
                                                </li>
                                                <li class="flex items-center gap-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                                    <span class="text-white text-lg">Up to 3 team members</span>
                                                </li>
                                            </ul>
                                            <a href="javascript:void(0)" type="button" class="bg-white text-primary-600 text-center border border-white text-sm btn-sm px-3 py-2.5 w-full rounded-lg mt-7" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>

                                        </div>
                                    </div>
                                    <div class="pricing-plan-wrapper">
                                        <div class="relative rounded-[24px] overflow-hidden border py-6 lg:py-8 xl:py-10 2xl:py-[50px] px-5 lg:px-6 3xl:px-10 border-neutral-200 dark:border-neutral-600 bg-success-100 dark:bg-success-600/25">
                                            <div class="flex items-center gap-4">
                                                <span class="w-[72px] h-[72px] flex justify-center items-center rounded-2xl bg-white dark:bg-neutral-700">
                                                    <img src="{{ asset('assets/images/pricing/price-icon3.png') }}" alt="">
                                                </span>
                                                <div class="">
                                                    <span class="font-medium text-base text-secondary-light">For big companies</span>
                                                    <h6 class="mb-0">Enterprise</h6>
                                                </div>
                                            </div>
                                            <p class="mt-4 text-secondary-light mb-7">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                                            <h3 class="mb-6">$999 <span class="font-medium text-base text-secondary-light">/monthly</span> </h3>
                                            <span class="mb-5 font-medium">What’s included</span>
                                            <ul>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">All analytics features</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Up to 250,000 tracked visits</span>
                                                </li>
                                                <li class="flex items-center gap-4 mb-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Normal support</span>
                                                </li>
                                                <li class="flex items-center gap-4">
                                                    <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                                    <span class="text-secondary-light text-lg">Up to 3 team members</span>
                                                </li>
                                            </ul>
                                            <a href="javascript:void(0)" type="button" class="bg-success-600 bg-hover-success-700 text-white text-center border border-success-600 text-sm btn-sm px-3 py-2.5 w-full rounded-lg mt-7" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card h-full p-0 rounded-xl border-0 overflow-hidden mt-6">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="mb-0 text-lg">Pricing Plan Multiple  Color</h6>
            </div>
            <div class="card-body p-10">
                <div class="grid grid-cols-1 3xl:grid-cols-12">
                    <div class="col-span-12 3xl:col-span-10 3xl:col-start-2">
                        <div class="text-center">
                            <h4 class="mb-4">Simple, Transparent Pricing</h4>
                            <p class="mb-0 text-lg text-secondary-light">Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis eu sit massa volutpat.</p>
                        </div>
                        <div class="mb-4 style-pill-button">
                            <div class=" mt-8 mb-12 2xl:mb-[110px] flex flex-wrap justify-center">
                                <label class="inline-flex items-center cursor-pointer">
                                    <span class="me-3 text-sm font-medium dark:text-gray-300 text-neutral-900">Monthly</span>
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <span class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></span>
                                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300 peer-checked:text-primary-600">Annually</span>
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-6 2xl:gap-0">
                            <div class="pricing-plan-wrapper">
                                <div class="relative rounded-[24px] overflow-hidden border py-6 lg:py-8 xl:py-10 2xl:py-[50px] px-5 lg:px-6 3xl:px-10 border-neutral-200 dark:border-neutral-600">
                                    <div class="flex items-center gap-4">
                                        <span class="w-[72px] h-[72px] flex justify-center items-center rounded-2xl bg-primary-50 dark:bg-primary-600/25">
                                            <img src="{{ asset('assets/images/pricing/price-icon4.png') }}" alt="">
                                        </span>
                                        <div class="">
                                            <span class="font-medium text-base text-secondary-light">For individuals</span>
                                            <h6 class="mb-0">Basic</h6>
                                        </div>
                                    </div>
                                    <p class="mt-4 text-secondary-light mb-7">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                                    <h3 class="mb-6">$99 <span class="font-medium text-base text-secondary-light">/monthly</span> </h3>
                                    <span class="mb-5 font-medium">What's included</span>
                                    <ul>
                                        <li class="flex items-center gap-4 mb-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                            <span class="text-secondary-light text-lg">All analytics features</span>
                                        </li>
                                        <li class="flex items-center gap-4 mb-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                            <span class="text-secondary-light text-lg">Up to 250,000 tracked visits</span>
                                        </li>
                                        <li class="flex items-center gap-4 mb-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                            <span class="text-secondary-light text-lg">Normal support</span>
                                        </li>
                                        <li class="flex items-center gap-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-purple-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg "></iconify-icon></span>
                                            <span class="text-secondary-light text-lg">Up to 3 team members</span>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0)" type="button" class="bg-purple-600 bg-hover-purple-700 text-white text-center border border-purple-600 text-sm btn-sm px-3 py-2.5 w-full rounded-lg mt-7" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>
                                </div>
                            </div>
                            <div class="pricing-plan-wrapper">
                                <div class="relative rounded-[24px] overflow-hidden border border-primary-200 dark:border-primary-600 py-6 lg:py-8 xl:py-10 2xl:py-[50px] px-5 lg:px-6 3xl:px-10 2xl:-mt-[50px] 2xl:scale-105 z-[1] bg-primary-600 text-white">
                                    <span class="bg-white bg-opacity-25 text-white rounded-se-[24px] rounded-es-[24px] py-2 px-6 text-sm absolute end-0 top-0 z-1">Popular</span>
                                    <div class="flex items-center gap-4">
                                        <span class="w-[72px] h-[72px] flex justify-center items-center rounded-2xl bg-white dark:bg-neutral-700">
                                            <img src="{{ asset('assets/images/pricing/price-icon2.png') }}" alt="">
                                        </span>
                                        <div class="">
                                            <span class="font-medium text-base text-white">For startups</span>
                                            <h6 class="mb-0 text-white">Pro</h6>
                                        </div>
                                    </div>
                                    <p class="mt-4 text-white mb-7">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                                    <h3 class="mb-6 text-white">$199 <span class="font-medium text-base text-white">/monthly</span> </h3>
                                    <span class="mb-5 font-medium">What's included</span>
                                    <ul>
                                        <li class="flex items-center gap-4 mb-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                            <span class="text-white text-lg">All analytics features</span>
                                        </li>
                                        <li class="flex items-center gap-4 mb-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                            <span class="text-white text-lg">Up to 250,000 tracked visits</span>
                                        </li>
                                        <li class="flex items-center gap-4 mb-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                            <span class="text-white text-lg">Normal support</span>
                                        </li>
                                        <li class="flex items-center gap-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-white rounded-full text-primary-600 dark:text-primary-600"><iconify-icon icon="iconamoon:check-light" class="text-lg   "></iconify-icon></span>
                                            <span class="text-white text-lg">Up to 3 team members</span>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0)" type="button" class="bg-white text-primary-600 text-center border border-white text-sm btn-sm px-3 py-2.5 w-full rounded-lg mt-7" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>

                                </div>
                            </div>
                            <div class="pricing-plan-wrapper">
                                <div class="relative rounded-[24px] overflow-hidden border py-6 lg:py-8 xl:py-10 2xl:py-[50px] px-5 lg:px-6 3xl:px-10 border-neutral-200 dark:border-neutral-600">
                                    <div class="flex items-center gap-4">
                                        <span class="w-[72px] h-[72px] flex justify-center items-center rounded-2xl bg-primary-50 dark:bg-primary-600/25">
                                            <img src="{{ asset('assets/images/pricing/price-icon5.png') }}" alt="">
                                        </span>
                                        <div class="">
                                            <span class="font-medium text-base text-secondary-light">For big companies</span>
                                            <h6 class="mb-0">Enterprise</h6>
                                        </div>
                                    </div>
                                    <p class="mt-4 text-secondary-light mb-7">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                                    <h3 class="mb-6">$399 <span class="font-medium text-base text-secondary-light">/monthly</span> </h3>
                                    <span class="mb-5 font-medium">What’s included</span>
                                    <ul>
                                        <li class="flex items-center gap-4 mb-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                            <span class="text-secondary-light text-lg">All analytics features</span>
                                        </li>
                                        <li class="flex items-center gap-4 mb-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                            <span class="text-secondary-light text-lg">Up to 250,000 tracked visits</span>
                                        </li>
                                        <li class="flex items-center gap-4 mb-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                            <span class="text-secondary-light text-lg">Normal support</span>
                                        </li>
                                        <li class="flex items-center gap-4">
                                            <span class="w-6 h-6 flex justify-center items-center bg-success-600 rounded-full"><iconify-icon icon="iconamoon:check-light" class="text-white text-lg   "></iconify-icon></span>
                                            <span class="text-secondary-light text-lg">Up to 3 team members</span>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0)" type="button" class="bg-success-600 bg-hover-success-700 text-white text-center border border-success-600 text-sm btn-sm px-3 py-2.5 w-full rounded-lg mt-7" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
