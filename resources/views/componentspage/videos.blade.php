@extends('layout.layout')
@php
    $title='Videos';
    $subTitle = 'Components / Videos';
    $script ='<script>
                    // ========================= magnific Popup Icon Js Start =====================
                    $(".magnific-video").magnificPopup({
                        type: "iframe"
                    });
                    // ========================= magnific Popup Icon Js End =====================
               </script>';
@endphp

@section('content')

    <div class="grid grid-cols-1 2xl:grid-cols-12 gap-6">
        <div class="col-span-1 2xl:col-span-6">
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Default Video</h6>
                </div>
                <div class="card-body p-6 relative">
                    <img src="{{ asset('assets/images/videos/video-img1.png') }}" class="w-full h-full object-fit-cover rounded-lg overflow-hidden" alt="">
                    <a href="https://www.youtube.com/watch?v=Vr9WoWXkKeE" class="magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1">
                        <iconify-icon icon="ion:play" class="text-primary-600 text-2xl"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-span-1 2xl:col-span-6">
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Videos With Content</h6>
                </div>
                <div class="card-body p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="col-sm-6">
                            <div class="border bg-white dark:bg-neutral-700 rounded-lg overflow-hidden ">
                                <div class="relative max-h-258-px overflow-hidden">
                                    <img src="{{ asset('assets/images/videos/video-img2.png') }}" class="w-full object-fit-cover" alt="">
                                    <a href="https://www.youtube.com/watch?v=Vr9WoWXkKeE" class="magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1">
                                        <iconify-icon icon="ion:play" class="text-primary-600 text-2xl"></iconify-icon>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-xl mb-1.5 ">This is Video title</h6>
                                    <p class="text-secondary-light mb-0">We quickly learn to fear and thus autom atically avo id potentially stressful</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="border bg-white dark:bg-neutral-700 rounded-lg overflow-hidden ">
                                <div class="relative max-h-258-px overflow-hidden">
                                    <img src="{{ asset('assets/images/videos/video-img3.png') }}" class="w-full object-fit-cover" alt="">
                                    <a href="https://www.youtube.com/watch?v=Vr9WoWXkKeE" class="magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1">
                                        <iconify-icon icon="ion:play" class="text-primary-600 text-2xl"></iconify-icon>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-xl mb-1.5 ">This is Video title here</h6>
                                    <p class="text-secondary-light mb-0">We quickly learn to fear and thus autom atically avo id potentially stressful</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-span-1 2xl:col-span-12">
            <div class="card h-full p-0 border-0 overflow-hidden">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                    <h6 class="text-lg font-semibold mb-0">Video</h6>
                </div>
                <div class="card-body p-6">
                    <div class="relative">
                        <img src="{{ asset('assets/images/videos/video-img4.png') }}" class="w-full h-full object-fit-cover rounded-lg" alt="">
                        <a href="https://www.youtube.com/watch?v=Vr9WoWXkKeE" class="magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1">
                            <iconify-icon icon="ion:play" class="text-primary-600 text-2xl"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
