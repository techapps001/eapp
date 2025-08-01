@extends('layout.layout')
@php
    $title='Video Generator';
    $subTitle = 'Video Generator';
    $script ='<script>
    // ================== Image Upload Js Start ===========================
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#imagePreview").css("background-image", "url(" + e.target.result + ")");
                $("#imagePreview").hide();
                $("#imagePreview").fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    // ================== Image Upload Js End ===========================
    </script>';
@endphp

@section('content')

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            <div class="card h-full p-0 border-0">
                <div class="card-body p-6">
                    <div class="mb-5">
                        <label for="Title" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Title</label>
                        <input type="text" class="form-control px-4 py-3.5 h-12" id="Title" placeholder="Enter Title">
                    </div>
                    <div class="mb-5">
                        <label for="Voice" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Language</label>
                        <select class="form-select form-control px-4 py-1 text-neutral-600 dark:text-white h-12" id="Voice">
                            <option value="">Male</option>
                            <option value="">Female</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="Desc" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Desc</label>
                        <textarea class="form-control px-4 py-3.5 " id="Desc" placeholder="Write something... "></textarea>
                    </div>
                    <div class="mb-5">
                        <label class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Upload Avatar</label>
                        <div id="fileUpload" class="fileUpload image-upload max-w-[220px]"></div>
                    </div>
                    <button type="button" class="btn btn-primary flex items-center gap-2 px-5 shrink-0">
                        Generate
                        <i class="ri-ai-generate"></i>
                    </button>
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
                                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6">
                                            <div class="col-span-12 sm:col-span-6 xl:col-span-4">
                                                <div class="generated-image-item rounded-lg overflow-hidden relative">
                                                    <img src="{{ asset('assets/images/chatgpt/image-generator5.png') }}" alt="" class="w-full h-full object-fit-cover">
                                                    <button class="w-[72px] h-[72px] bg-primary-600 hover:bg-primary-700 rounded-full text-white text-3xl flex items-center justify-center bg-hover-primary-700 absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2">
                                                        <i class="ri-play-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary flex items-center gap-2 px-5 shrink-0 mt-4">
                                            Download
                                            <i class="ri-download-2-line"></i>
                                        </button>

                                        <div class="mt-6 flex items-center justify-between gap-4">
                                            <div class="flex items-center gap-5 bg-neutral-50 dark:bg-neutral-600 rounded-lg px-4 py-2.5 line-height-1">
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-up-line line-height-1"></i></button>
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-down-line"></i></button>
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-share-forward-line"></i></button>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary flex items-center gap-2"> <i class="ri-repeat-2-line"></i> Regenerate</button>
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
                                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6">
                                            <div class="col-span-12 sm:col-span-6 xl:col-span-4">
                                                <div class="generated-image-item rounded-lg overflow-hidden relative">
                                                    <img src="{{ asset('assets/images/chatgpt/image-generator5.png') }}" alt="" class="w-full h-full object-fit-cover">
                                                    <button class="w-[72px] h-[72px] bg-primary-600 hover:bg-primary-700 rounded-full text-white text-3xl flex items-center justify-center bg-hover-primary-700 absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2">
                                                        <i class="ri-play-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary flex items-center gap-2 px-5 shrink-0 mt-4">
                                            Download
                                            <i class="ri-download-2-line"></i>
                                        </button>

                                        <div class="mt-6 flex items-center justify-between gap-4">
                                            <div class="flex items-center gap-5 bg-neutral-50 dark:bg-neutral-600 rounded-lg px-4 py-2.5 line-height-1">
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-up-line line-height-1"></i></button>
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-down-line"></i></button>
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-share-forward-line"></i></button>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary flex items-center gap-2"> <i class="ri-repeat-2-line"></i> Regenerate</button>
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
