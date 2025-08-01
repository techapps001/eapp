@extends('layout.layout')
@php
$title='Text Generator';
$subTitle = 'Text Generator';
@endphp

@section('content')

    <div class="row gy-4 flex-wrap-reverse">
        <div class="col-xxl-3 col-lg-4">
            <div class="card h-full p-0">
                <div class="card-body p-0">
                    <div class="p-6">
                        <a href="text-generator-new.html" class="btn btn-primary text-sm btn-sm px-3 py-3 w-full rounded-lg flex items-center justify-center gap-2">
                            <i class="ri-messenger-line"></i>
                            New Chat
                        </a>
                    </div>

                    <ul class="ai-chat-list scroll-sm pe-6 ps-1.5 pb-6">
                        <li class="mb-4 mt-0"><span class="text-primary-600 text-sm font-semibold">Today</span></li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">UI/UX Design Roadmap write me the roadmap right now </a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class="mb-4 mt-6"><span class="text-primary-600 text-sm font-semibold">Yesterday</span></li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Online School Education Learning</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class="mb-4 mt-6"><span class="text-primary-600 text-sm font-semibold">17/06/2024</span></li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Online School Education Learning</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class="mb-4">
                            <a href="text-generator.html" class="text-line-1 text-secondary-light text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class="mb-4 mt-6"><span class="text-primary-600 text-sm font-semibold">15/06/2024</span></li>
                        <li class="mb-0">
                            <a href="" class="text-line-1 text-secondary-light text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-xxl-9 col-lg-8">
            <div class="chat-600 card overflow-hidden">
                <div class="chat-sidebar-single gap-2 justify-between cursor-default flex-nowrap">
                    <div class="flex items-center gap-4">
                        <a href="text-generator-new.html" class="text-neutral-600 dark:text-neutral-200 text-2xl line-height-1"><i class="ri-arrow-left-line"></i></a>
                        <h6 class="text-lg mb-0 text-line-1">New Chat</h6>
                    </div>

                    <div class="flex items-center gap-4 shrink-0">
                        <button type="button" class="text-secondary-light text-xl line-height-1 text-hover-primary-600"><i class="ri-edit-2-line"></i></button>
                        <button type="button" class="text-secondary-light text-xl line-height-1 text-hover-primary-600"><i class="ri-delete-bin-6-line"></i></button>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-message-list max-h-[612px] min-h-[612px] relative">
                    <div class="flex items-center justify-center flex-col h-full absolute top-1/2 start-1/2 translate-middle">
                        <img src="{{ asset('assets/images/chatgpt/empty-message-icon1.png') }}" alt="">
                        <span class="text-secondary-light text-base mt-4">Type New Message </span>
                    </div>
                </div>
                <form class="chat-message-box">
                    <input type="text" name="chatMessage" placeholder="Message wowdash...">
                    <button type="submit" class="w-[44px] h-[44px] flex justify-center items-center rounded-lg bg-primary-600 text-white bg-hover-primary-700 text-xl">
                        <iconify-icon icon="f7:paperplane"></iconify-icon>
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
