@extends('layout.layout')

@php
    $title='Gallery';
    $subTitle = 'Gallery';
@endphp

@section('content')

    <div class="card h-full p-0 rounded-xl overflow-hidden border-0">
        <div class="card-header border-b border-neutral-200 dark:border-neutral-600 pb-0 pt-0 px-0">

            <ul class="tab-style-gradient flex flex-wrap text-sm font-medium text-center mb-5" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="" role="presentation">
                    <button class="py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600" id="all-tab" data-tabs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">
                        All
                    </button>
                </li>
                <li class="" role="presentation">
                    <button class="py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="ui-design-tab" data-tabs-target="#ui-design" type="button" role="tab" aria-controls="ui-design" aria-selected="false">
                        UI Design
                    </button>
                </li>
                <li class="" role="presentation">
                    <button class="py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="web-design-tab" data-tabs-target="#web-design" type="button" role="tab" aria-controls="web-design" aria-selected="false">
                        Web Design
                    </button>
                </li>
                <li class="" role="presentation">
                    <button class="py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="development-tab" data-tabs-target="#development" type="button" role="tab" aria-controls="development" aria-selected="false">
                        Development
                    </button>
                </li>
                <li class="" role="presentation">
                    <button class="py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="presentations-tab" data-tabs-target="#presentations" type="button" role="tab" aria-controls="presentations" aria-selected="false">
                        Presentations
                    </button>
                </li>
            </ul>

        </div>
        <div class="card-body p-6">

            <div id="default-tab-content">
                <div class="hidden" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6">
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img8.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img9.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img10.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img11.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img12.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img1.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img2.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img3.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img4.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img5.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img6.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img7.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="ui-design" role="tabpanel" aria-labelledby="ui-design-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6">
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img3.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img4.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img5.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img6.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img7.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img8.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img1.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img2.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img3.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img4.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img5.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img6.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img7.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img8.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img9.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img10.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img11.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img12.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="web-design" role="tabpanel" aria-labelledby="web-design-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6">
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img6.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img7.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img8.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img9.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img1.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img2.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img3.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img4.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img5.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img6.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img7.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img8.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img9.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img10.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img11.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img12.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="development" role="tabpanel" aria-labelledby="development-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6">
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img5.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img6.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img7.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img8.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img9.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img1.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img2.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img3.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img4.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img5.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img6.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img7.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img8.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img9.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img10.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img11.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img12.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="presentations" role="tabpanel" aria-labelledby="presentations-tab">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6">
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img1.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img2.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img3.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img4.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img5.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img6.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img7.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img8.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img9.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img10.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img11.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                        <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                            <div class="max-h-[266px] overflow-hidden">
                                <img src="{{ asset('assets/images/gallery/gallery-img12.png') }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                            </div>
                            <div class="py-4 px-6">
                                <h6 class="mb-1.5">This is Image title</h6>
                                <p class="mb-0 text-sm text-secondary-light">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
