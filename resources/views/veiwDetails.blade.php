@extends('layout.layout')
@php
        $title='Email';
        $subTitle = 'Components / Email';
        $script ='<script>
                        // ========================= Adjust Textarea Height depending of text lines(default height 40px) Js Start ===========================
                        function adjustHeight(textarea) {
                            // Calculate the scroll height of the content
                            let scrollHeight = textarea.scrollHeight;

                            // Set the textarea height to the scroll height, but not exceeding the maximum height
                            if (scrollHeight > 44 && scrollHeight <= 60) {
                                textarea.style.height = scrollHeight + "px";
                            } else if (scrollHeight > 60) {
                                // textarea.style.height = "60px !important";
                                textarea.setAttribute("style", "height: 60px !important;");
                            }
                        }
                        // ========================= Adjust Textarea Height depending of text lines(default height 40px) Js End ===========================
                </script>';
@endphp

@section('content')

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            <div class="card h-full p-0 border-0">
                <div class="card-body p-6">
                    <button type="button" class="btn bg-primary-600 hover:bg-primary-700 text-white dark:text-white text-sm btn-sm px-3 py-3 w-full rounded-lg flex items-center gap-2 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <iconify-icon icon="fa6-regular:square-plus" class="icon text-lg line-height-1"></iconify-icon>
                        Compose
                    </button>

                    <div class="mt-4">
                        <ul>
                            <li class="item-active mb-1.5">
                                <a href="{{ route('email') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                    <span class="flex items-center gap-2.5 justify-between w-full">
                                        <span class="flex items-center gap-2.5">
                                            <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="uil:envelope" class="icon line-height-1"></iconify-icon></span>
                                            <span class="font-semibold">Inbox</span>
                                        </span>
                                        <span class="font-medium">800</span>
                                    </span>
                                </a>
                            </li>
                            <li class="mb-1.5">
                                <a href="{{ route('starred') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                    <span class="flex items-center gap-2.5 justify-between w-full">
                                        <span class="flex items-center gap-2.5">
                                            <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="ph:star-bold" class="icon line-height-1"></iconify-icon></span>
                                            <span class="font-semibold">Starred</span>
                                        </span>
                                        <span class="font-medium">250</span>
                                    </span>
                                </a>
                            </li>
                            <li class="mb-1.5">
                                <a href="{{ route('email') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                    <span class="flex items-center gap-2.5 justify-between w-full">
                                        <span class="flex items-center gap-2.5">
                                            <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="ion:paper-plane-outline" class="icon line-height-1"></iconify-icon></span>
                                            <span class="font-semibold">Sent</span>
                                        </span>
                                        <span class="font-medium">80</span>
                                    </span>
                                </a>
                            </li>
                            <li class="mb-1.5">
                                <a href="{{ route('email') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                    <span class="flex items-center gap-2.5 justify-between w-full">
                                        <span class="flex items-center gap-2.5">
                                            <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="lucide:pencil" class="icon line-height-1"></iconify-icon></span>
                                            <span class="font-semibold">Draft</span>
                                        </span>
                                        <span class="font-medium">50</span>
                                    </span>
                                </a>
                            </li>
                            <li class="mb-1.5">
                                <a href="{{ route('email') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                    <span class="flex items-center gap-2.5 justify-between w-full">
                                        <span class="flex items-center gap-2.5">
                                            <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="ph:warning-bold" class="icon line-height-1"></iconify-icon></span>
                                            <span class="font-semibold">Spam</span>
                                        </span>
                                        <span class="font-medium">30</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('email') }}" class="hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center">
                                    <span class="flex items-center gap-2.5 justify-between w-full">
                                        <span class="flex items-center gap-2.5">
                                            <span class="icon text-2xl line-height-1 flex group-hover:text-primary-600"><iconify-icon icon="material-symbols:delete-outline" class="icon line-height-1"></iconify-icon></span>
                                            <span class="font-semibold">Bin</span>
                                        </span>
                                        <span class="font-medium">20</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <h6 class="text-lg font-semibold text-neutral-600 dark:text-neutral-200 mb-4">TAGS</h6>
                            <ul>
                                <li class="mb-5">
                                    <span class="line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5">
                                        <span class="w-2 h-2 bg-primary-600 rounded-full"></span>
                                        Personal
                                    </span>
                                </li>
                                <li class="mb-5">
                                    <span class="line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5">
                                        <span class="w-2 h-2 bg-purple-600 rounded-full"></span>
                                        Social
                                    </span>
                                </li>
                                <li class="mb-5">
                                    <span class="line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5">
                                        <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                                        Promotions
                                    </span>
                                </li>
                                <li class="mb-5">
                                    <span class="line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5">
                                        <span class="w-2 h-2 bg-warning-600 rounded-full"></span>
                                        Business
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
            <div class="card h-full p-0 email-card overflow-x-auto block border-0">
                <div class="min-w-[450px] flex flex-col justify-between h-full">
                    <div class="">
                        <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center gap-3 justify-between flex-wrap">
                            <div class="flex items-center gap-2">
                                <button class="text-secondary-light flex me-2"><iconify-icon icon="mingcute:arrow-left-line" class="icon text-xl line-height-1"></iconify-icon></button>
                                <h6 class="mb-0 text-lg">Kathryn Murphy</h6>
                                <span class="bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 text-sm rounded px-2">Personal</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <button class="text-secondary-light flex"><iconify-icon icon="mi:print" class="icon text-2xl line-height-1"></iconify-icon></button>
                                <button class="text-secondary-light flex"><iconify-icon icon="mdi:star-outline" class="icon text-2xl line-height-1"></iconify-icon></button>
                                <button class="text-secondary-light flex"><iconify-icon icon="material-symbols:delete-outline" class="icon text-2xl line-height-1"></iconify-icon></button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="py-4 px-6 border-b border-neutral-200 dark:border-neutral-600">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('assets/images/user-list/user-list1.png') }}" alt="" class="w-10 h-10 rounded-full">
                                    <div class="">
                                        <div class="flex items-center flex-wrap gap-2">
                                            <h6 class="mb-0 text-lg">Kathryn Murphy</h6>
                                            <span class="text-secondary-light text-base">kathrynmurphy@gmail.com</span>
                                        </div>
                                        <div class="mt-5">
                                            <p class="mb-4 text-neutral-600 dark:text-neutral-200">Hi William</p>
                                            <p class="mb-4 text-neutral-600 dark:text-neutral-200">Just confirming that we transferred $63.86 to you via PayPal <a href="javascript:void(0)" class="text-primary-600 underline">(info367@gmail.com)</a> which you earned on the themewow Market since your last payout.</p>
                                            <p class="mb-0 text-neutral-600 dark:text-neutral-200">Thank you for selling with us!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-4 px-6 border-b border-neutral-200 dark:border-neutral-600">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('assets/images/user-list/user-list2.png') }}" alt="" class="w-10 h-10 rounded-full">
                                    <div class="">
                                        <div class="flex items-center flex-wrap gap-2">
                                            <h6 class="mb-0 text-lg">Subrata Sen</h6>
                                            <span class="text-secondary-light text-base">subratasen@gmail.com</span>
                                        </div>
                                        <div class="mt-5">
                                            <p class="mb-0 text-neutral-600 dark:text-neutral-200">Awesome, thank you so much!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer py-4 px-6 bg-white dark:bg-neutral-700 border-t border-neutral-200 dark:border-neutral-600">
                        <form action="#">
                            <div class="flex items-center justify-between">
                                <textarea class="textarea-max-height bg-transparent focus:ring-0 w-full p-0 rounded-lg border-0 py-2 ps-2 resize-none scroll-sm" oninput="adjustHeight(this)" placeholder="Write massage"></textarea>
                                <div class="flex items-center gap-4 ms-4">
                                    <div class="">
                                        <label for="attatchment" class="text-secondary-light text-xl">
                                            <iconify-icon icon="octicon:link-16" class="icon line-height-1"></iconify-icon>
                                        </label>
                                        <input type="file" id="attatchment" hidden>
                                    </div>
                                    <div class="">
                                        <label for="gallery" class="text-secondary-light text-xl">
                                            <iconify-icon icon="solar:gallery-bold" class="icon line-height-1"></iconify-icon>
                                        </label>
                                        <input type="file" id="gallery" hidden>
                                    </div>
                                    <button type="submit" class="btn bg-primary-600 hover:bg-primary-700 text-white text-sm px-3 py-3 w-full rounded-lg flex items-center justify-center gap-1 h-[44px]">
                                        <iconify-icon icon="ion:paper-plane-outline" class="icon text-lg line-height-1"></iconify-icon>
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
