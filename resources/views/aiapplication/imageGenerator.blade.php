@extends('layout.layout')
@php
    $title='Image Generator';
    $subTitle = 'Image Generator';
    $script = '<script>
                    $(".generated-image-item .form-check-input").on("click", function() {
                        $(this).parent().parent(".generated-image-item").toggleClass("border border-primary-600 border-width-2-px")
                    });
                </script>';
@endphp

@section('content')

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            <div class="card h-full p-0 border-0">
                <div class="card-body p-6">
                    <div class="mb-5">
                        <label for="resulation" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Image Resolution</label>
                        <input type="text" class="form-control px-4 py-3.5 border text-neutral-600 dark:text-white h-12" id="resulation" value="1024 x 1024px">
                    </div>
                    <div class="mb-5">
                        <label for="style" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Image Resolution</label>
                        <select class="form-select form-control px-4 py-1 text-neutral-600 dark:text-white h-12" id="style">
                            <option value="">Carton</option>
                            <option value="">Oil painting</option>
                            <option value="">Pencil sketch</option>
                            <option value="">Paper collage</option>
                            <option value="">Street art</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="LightingStyle" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Lighting Style</label>
                        <select class="form-select form-control px-4 py-1 text-neutral-600 dark:text-white h-12" id="LightingStyle">
                            <option value="">Back lighting</option>
                            <option value="">None</option>
                            <option value="">Chiaroscuro</option>
                            <option value="">God rays</option>
                            <option value="">Studio lighting</option>
                            <option value="">Candlelight</option>
                            <option value="">Street lighting</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="Mood" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Mood</label>
                        <select class="form-select form-control px-4 py-1 text-neutral-600 dark:text-white h-12" id="Mood">
                            <option value="">None</option>
                            <option value="">Chiaroscuro</option>
                            <option value="">God rays</option>
                            <option value="">Studio lighting</option>
                            <option value="">Candlelight</option>
                            <option value="">Street lighting</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="imageNumber" class="text-sm font-semibold text-neutral-600 dark:text-neutral-200 mb-2 inline-block">Number Of Image</label>
                        <input type="number" class="form-control px-4 py-3.5 text-neutral-600 dark:text-white h-12" id="imageNumber" value="4">
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
                                <h6 class="mb-0 text-lg">Please, Make 4 variant of this image Quickly As Soon As possible</h6>
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
                                        <p class="mb-0 text-secondary-light text-sm">Please, Make 4 variant of this image Quickly As Soon As possible</p>
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

                                        <div class="grid sm:grid-cols-12 gap-6">
                                            <div class="col-span-12 sm:col-span-6 xl:col-span-3">
                                                <div class="generated-image-item rounded-lg overflow-hidden relative">
                                                    <img src="{{ asset('assets/images/chatgpt/image-generator1.png') }}" alt="" class="w-full h-full object-fit-cover">
                                                    <div class="form-check style-check flex items-center absolute top-0 start-0 ms-8 mt-2">
                                                        <input class="form-check-input rounded border border-neutral-400" id="image1" type="checkbox" name="checkbox">
                                                    </div>
                                                    <label for="image1" class="absolute start-0 top-0 w-full h-full"></label>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 xl:col-span-3">
                                                <div class="generated-image-item rounded-lg overflow-hidden relative">
                                                    <img src="{{ asset('assets/images/chatgpt/image-generator2.png') }}" alt="" class="w-full h-full object-fit-cover">
                                                    <div class="form-check style-check flex items-center absolute top-0 start-0 ms-8 mt-2">
                                                        <input class="form-check-input rounded border border-neutral-400" id="image2" type="checkbox" name="checkbox">
                                                    </div>
                                                    <label for="image2" class="absolute start-0 top-0 w-full h-full"></label>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 xl:col-span-3">
                                                <div class="generated-image-item rounded-lg overflow-hidden relative">
                                                    <img src="{{ asset('assets/images/chatgpt/image-generator3.png') }}" alt="" class="w-full h-full object-fit-cover">
                                                    <div class="form-check style-check flex items-center absolute top-0 start-0 ms-8 mt-2">
                                                        <input class="form-check-input rounded border border-neutral-400" id="image3" type="checkbox" name="checkbox">
                                                    </div>
                                                    <label for="image3" class="absolute start-0 top-0 w-full h-full"></label>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 xl:col-span-3">
                                                <div class="generated-image-item rounded-lg overflow-hidden relative">
                                                    <img src="{{ asset('assets/images/chatgpt/image-generator4.png') }}" alt="" class="w-full h-full object-fit-cover">
                                                    <div class="form-check style-check flex items-center absolute top-0 start-0 ms-8 mt-2">
                                                        <input class="form-check-input rounded border border-neutral-400" id="image4" type="checkbox" name="checkbox">
                                                    </div>
                                                    <label for="image4" class="absolute start-0 top-0 w-full h-full"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-4 mt-6 flex-wrap">
                                            <button type="button" class="btn btn-outline-primary-600">🚀 Upscale (2x)</button>
                                            <button type="button" class="btn btn-outline-primary-600">🎲 Make Square</button>
                                            <button type="button" class="btn btn-outline-primary-600">⭐ Zoom Out 2x</button>
                                            <button type="button" class="btn btn-outline-primary-600">🎉️ Upscale (4x) </button>
                                            <button type="button" class="btn btn-outline-primary-600">🎁 Upscale (6x)</button>
                                        </div>

                                        <div class="mt-6 flex items-center justify-between gap-4">
                                            <div class="flex items-center gap-5 bg-neutral-50 dark:bg-neutral-600 rounded-lg px-4 py-2.5 line-height-1">
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-up-line line-height-1"></i></button>
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-down-line"></i></button>
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-share-forward-line"></i></button>
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-download-2-fill"></i></button>
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
                                        <p class="mb-0 text-secondary-light text-sm">Please, Make 4 variant of this image Quickly As Soon As possible</p>
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

                                        <div class="grid sm:grid-cols-12 gap-6">
                                            <div class="col-span-12 sm:col-span-6">
                                                <div class="generated-image-item radius-8 overflow-hidden relative">
                                                    <img src="{{ asset('assets/images/chatgpt/image-generator5.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                                                    <button type="button" class="download-btn absolute top-0 end-0 me-8 mt-8 w-[50px] h-[50px] bg-primary-600 text-white d-flex justify-content-center align-items-center rounded-lg text-2xl bg-hover-primary-700">
                                                        <i class="ri-download-2-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-6 flex items-center justify-between gap-4">
                                            <div class="flex items-center gap-5 bg-neutral-50 dark:bg-neutral-600 rounded-lg px-4 py-2.5 line-height-1">
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-up-line line-height-1"></i></button>
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-thumb-down-line"></i></button>
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-share-forward-line"></i></button>
                                                <button type="button" class="text-secondary-light text-2xl flex text-hover-info-600"><i class="ri-download-2-fill"></i></button>
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
