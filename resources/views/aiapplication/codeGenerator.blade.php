@extends('layout.layout')
@php
    $title='Code Generator';
    $subTitle = 'Code Generator';
@endphp

@section('content')

        <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
                <div class="card p-0 border-0">
                    <div class="card-body p-0">
                        <div class="p-6">
                            <a href="{{ route('textGeneratorNew') }}" class="btn btn-primary text-sm btn-sm px-3 py-3 w-full rounded-lg flex items-center justify-center gap-2">
                                <i class="ri-messenger-line"></i>
                                New Chat
                            </a>
                        </div>

                        <ul class="ai-chat-list scroll-sm px-6 pb-6 max-h-[644px] overflow-y-auto">
                            <li class="mb-4 mt-0"><span class="text-primary-600 dark:text-primary-600 text-sm font-semibold">Today</span></li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Please create a 5 Column table with HTM</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                            </li>

                            <li class="mb-4 mt-6"><span class="text-primary-600 text-sm font-semibold">Yesterday</span></li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Online School Education Learning</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                            </li>

                            <li class="mb-4 mt-6"><span class="text-primary-600 text-sm font-semibold">17/06/2025</span></li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Online School Education Learning</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                            </li>

                            <li class="mb-4 mt-6"><span class="text-primary-600 text-sm font-semibold">15/06/2025</span></li>
                            <li class="mb-0">
                                <a href="{{ route('textGenerator') }}" class="line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600">Calorie-dense foods: Needs, healthy</a>
                            </li>
                        </ul>

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
                                    <h6 class="mb-0 text-lg">Please create a 5 Column table with HTML Css and js</h6>
                                </div>
                                <div class="flex items-center gap-3">
                                    <button class="text-secondary-light flex"><iconify-icon icon="mi:print" class="icon text-2xl line-height-1"></iconify-icon></button>
                                    <button class="text-secondary-light flex"><iconify-icon icon="mdi:star-outline" class="icon text-2xl line-height-1"></iconify-icon></button>
                                    <button class="text-secondary-light flex"><iconify-icon icon="material-symbols:delete-outline" class="icon text-2xl line-height-1"></iconify-icon></button>
                                </div>
                            </div>
                            <div class="card-body p-0 max-h-[612px] min-h-[612px] overflow-y-auto">

                                <div class="py-4 px-6 flex items-start justify-between gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4">
                                    <div class="flex items-center gap-4">
                                        <div class="img overflow-hidden shrink-0">
                                            <img src="{{ asset('assets/images/chat/1.png') }}" alt="image" class="w-[44px] h-[44px] rounded-full object-fit-cover">
                                        </div>
                                        <div class="info grow">
                                            <h6 class="text-lg mb-1.5">Adam Milner</h6>
                                            <p class="mb-0 text-secondary-light text-sm">Please create a 5 Column table with HTML Css and js</p>
                                        </div>
                                    </div>
                                    <button type="button" class="flex items-center gap-1.5 px-2 py-1.5 bg-primary-50 dark:bg-primary-600/25 rounded bg-hover-primary-100 shrink-0"> <i class="ri-edit-2-fill"></i>  Edit</button>
                                </div>

                                <div class="py-4 px-6 border-b border-neutral-200 dark:border-neutral-600">
                                    <div class="flex items-start gap-3">
                                        <img src="{{ asset('assets/images/wow-dash-favicon.png') }}" alt="" class="w-10 h-10 rounded-full">
                                        <div class="">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <h6 class="mb-0 text-lg">WowDash</h6>
                                            </div>
                                            <div class="info grow">
                                                <pre class="language-html mb-4 text-secondary-light text-sm">
                                                    <code>
        &lt;html lang=&quot;en&quot;&gt;
            &lt;head&gt;
                &lt;meta charset=&quot;UTF-8&quot;&gt;
                &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
                &lt;link rel=&quot;stylesheet&quot; href=&quot;styles.css&quot;&gt;
                &lt;title&gt;5 Column Table&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;div class=&quot;table-container&quot;&gt;
                    &lt;table id=&quot;data-table&quot;&gt;
                        &lt;thead&gt;
                        &lt;tr&gt;
                            &lt;th&gt;Column 1&lt;/th&gt;
                            &lt;th&gt;Column 2&lt;/th&gt;
                            &lt;th&gt;Column 3&lt;/th&gt;
                            &lt;th&gt;Column 4&lt;/th&gt;
                            &lt;th&gt;Column 5&lt;/th&gt;
                        &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                        &lt;!-- Table content goes here --&gt;            
                        &lt;/tbody&gt;
                    &lt;/table&gt;
                &lt;/div&gt;
                &lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
            &lt;/body&gt;
        &lt;/html&gt;
                                                    </code>
                                                </pre>
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
                                    </div>
                                </div>

                                <div class="py-4 px-6 flex items-start justify-between gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4">
                                    <div class="flex items-center gap-4">
                                        <div class="img overflow-hidden shrink-0">
                                            <img src="{{ asset('assets/images/chat/1.png') }}" alt="image" class="w-[44px] h-[44px] rounded-full object-fit-cover">
                                        </div>
                                        <div class="info grow">
                                            <h6 class="text-lg mb-1.5">Adam Milner</h6>
                                            <p class="mb-0 text-secondary-light text-sm">Please create a 5 Column table with HTML Css and js</p>
                                        </div>
                                    </div>
                                    <button type="button" class="flex items-center gap-1.5 px-2 py-1.5 bg-primary-50 dark:bg-primary-600/25 rounded bg-hover-primary-100 shrink-0"> <i class="ri-edit-2-fill"></i>  Edit</button>
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
    </div>
    
@endsection
