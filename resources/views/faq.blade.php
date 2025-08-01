@extends('layout.layout')

@php
    $title='Faq';
    $subTitle = 'Faq';
@endphp

@section('content')

    <div class="card border-0 overflow-hidden">
        <div class="card-header p-0 border-0">
            <div class="py-10 px-10 xl:px-[60px] 2xl:px-[100px] 3xl:px-[140px] bg-gradient-to-r from-pink-600/10 to-white">
                <div class="grid grid-cols-1 xl:grid-cols-12 items-center">
                    <div class="col-span-12 xl:col-span-7">
                        <h4 class="mb-5">Frequently asked questions.</h4>
                        <p class="mb-0 text-secondary-light max-w-[634px] text-xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard du text ever since the 1400s, when an unkn</p>
                    </div>
                    <div class="col-span-12 xl:col-span-5 hidden xl:block">
                        <img src="{{ asset('assets/images/faq-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body bg-white dark:bg-neutral-700 responsive-padding-40-150">
            <div class="grid grid-cols-1 xl:grid-cols-12 items-start gap-6">

                <div class="col-span-12 lg:col-span-4">
                    <ul class="flex flex-wrap text-sm font-medium text-center active-text-tab nav flex-col nav-pills bg-white dark:bg-neutral-700 shadow-lg py-0 px-6 rounded-xl border" id="vertical-tab" data-tabs-toggle="#vertical-tab-content" role="tablist">
                        <li role="presentation" class="border-b border-neutral-200 last:border-b-0">
                            <button class="block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600" id="vertical-about-tab" data-tabs-target="#vertical-about" type="button" role="tab" aria-controls="vertical-about" aria-selected="false">About Us</button>
                        </li>
                        <li role="presentation" class="border-b border-neutral-200 last:border-b-0">
                            <button class="block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300" id="vertical-uiux-tab" data-tabs-target="#vertical-uiux" type="button" role="tab" aria-controls="vertical-uiux" aria-selected="false">UX UI Design</button>
                        </li>
                        <li role="presentation" class="border-b border-neutral-200 last:border-b-0">
                            <button class="block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300" id="vertical-development-tab" data-tabs-target="#vertical-development" type="button" role="tab" aria-controls="vertical-development" aria-selected="false">Development</button>
                        </li>
                        <li role="presentation" class="border-b border-neutral-200 last:border-b-0">
                            <button class="block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300" id="vertical-wowdash-tab" data-tabs-target="#vertical-wowdash" type="button" role="tab" aria-controls="vertical-wowdash" aria-selected="false">How to can i use WowDash?</button>
                        </li>
                        <li role="presentation" class="border-b border-neutral-200 last:border-b-0">
                            <button class="block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300" id="vertical-agency-tab" data-tabs-target="#vertical-agency" type="button" role="tab" aria-controls="vertical-agency" aria-selected="false">Can I use my agency?</button>
                        </li>
                    </ul>
                </div>

                <div class="col-span-12 lg:col-span-8">
                    <div id="vertical-tab-content">
                        <div id="vertical-about" role="tabpanel" aria-labelledby="vertical-about-tab">
                            <div id="accordion-collapse" data-accordion="collapse">
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-heading-1">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                            <span>Is there a free trial available?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-heading-2">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                            <span>Can I change my plan later?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-heading-3">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                            <span>What is your cancellation policy?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-heading-4">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-heading-5">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                                            <span>How does billing work?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-heading-6">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-body-6" aria-expanded="false" aria-controls="accordion-collapse-body-6">
                                            <span>How do I change my account email?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="vertical-uiux" role="tabpanel" aria-labelledby="vertical-uiux-tab">
                            <div id="accordion-collapse-uiux" data-accordion="collapse">
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-uiux-heading-2">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-uiux-body-2" aria-expanded="false" aria-controls="accordion-collapse-uiux-body-2">
                                            <span>Can I change my plan later?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-uiux-body-2" class="hidden" aria-labelledby="accordion-collapse-uiux-heading-2">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-uiux-heading-3">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-uiux-body-3" aria-expanded="false" aria-controls="accordion-collapse-uiux-body-3">
                                            <span>What is your cancellation policy?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-uiux-body-3" class="hidden" aria-labelledby="accordion-collapse-uiux-heading-3">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-uiux-heading-1">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-uiux-body-1" aria-expanded="true" aria-controls="accordion-collapse-uiux-body-1">
                                            <span>Is there a free trial available?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-uiux-body-1" class="hidden" aria-labelledby="accordion-collapse-uiux-heading-1">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-uiux-heading-4">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-uiux-body-4" aria-expanded="false" aria-controls="accordion-collapse-uiux-body-4">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-uiux-body-4" class="hidden" aria-labelledby="accordion-collapse-uiux-heading-4">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-uiux-heading-5">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-uiux-body-5" aria-expanded="false" aria-controls="accordion-collapse-uiux-body-5">
                                            <span>How does billing work?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-uiux-body-5" class="hidden" aria-labelledby="accordion-collapse-uiux-heading-5">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-uiux-heading-6">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-uiux-body-6" aria-expanded="false" aria-controls="accordion-collapse-uiux-body-6">
                                            <span>How do I change my account email?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-uiux-body-6" class="hidden" aria-labelledby="accordion-collapse-uiux-heading-6">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="vertical-development" role="tabpanel" aria-labelledby="vertical-development-tab">
                            <div id="accordion-collapse-development" data-accordion="collapse">
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-development-heading-5">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-development-body-5" aria-expanded="false" aria-controls="accordion-collapse-development-body-5">
                                            <span>How does billing work?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-development-body-5" class="hidden" aria-labelledby="accordion-collapse-development-heading-5">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-development-heading-6">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-development-body-6" aria-expanded="false" aria-controls="accordion-collapse-development-body-6">
                                            <span>How do I change my account email?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-development-body-6" class="hidden" aria-labelledby="accordion-collapse-development-heading-6">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-development-heading-1">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-development-body-1" aria-expanded="true" aria-controls="accordion-collapse-development-body-1">
                                            <span>Is there a free trial available?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-development-body-1" class="hidden" aria-labelledby="accordion-collapse-development-heading-1">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-development-heading-2">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-development-body-2" aria-expanded="false" aria-controls="accordion-collapse-development-body-2">
                                            <span>Can I change my plan later?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-development-body-2" class="hidden" aria-labelledby="accordion-collapse-development-heading-2">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-development-heading-3">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-development-body-3" aria-expanded="false" aria-controls="accordion-collapse-development-body-3">
                                            <span>What is your cancellation policy?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-development-body-3" class="hidden" aria-labelledby="accordion-collapse-development-heading-3">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-development-heading-4">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-development-body-4" aria-expanded="false" aria-controls="accordion-collapse-development-body-4">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-development-body-4" class="hidden" aria-labelledby="accordion-collapse-development-heading-4">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="vertical-wowdash" role="tabpanel" aria-labelledby="vertical-wowdash-tab">
                            <div id="accordion-collapse-wowdash" data-accordion="collapse-wowdash">
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-wowdash-heading-3">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-wowdash-body-3" aria-expanded="false" aria-controls="accordion-collapse-wowdash-body-3">
                                            <span>What is your cancellation policy?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-wowdash-body-3" class="hidden" aria-labelledby="accordion-collapse-wowdash-heading-3">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-wowdash-heading-6">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-wowdash-body-6" aria-expanded="false" aria-controls="accordion-collapse-wowdash-body-6">
                                            <span>How do I change my account email?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-wowdash-body-6" class="hidden" aria-labelledby="accordion-collapse-wowdash-heading-6">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-wowdash-heading-1">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-wowdash-body-1" aria-expanded="true" aria-controls="accordion-collapse-wowdash-body-1">
                                            <span>Is there a free trial available?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-wowdash-body-1" class="hidden" aria-labelledby="accordion-collapse-wowdash-heading-1">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-wowdash-heading-2">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-wowdash-body-2" aria-expanded="false" aria-controls="accordion-collapse-wowdash-body-2">
                                            <span>Can I change my plan later?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-wowdash-body-2" class="hidden" aria-labelledby="accordion-collapse-wowdash-heading-2">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-wowdash-heading-4">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-wowdash-body-4" aria-expanded="false" aria-controls="accordion-collapse-wowdash-body-4">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-wowdash-body-4" class="hidden" aria-labelledby="accordion-collapse-wowdash-heading-4">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-wowdash-heading-5">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-wowdash-body-5" aria-expanded="false" aria-controls="accordion-collapse-wowdash-body-5">
                                            <span>How does billing work?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-wowdash-body-5" class="hidden" aria-labelledby="accordion-collapse-wowdash-heading-5">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="vertical-agency" role="tabpanel" aria-labelledby="vertical-agency-tab">
                            <div id="accordion-collapse-agency" data-accordion="collapse">
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-agency-heading-4">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-agency-body-4" aria-expanded="false" aria-controls="accordion-collapse-agency-body-4">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-agency-body-4" class="hidden" aria-labelledby="accordion-collapse-agency-heading-4">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-agency-heading-1">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-agency-body-1" aria-expanded="true" aria-controls="accordion-collapse-agency-body-1">
                                            <span>Is there a free trial available?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-agency-body-1" class="hidden" aria-labelledby="accordion-collapse-agency-heading-1">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-agency-heading-2">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-agency-body-2" aria-expanded="false" aria-controls="accordion-collapse-agency-body-2">
                                            <span>Can I change my plan later?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-agency-body-2" class="hidden" aria-labelledby="accordion-collapse-agency-heading-2">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-agency-heading-3">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-agency-body-3" aria-expanded="false" aria-controls="accordion-collapse-agency-body-3">
                                            <span>What is your cancellation policy?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-agency-body-3" class="hidden" aria-labelledby="accordion-collapse-agency-heading-3">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-agency-heading-5">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-agency-body-5" aria-expanded="false" aria-controls="accordion-collapse-agency-body-5">
                                            <span>How does billing work?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-agency-body-5" class="hidden" aria-labelledby="accordion-collapse-agency-heading-5">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl">
                                    <div id="accordion-collapse-agency-heading-6">
                                        <button type="button" class="flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent" data-accordion-target="#accordion-collapse-agency-body-6" aria-expanded="false" aria-controls="accordion-collapse-agency-body-6">
                                            <span>How do I change my account email?</span>
                                            <span class="w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base"><i class="ri-add-line"></i></span>
                                        </button>
                                    </div>
                                    <div id="accordion-collapse-agency-body-6" class="hidden" aria-labelledby="accordion-collapse-agency-heading-6">
                                        <div class="p-5 pt-0">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection