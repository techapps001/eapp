@extends('layout.layout')
@php
    $title='Tab & Accordion';
    $subTitle = 'Components / Tab & Accordion';
@endphp

@section('content')

    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

        <div class="card p-0 overflow-hidden relative rounded-xl h-full border-0">
            <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                <h6 class="text-lg mb-0">Default Tabs </h6>
            </div>
            <div class="card-body p-6">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold border-b-2 rounded-t-lg" id="default-home-tab" data-tabs-target="#default-home" type="button" role="tab" aria-controls="default-home" aria-selected="false">Home</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="default-details-tab" data-tabs-target="#default-details" type="button" role="tab" aria-controls="default-details" aria-selected="false">Details</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="default-profile-tab" data-tabs-target="#default-profile" type="button" role="tab" aria-controls="default-profile" aria-selected="false">Profile</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="default-settings-tab" data-tabs-target="#default-settings" type="button" role="tab" aria-controls="default-settings" aria-selected="false">Settings</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content">
                    <div id="default-home" role="tabpanel" aria-labelledby="default-home-tab">
                        <h6 class="text-lg mb-2">Title Home</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                    <div id="default-details" role="tabpanel" aria-labelledby="default-details-tab">
                        <h6 class="text-lg mb-2">Title Details</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                    <div id="default-profile" role="tabpanel" aria-labelledby="default-profile-tab">
                        <h6 class="text-lg mb-2">Title Profile</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                    <div id="default-settings" role="tabpanel" aria-labelledby="default-settings-tab">
                        <h6 class="text-lg mb-2">Title Settings</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-0 overflow-hidden relative rounded-xl h-full border-0">
            <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                <h6 class="text-lg mb-0">Focus Tabs </h6>
            </div>
            <div class="card-body p-6">
                <div class="mb-4 style-pill-focus">
                    <ul class="flex flex-wrap text-sm font-medium text-center" id="focus-tab" data-tabs-toggle="#focus-tab-content" role="tablist">
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md" id="focus-home-tab" data-tabs-target="#focus-home" type="button" role="tab" aria-controls="focus-home" aria-selected="false">Home</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="focus-details-tab" data-tabs-target="#focus-details" type="button" role="tab" aria-controls="focus-details" aria-selected="false">Details</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="focus-profile-tab" data-tabs-target="#focus-profile" type="button" role="tab" aria-controls="focus-profile" aria-selected="false">Profile</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="focus-settings-tab" data-tabs-target="#focus-settings" type="button" role="tab" aria-controls="focus-settings" aria-selected="false">Settings</button>
                        </li>
                    </ul>
                </div>
                <div id="focus-tab-content">
                    <div id="focus-home" role="tabpanel" aria-labelledby="focus-home-tab">
                        <h6 class="text-lg mb-2">Title Home</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                    <div id="focus-details" role="tabpanel" aria-labelledby="focus-details-tab">
                        <h6 class="text-lg mb-2">Title Details</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                    <div id="focus-profile" role="tabpanel" aria-labelledby="focus-profile-tab">
                        <h6 class="text-lg mb-2">Title Profile</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                    <div id="focus-settings" role="tabpanel" aria-labelledby="focus-settings-tab">
                        <h6 class="text-lg mb-2">Title Settings</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-0 overflow-hidden relative rounded-xl h-full border-0">
            <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                <h6 class="text-lg mb-0">Button Tabs</h6>
            </div>
            <div class="card-body p-6">
                <div class="mb-4 style-pill-button">
                    <ul class="flex flex-wrap text-sm font-medium text-center" id="button-tab" data-tabs-toggle="#button-tab-content" role="tablist">
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md" id="button-home-tab" data-tabs-target="#button-home" type="button" role="tab" aria-controls="button-home" aria-selected="false">Home</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="button-details-tab" data-tabs-target="#button-details" type="button" role="tab" aria-controls="button-details" aria-selected="false">Details</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="button-profile-tab" data-tabs-target="#button-profile" type="button" role="tab" aria-controls="button-profile" aria-selected="false">Profile</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="button-settings-tab" data-tabs-target="#button-settings" type="button" role="tab" aria-controls="button-settings" aria-selected="false">Settings</button>
                        </li>
                    </ul>
                </div>
                <div id="button-tab-content">
                    <div id="button-home" role="tabpanel" aria-labelledby="button-home-tab">
                        <div class="flex items-center gap-3">
                            <div class="shrink-0">
                                <img src="{{ asset('assets/images/tabs/tabs-image2.png') }}" class="rounded-lg" alt="">
                            </div>
                            <div class="grow">
                                <h6 class="text-lg mb-2">Title Home</h6>
                                <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                                <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                    <div id="button-details" role="tabpanel" aria-labelledby="button-details-tab">
                        <div class="flex items-center gap-3">
                            <div class="shrink-0">
                                <img src="{{ asset('assets/images/tabs/tabs-image1.png') }}" class="rounded-lg" alt="">
                            </div>
                            <div class="grow">
                                <h6 class="text-lg mb-2">Title Details</h6>
                                <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                                <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                    <div id="button-profile" role="tabpanel" aria-labelledby="button-profile-tab">
                        <div class="flex items-center gap-3">
                            <div class="shrink-0">
                                <img src="{{ asset('assets/images/tabs/tabs-image2.png') }}" class="rounded-lg" alt="">
                            </div>
                            <div class="grow">
                                <h6 class="text-lg mb-2">Title Profile</h6>
                                <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                                <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                    <div id="button-settings" role="tabpanel" aria-labelledby="button-settings-tab">
                        <div class="flex items-center gap-3">
                            <div class="shrink-0">
                                <img src="{{ asset('assets/images/tabs/tabs-image1.png') }}" class="rounded-lg" alt="">
                            </div>
                            <div class="grow">
                                <h6 class="text-lg mb-2">Title Settings</h6>
                                <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                                <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-0 overflow-hidden relative rounded-xl h-full border-0">
            <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                <h6 class="text-lg mb-0">Icon Button Tabs</h6>
            </div>
            <div class="card-body p-6">
                <div class="mb-4 style-pill-button">
                    <ul class="flex flex-wrap text-sm font-medium text-center" id="button-icon-tab" data-tabs-toggle="#button-icon-tab-content" role="tablist">
                        <li role="presentation">
                            <button class="px-4 py-2.5 font-semibold rounded-md flex items-center gap-2" id="button-icon-home-tab" data-tabs-target="#button-icon-home" type="button" role="tab" aria-controls="button-icon-home" aria-selected="false">
                                <iconify-icon icon="solar:home-smile-angle-outline" class="text-md"></iconify-icon>
                                Home
                            </button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2.5 font-semibold rounded-md flex items-center gap-2 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="button-icon-details-tab" data-tabs-target="#button-icon-details" type="button" role="tab" aria-controls="button-icon-details" aria-selected="false">
                                <iconify-icon icon="solar:home-smile-angle-outline" class="text-md"></iconify-icon>
                                Details
                            </button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2.5 font-semibold rounded-md flex items-center gap-2 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="button-icon-profile-tab" data-tabs-target="#button-icon-profile" type="button" role="tab" aria-controls="button-icon-profile" aria-selected="false">
                                <iconify-icon icon="solar:home-smile-angle-outline" class="text-md"></iconify-icon>
                                Profile
                            </button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2.5 font-semibold rounded-md flex items-center gap-2 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="button-icon-settings-tab" data-tabs-target="#button-icon-settings" type="button" role="tab" aria-controls="button-icon-settings" aria-selected="false">
                                <iconify-icon icon="solar:home-smile-angle-outline" class="text-md"></iconify-icon>
                                Settings
                            </button>
                        </li>
                    </ul>
                </div>
                <div id="button-icon-tab-content">
                    <div id="button-icon-home" role="tabpanel" aria-labelledby="button-icon-home-tab">
                        <div class="flex items-center gap-3">
                            <div class="shrink-0">
                                <img src="{{ asset('assets/images/tabs/tabs-image1.png') }}" class="rounded-lg" alt="">
                            </div>
                            <div class="grow">
                                <h6 class="text-lg mb-2">Title Home</h6>
                                <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                                <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                    <div id="button-icon-details" role="tabpanel" aria-labelledby="button-icon-details-tab">
                        <div class="flex items-center gap-3">
                            <div class="shrink-0">
                                <img src="{{ asset('assets/images/tabs/tabs-image2.png') }}" class="rounded-lg" alt="">
                            </div>
                            <div class="grow">
                                <h6 class="text-lg mb-2">Title Details</h6>
                                <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                                <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                    <div id="button-icon-profile" role="tabpanel" aria-labelledby="button-icon-profile-tab">
                        <div class="flex items-center gap-3">
                            <div class="shrink-0">
                                <img src="{{ asset('assets/images/tabs/tabs-image1.png') }}" class="rounded-lg" alt="">
                            </div>
                            <div class="grow">
                                <h6 class="text-lg mb-2">Title Profile</h6>
                                <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                                <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                    <div id="button-icon-settings" role="tabpanel" aria-labelledby="button-icon-settings-tab">
                        <div class="flex items-center gap-3">
                            <div class="shrink-0">
                                <img src="{{ asset('assets/images/tabs/tabs-image2.png') }}" class="rounded-lg" alt="">
                            </div>
                            <div class="grow">
                                <h6 class="text-lg mb-2">Title Settings</h6>
                                <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                                <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-0 overflow-hidden relative rounded-xl h-full border-0">
            <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                <h6 class="text-lg mb-0">Vertical Nav Tabs</h6>
            </div>
            <div class="card-body p-6 flex items-start gap-6">
                <div class="style-pill-button">
                    <ul class="flex flex-wrap text-sm font-medium text-center" id="vertical-tab" data-tabs-toggle="#vertical-tab-content" role="tablist">
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md" id="vertical-home-tab" data-tabs-target="#vertical-home" type="button" role="tab" aria-controls="vertical-home" aria-selected="false">Home</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="vertical-details-tab" data-tabs-target="#vertical-details" type="button" role="tab" aria-controls="vertical-details" aria-selected="false">Details</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="vertical-profile-tab" data-tabs-target="#vertical-profile" type="button" role="tab" aria-controls="vertical-profile" aria-selected="false">Profile</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block px-4 py-2.5 font-semibold rounded-md hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="vertical-settings-tab" data-tabs-target="#vertical-settings" type="button" role="tab" aria-controls="vertical-settings" aria-selected="false">Settings</button>
                        </li>
                    </ul>
                </div>
                <div id="vertical-tab-content">
                    <div id="vertical-home" role="tabpanel" aria-labelledby="vertical-home-tab">
                        <h6 class="text-lg mb-2">Title Home</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                        <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                    </div>
                    <div id="vertical-details" role="tabpanel" aria-labelledby="vertical-details-tab">
                        <h6 class="text-lg mb-2">Title Details</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                        <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                    </div>
                    <div id="vertical-profile" role="tabpanel" aria-labelledby="vertical-profile-tab">
                        <h6 class="text-lg mb-2">Title Profile</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                        <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                    </div>
                    <div id="vertical-settings" role="tabpanel" aria-labelledby="vertical-settings-tab">
                        <h6 class="text-lg mb-2">Title Settings</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to </p>
                        <p class="text-secondary-light mb-0"> make a type specimen book. It has survived not industry's standard dummy</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-0 overflow-hidden relative rounded-xl h-full border-0">
            <div class="card-header pb-0 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600 flex items-center flex-wrap justify-between">
                <h6 class="text-lg mb-0">Card Header Tabs</h6>
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="card-title-tab" data-tabs-toggle="#card-title-tab-content" role="tablist">
                    <li role="presentation">
                        <button class="inline-block px-4 py-2.5 pb-4 font-semibold border-b-2 rounded-t-lg" id="card-title-home-tab" data-tabs-target="#card-title-home" type="button" role="tab" aria-controls="card-title-home" aria-selected="false">Home</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block px-4 py-2.5 pb-4 font-semibold border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="card-title-details-tab" data-tabs-target="#card-title-details" type="button" role="tab" aria-controls="card-title-details" aria-selected="false">Details</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block px-4 py-2.5 pb-4 font-semibold border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="card-title-profile-tab" data-tabs-target="#card-title-profile" type="button" role="tab" aria-controls="card-title-profile" aria-selected="false">Profile</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block px-4 py-2.5 pb-4 font-semibold border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="card-title-settings-tab" data-tabs-target="#card-title-settings" type="button" role="tab" aria-controls="card-title-settings" aria-selected="false">Settings</button>
                    </li>
                </ul>
            </div>
            <div class="card-body p-6">
                <div id="card-title-tab-content">
                    <div id="card-title-home" role="tabpanel" aria-labelledby="card-title-home-tab">
                        <h6 class="text-lg mb-2">Title Home</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                    <div id="card-title-details" role="tabpanel" aria-labelledby="card-title-details-tab">
                        <h6 class="text-lg mb-2">Title Details</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                    <div id="card-title-profile" role="tabpanel" aria-labelledby="card-title-profile-tab">
                        <h6 class="text-lg mb-2">Title Profile</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                    <div id="card-title-settings" role="tabpanel" aria-labelledby="card-title-settings-tab">
                        <h6 class="text-lg mb-2">Title Settings</h6>
                        <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                        <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                </div>

                <!-- <div class="tab-content" id="pills-tabContent-six">
                    <div class="tab-pane fade show active" id="pills-header-home" role="tabpanel" aria-labelledby="pills-header-home-tab" tabindex="0">
                        <div>
                            <h6 class="text-lg mb-2">Title</h6>
                            <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                            <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-header-details" role="tabpanel" aria-labelledby="pills-header-details-tab" tabindex="0">
                        <div>
                            <h6 class="text-lg mb-2">Title</h6>
                            <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                            <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-header-profile" role="tabpanel" aria-labelledby="pills-header-profile-tab" tabindex="0">
                        <div>
                            <h6 class="text-lg mb-2">Title</h6>
                            <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                            <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-header-settings" role="tabpanel" aria-labelledby="pills-header-settings-tab" tabindex="0">
                        <div>
                            <h6 class="text-lg mb-2">Title</h6>
                            <p class="text-secondary-light mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1400s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                            <p class="text-secondary-light mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    </div>

@endsection
