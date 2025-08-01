@extends('layout.layout')
@php
    $title='Text Generator';
    $subTitle = 'Text Generator';
@endphp

@section('content')

    <div class="grid grid-cols-1 2xl:grid-cols-12 gap-6 flex-wrap-reverse">
        <div class="col-span-1 lg:col-span-4 2xl:col-span-3">
            <div class="card p-0 border-0">
                <div class="card-body p-0">
                    <div class="p-6">
                        <a href="text-generator-new.html" class="btn btn-primary text-sm btn-sm px-3 py-3 w-full rounded-lg flex items-center justify-center gap-2">
                            <i class="ri-messenger-line"></i>
                            New Chat
                        </a>
                    </div>

                    <ul class="ai-chat-list scroll-sm px-6 pb-6 max-h-[644px] overflow-y-auto">
                        <li class="mb-4 mt-0"><span class="text-primary-600 dark:text-primary-600 text-sm font-semibold">Today</span></li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">UI/UX Design Roadmap write me the roadmap right now </a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class="mb-4 mt-6"><span class="text-primary-600 text-sm font-semibold">Yesterday</span></li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Online School Education Learning</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class="mb-4 mt-6"><span class="text-primary-600 text-sm font-semibold">17/06/2024</span></li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Online School Education Learning</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class="mb-4 mt-6"><span class="text-primary-600 text-sm font-semibold">15/06/2024</span></li>
                        <li class="mb-0">
                            <a href="" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-span-1 lg:col-span-8 2xl:col-span-9">
            <div class="chat-600 card overflow-hidden border-0">
                <div class="chat-sidebar-single gap-2 flex items-center px-6 py-5 justify-between cursor-default flex-nowrap">
                    <div class="flex items-center gap-4">
                        <a href="text-generator-new.html" class="text-neutral-600 dark:text-neutral-200 text-2xl line-height-1"><i class="ri-arrow-left-line"></i></a>
                        <h6 class="text-lg mb-0 text-line-1">UI/UX Design Roadmap write me</h6>
                    </div>

                    <div class="flex items-center gap-4 shrink-0">
                        <button type="button" class="text-secondary-light text-xl line-height-1 text-hover-primary-600"><i class="ri-edit-2-line"></i></button>
                        <button type="button" class="text-secondary-light text-xl line-height-1 text-hover-primary-600"><i class="ri-delete-bin-6-line"></i></button>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-message-list px-6 py-5 max-h-[612px] min-h-[612px] overflow-y-auto">

                    <!-- User generated Text Start -->
                    <div class="flex items-start justify-between gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4">
                        <div class="flex items-center gap-4">
                            <div class="img overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/chat/1.png') }}" alt="image" class="w-[44px] h-[44px] rounded-full object-fit-cover">
                            </div>
                            <div class="info grow">
                                <h6 class="text-lg mb-1.5">Adam Milner</h6>
                                <p class="mb-0 text-secondary-light text-sm">UI/UX Design Roadmap write me the roadmap right now </p>
                            </div>
                        </div>
                        <button type="button" class="flex items-center gap-1.5 px-2 py-1.5 bg-primary-50 dark:bg-primary-600/25 rounded bg-hover-primary-100 shrink-0"> <i class="ri-edit-2-fill"></i>  Edit</button>
                    </div>
                    <!-- User generated Text End -->
                    <!-- WowDash generated Text Start -->
                    <div class="flex items-start gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4">
                        <div class="img overflow-hidden shrink-0">
                            <img src="{{ asset('assets/images/wow-dash-favicon.png') }}" alt="image" class="w-[44px] h-[44px] rounded-full object-fit-cover">
                        </div>
                        <div class="info grow">
                            <h6 class="text-lg mb-4 mt-2">WowDash</h6>
                            <p class="mb-4 text-secondary-light text-sm">Creating a UI/UX Design roadmap involves several key stages, from initial research to final testing and iteration. Here’s a detailed roadmap that outlines the typical steps and best practices in a UI/UX design project:</p>
                            <p class="font-semibold text-neutral-600 dark:text-neutral-200 my-4">1. Research and Discovery</p>
                            <p class="text-neutral-600 dark:text-neutral-200 my-4">a. Understand the Business Goals</p>

                            <ul class="list-style">
                                <li class="text-neutral-600 dark:text-neutral-200 m-0"> <span class="font-semibold text-neutral-600 dark:text-neutral-200">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                                <li class="text-neutral-600 dark:text-neutral-200 m-0"> <span class="font-semibold text-neutral-600 dark:text-neutral-200">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                            </ul>

                            <div class="mt-6 flex items-center justify-between gap-4">
                                <div class="flex items-center gap-5 bg-neutral-50 dark:bg-neutral-600 rounded-lg px-4 py-2.5 line-height-1">
                                    <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-up-line line-height-1"></i></button>
                                    <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-down-line"></i></button>
                                    <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-share-forward-line"></i></button>
                                    <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-file-copy-line"></i></button>
                                </div>
                                <button type="button" class="btn btn-outline-primary flex items-center gap-2"> <i class="ri-repeat-2-line"></i> Regenerate</button>
                            </div>
                        </div>
                    </div>
                    <!-- WowDash generated Text End -->
                    <!-- User generated Text Start -->
                    <div class="flex items-start justify-between gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4">
                        <div class="flex items-center gap-4">
                            <div class="img overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/chat/1.png') }}" alt="image" class="w-[44px] h-[44px] rounded-full object-fit-cover">
                            </div>
                            <div class="info grow">
                                <h6 class="text-lg mb-1.5">Adam Milner</h6>
                                <p class="mb-0 text-secondary-light text-sm">UI/UX Design Roadmap write me the roadmap right now </p>
                            </div>
                        </div>
                        <button type="button" class="flex items-center gap-1.5 px-2 py-1.5 bg-primary-50 dark:bg-primary-600/25 rounded bg-hover-primary-100 shrink-0"> <i class="ri-edit-2-fill"></i>  Edit</button>
                    </div>
                    <!-- User generated Text End -->
                    <!-- WowDash generated Text Start -->
                    <div class="flex items-start gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4">
                        <div class="img overflow-hidden shrink-0">
                            <img src="{{ asset('assets/images/wow-dash-favicon.png') }}" alt="image" class="w-[44px] h-[44px] rounded-full object-fit-cover">
                        </div>
                        <div class="info grow">
                            <h6 class="text-lg mb-4 mt-2">WowDash</h6>
                            <p class="mb-4 text-secondary-light text-sm">Creating a UI/UX Design roadmap involves several key stages, from initial research to final testing and iteration. Here’s a detailed roadmap that outlines the typical steps and best practices in a UI/UX design project:</p>
                            <p class="font-semibold text-neutral-600 dark:text-neutral-200 my-4">1. Research and Discovery</p>
                            <p class="text-neutral-600 dark:text-neutral-200 my-4">a. Understand the Business Goals</p>

                            <ul class="list-style">
                                <li class="text-neutral-600 dark:text-neutral-200 m-0"> <span class="font-semibold text-neutral-600 dark:text-neutral-200">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                                <li class="text-neutral-600 dark:text-neutral-200 m-0"> <span class="font-semibold text-neutral-600 dark:text-neutral-200">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                            </ul>

                            <div class="mt-6 flex items-center justify-between">
                                <div class="flex items-center gap-5 bg-neutral-50 dark:bg-neutral-600 rounded-lg px-4 py-2.5 line-height-1">
                                    <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-up-line line-height-1"></i></button>
                                    <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-down-line"></i></button>
                                    <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-share-forward-line"></i></button>
                                    <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-file-copy-line"></i></button>
                                </div>
                                <button type="button" class="btn btn-outline-primary flex items-center gap-2"> <i class="ri-repeat-2-line"></i> Regenerate</button>
                            </div>
                        </div>
                    </div>
                    <!-- WowDash generated Text End -->
                </div>
                <form class="chat-message-box border-t border-neutral-200 dark:border-neutral-600 flex items-center gap-4 p-6">
                    <input type="text" class="w-full border-0 focus:ring-0 bg-transparent dark:bg-transparent px-0" name="chatMessage" placeholder="Message wowdash...">
                    <button type="submit" class="w-[44px] h-[44px] flex justify-center items-center rounded-lg bg-primary-600 text-white bg-hover-primary-700 text-xl">
                        <iconify-icon icon="f7:paperplane"></iconify-icon>
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
