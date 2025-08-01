@extends('layout.layout')
@php
    $title='Theme';
    $subTitle = 'Settings - Theme';
    $script = '<script>
                            // ================== Image Upload Js Start ===========================
                            function readURL(input, previewElementId) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $("#" + previewElementId).css("background-image", "url(" + e.target.result + ")");
                                        $("#" + previewElementId).hide();
                                        $("#" + previewElementId).fadeIn(650);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }

                            $("#imageUpload").change(function() {
                                readURL(this, "previewImage1");
                            });

                            $("#imageUploadTwo").change(function() {
                                readURL(this, "previewImage2");
                            });
                            // ================== Image Upload Js End ===========================
                </script>';
@endphp

@section('content')

    <div class="card h-full rounded-lg border-0">
        <div class="card-body p-6">
            <form action="#">
                <div class="grid md:grid-cols-2 gap-x-5">
                    <div class="mb-5">
                        <label class="inline-block font-semibold text-secondary-light text-base inline-block mb-2 dark:text-white" for="imageUpload">Logo (140px X 140px)</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="imageUpload" type="file">

                        <div class="avatar-upload mt-4">
                            <div class="avatar-preview">
                                <div id="previewImage1" class=" w-[120px] h-[120px] rounded-lg border border-neutral-300 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/payment/upload-image.png') }}')"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="inline-block font-semibold text-secondary-light text-base inline-block mb-2 dark:text-white" for="imageUploadTwo">Logo (140px X 140px)</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="imageUploadTwo" type="file">

                        <div class="avatar-upload mt-4">
                            <div class="avatar-preview">
                                <div id="previewImage2" class=" w-[120px] h-[120px] rounded-lg border border-neutral-300 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/payment/upload-image.png') }}')"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h6 class="text-xl mb-4">Theme Colors</h6>
                    <div class="grid grid-cols-1 sm:grid-cols-12 gap-5">
                        <div class="2xl:col-span-2 md:col-span-4 sm:col-span-6 col-span-12 relative">
                            <input class="form-check-input theme-setting-input" name="theme-setting" type="radio" id="blue" hidden>
                            <label for="blue" class="theme-setting-label border border-neutral-200 dark:border-neutral-600 rounded-lg p-2 block">
                                <span class="flex items-center gap-2">
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-primary-600 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Blue</span>
                                    </span>
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-primary-100 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Focus</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="2xl:col-span-2 md:col-span-4 sm:col-span-6 col-span-12 relative">
                            <input class="form-check-input theme-setting-input" name="theme-setting" type="radio" id="magenta" hidden>
                            <label for="magenta" class="theme-setting-label border border-neutral-200 dark:border-neutral-600 rounded-lg p-2 block">
                                <span class="flex items-center gap-2">
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-purple-600 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Magenta</span>
                                    </span>
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-purple-600 dark:bg-purple-600/25 text-purple-600 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Focus</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="2xl:col-span-2 md:col-span-4 sm:col-span-6 col-span-12 relative">
                            <input class="form-check-input theme-setting-input" name="theme-setting" type="radio" id="orange" hidden>
                            <label for="orange" class="theme-setting-label border border-neutral-200 dark:border-neutral-600 rounded-lg p-2 block">
                                <span class="flex items-center gap-2">
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-warning-600 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Orange</span>
                                    </span>
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-warning-100 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Focus</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="2xl:col-span-2 md:col-span-4 sm:col-span-6 col-span-12 relative">
                            <input class="form-check-input theme-setting-input" name="theme-setting" type="radio" id="green" hidden>
                            <label for="green" class="theme-setting-label border border-neutral-200 dark:border-neutral-600 rounded-lg p-2 block">
                                <span class="flex items-center gap-2">
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-success-600 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Green</span>
                                    </span>
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-success-100 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Focus</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="2xl:col-span-2 md:col-span-4 sm:col-span-6 col-span-12 relative">
                            <input class="form-check-input theme-setting-input" name="theme-setting" type="radio" id="red" hidden>
                            <label for="red" class="theme-setting-label border border-neutral-200 dark:border-neutral-600 rounded-lg p-2 block">
                                <span class="flex items-center gap-2">
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-danger-600 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Red</span>
                                    </span>
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-danger-100 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Focus</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="2xl:col-span-2 md:col-span-4 sm:col-span-6 col-span-12 relative">
                            <input class="form-check-input theme-setting-input" name="theme-setting" type="radio" id="blueDark" hidden>
                            <label for="blueDark" class="theme-setting-label border border-neutral-200 dark:border-neutral-600 rounded-lg p-2 block">
                                <span class="flex items-center gap-2">
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-info-600 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Blue Dark</span>
                                    </span>
                                    <span class="w-1/2 text-center">
                                        <span class="h-[72px] w-full bg-info-100 rounded"></span>
                                        <span class="text-secondary-light text-base font-semibold mt-2">Focus</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="flex items-center justify-center gap-3 mt-6 col-span-12">
                            <button type="reset" class="border border-danger-600 hover:bg-danger-200 text-danger-600 text-base px-10 py-[11px] rounded-lg">
                                Reset
                            </button>
                            <button type="submit" class="btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg">
                                Save Change
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
