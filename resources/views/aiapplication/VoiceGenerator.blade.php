@extends('layout.layout')
@php
    $title='Voice Generator';
    $subTitle = 'Voice Generator';
    $script ='<script>
                        // ================== Audio Js Start ===========================
                        $(function() {
                            $("audio").audioPlayer();
                        });
                        // ================== Audio Js End ===========================
                </script>';
@endphp

@section('content')

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            <div class="card h-full p-0 border-0">
                <div class="card-body p-6">
                    <div class="mb-5">
                        <label for="Lnaguage" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Language</label>
                        <select class="form-select form-control px-4 py-1 text-neutral-600 dark:text-white h-12" id="Lnaguage">
                            <option value="">Bangla</option>
                            <option value="">Hindi</option>
                            <option value="">Urdhu</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="AudioEffect" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Audio Effect</label>
                        <select class="form-select form-control px-4 py-1 text-neutral-600 dark:text-white h-12" id="AudioEffect">
                            <option value="">Smart Voice</option>
                            <option value="">Old Voice</option>
                            <option value="">Similar Voice</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="Voice" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Voice</label>
                        <select class="form-select form-control px-4 py-1 text-neutral-600 dark:text-white h-12" id="Voice">
                            <option value="">Amber Health</option>
                            <option value="">Amber Health</option>
                            <option value="">Amber Health</option>
                            <option value="">Amber Health</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="Format" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Format</label>
                        <select class="form-select form-control px-4 py-1 text-neutral-600 dark:text-white h-12" id="Format">
                            <option value="">Mp3</option>
                            <option value="">Mp4</option>
                        </select>
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
                                <h6 class="mb-0 text-lg">Alright guys, so I've just seen this website...</h6>
                            </div>
                            <div class="flex items-center gap-3">
                                <button class="text-secondary-light flex"><iconify-icon icon="mi:print" class="icon text-2xl line-height-1"></iconify-icon></button>
                                <button class="text-secondary-light flex"><iconify-icon icon="mdi:star-outline" class="icon text-2xl line-height-1"></iconify-icon></button>
                                <button class="text-secondary-light flex"><iconify-icon icon="material-symbols:delete-outline" class="icon text-2xl line-height-1"></iconify-icon></button>
                            </div>
                        </div>
                        <div class="card-body p-0">

                            <div class="py-4 px-6 flex items-start justify-between gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4">
                                <div class="flex items-center gap-4">
                                    <div class="img overflow-hidden shrink-0">
                                        <img src="{{ asset('assets/images/chat/1.png') }}" alt="image" class="w-[44px] h-[44px] rounded-full object-fit-cover">
                                    </div>
                                    <div class="info grow">
                                        <h6 class="text-lg mb-1.5">Adam Milner</h6>
                                        <p class="mb-0 text-secondary-light text-sm">Alright guys, so I've just seen this website, Fortunanest website, it's an investment website and you invest there. So I actually tried it some months, I tried it just for 3 months and I realized everything was working correct. I was thinking it was this fake website, I never met this website.                                        </p>
                                    </div>
                                </div>
                                <button type="button" class="flex items-center gap-1.5 px-2 py-1.5 bg-primary-50 dark:bg-primary-600/25 rounded bg-hover-primary-100 shrink-0"> <i class="ri-edit-2-fill"></i>  Edit</button>
                            </div>

                            <div class="py-4 px-6 border-b border-neutral-200 dark:border-neutral-600">
                                <div class="flex items-start gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4">
                                    <div class="img overflow-hidden shrink-0">
                                        <img src="{{ asset('assets/images/wow-dash-favicon.png') }}" alt="image" class="w-[44px] h-[44px] rounded-full object-fit-cover">
                                    </div>
                                    <div class="info grow">
                                        <h6 class="text-lg mb-4 mt-2">WowDash</h6>
                                        <audio preload="auto" controls>
                                            <source src="https://www.w3schools.com/html/horse.mp3">
                                        </audio>

                                        <div class="mt-6 flex items-center gap-4">
                                            <button type="button" class="btn btn-primary flex items-center gap-2 px-5 shrink-0">
                                                Download
                                                <i class="ri-download-2-line"></i>
                                            </button>
                                            <select class="form-select form-control px-4 py-1 text-neutral-600 dark:text-white h-12 w-auto">
                                                <option value="">Mp3</option>
                                                <option value="">Mp4</option>
                                            </select>
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
