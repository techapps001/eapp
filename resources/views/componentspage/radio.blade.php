@extends('layout.layout')
@php
    $title='Radio';
    $subTitle = 'Components / Radio';
@endphp

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Default Radio</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex items-center flex-wrap gap-7">
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio1" id="radio1" checked>
                        <label class="peer-checked:text-primary-600 leading-[1] font-medium" for="radio1"> Radio Active </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio2" id="radio2" checked>
                        <label class="peer-checked:text-purple-600 leading-[1] font-medium" for="radio2"> Radio Active </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio3" id="radio3" checked>
                        <label class="peer-checked:text-success-600 leading-[1] font-medium" for="radio3"> Radio Active </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio4" id="radio4" checked>
                        <label class="peer-checked:text-warning-600 leading-[1] font-medium" for="radio4"> Radio Active </label>
                    </div>
                </div>
                <div class="flex items-center flex-wrap gap-7 mt-6">
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio" id="radio11">
                        <label class="peer-checked:text-primary-600 leading-[1] font-medium" for="radio11"> Radio Inactive </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio" id="radio22">
                        <label class="peer-checked:text-purple-600 leading-[1] font-medium" for="radio22"> Radio Inactive </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio" id="radio33">
                        <label class="peer-checked:text-success-600 leading-[1] font-medium" for="radio33"> Radio Inactive </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio" id="radio44">
                        <label class="peer-checked:text-warning-600 leading-[1] font-medium" for="radio44"> Radio Inactive </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Radio Disable</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex items-center flex-wrap gap-7">
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 opacity-75 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio11" id="radio111" checked disabled>
                        <label class="peer-disabled:opacity-75 peer-checked:text-primary-600 leading-[1] font-medium" for="radio111"> Radio Active </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 opacity-75 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio22" id="radio222" checked disabled>
                        <label class="peer-disabled:opacity-75 peer-checked:text-purple-600 leading-[1] font-medium" for="radio222"> Radio Active </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 opacity-75 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio33" id="radio333" checked disabled>
                        <label class="peer-disabled:opacity-75 peer-checked:text-success-600 leading-[1] font-medium" for="radio333"> Radio Active </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 opacity-75 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio44" id="radio444" checked disabled>
                        <label class="peer-disabled:opacity-75 peer-checked:text-warning-600 leading-[1] font-medium" for="radio444"> Radio Active </label>
                    </div>
                </div>
                <div class="flex items-center flex-wrap gap-7 mt-6">
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 disabled:opacity-75 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio0" id="radio1011" disabled>
                        <label class="peer-disabled:opacity-75 peer-checked:text-primary-600 leading-[1] font-medium" for="radio1011"> Radio Inactive </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 disabled:opacity-75 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio0" id="radio2022" disabled>
                        <label class="peer-disabled:opacity-75 peer-checked:text-purple-600 leading-[1] font-medium" for="radio2022"> Radio Inactive </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 disabled:opacity-75 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio0" id="radio3033" disabled>
                        <label class="peer-disabled:opacity-75 peer-checked:text-success-600 leading-[1] font-medium" for="radio3033"> Radio Inactive </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 disabled:opacity-75 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio0" id="radio4044" disabled>
                        <label class="peer-disabled:opacity-75 peer-checked:text-warning-600 leading-[1] font-medium" for="radio4044"> Radio Inactive </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Radio With Button</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex items-center flex-wrap gap-6">
                    <div class="bg-primary-50 dark:bg-primary-600/25 px-5 py-3 rounded-lg">
                        <span class="flex items-center gap-2">
                            <input class="peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio100" id="radio100" checked>
                            <label class="peer-checked:text-primary-600 leading-[1] font-medium" for="radio100"> Radio Active </label>
                        </span>
                    </div>
                    <div class="bg-neutral-100 dark:bg-neutral-600/25 px-5 py-3 rounded-lg">
                        <span class="flex items-center gap-2">
                            <input class="peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio200" id="radio200" checked>
                            <label class="peer-checked:text-purple-600 leading-[1] font-medium" for="radio200"> Radio Active </label>
                        </span>
                    </div>
                    <div class="bg-success-100 dark:bg-success-600/25 px-5 py-3 rounded-lg">
                        <span class="flex items-center gap-2">
                            <input class="peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio300" id="radio300" checked>
                            <label class="peer-checked:text-success-600 leading-[1] font-medium" for="radio300"> Radio Active </label>
                        </span>
                    </div>
                    <div class="bg-warning-100 dark:bg-warning-600/25 px-5 py-3 rounded-lg">
                        <span class="flex items-center gap-2">
                            <input class="peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio4000" id="radio4000" checked>
                            <label class="peer-checked:text-warning-600 leading-[1] font-medium" for="radio4000"> Radio Active </label>
                        </span>
                    </div>
                    <div class="bg-danger-100 dark:bg-danger-600/25 px-5 py-3 rounded-lg">
                        <span class="flex items-center gap-2">
                            <input class="peer w-4 h-4 text-danger-600 bg-gray-100 border-gray-300 focus:ring-danger-500 dark:focus:ring-danger-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="radio400" id="radio400" checked>
                            <label class="peer-checked:text-danger-600 leading-[1] font-medium" for="radio400"> Radio Active </label>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-7">
                <h6 class="text-lg font-semibold mb-0">Radio Horizontal</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex items-center flex-wrap gap-7">
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="horizontal" id="horizontal1">
                        <label class="peer-checked:text-primary-600 leading-[1] font-medium" for="horizontal1"> Horizontal 1 </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="horizontal" id="horizontal2">
                        <label class="peer-checked:text-purple-600 leading-[1] font-medium" for="horizontal2"> Horizontal 2 </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="horizontal" id="horizontal3">
                        <label class="peer-checked:text-success-600 leading-[1] font-medium" for="horizontal3"> Horizontal 3 </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="horizontal" id="horizontal4">
                        <label class="peer-checked:text-warning-600 leading-[1] font-medium" for="horizontal4"> Horizontal 4 </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Radio Vertical</h6>
            </div>
            <div class="card-body p-6">
                <div class="flex items-start flex-col flex-wrap gap-6">
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="vertical" id="vertical11">
                        <label class="peer-checked:text-primary-600 leading-[1] font-medium" for="vertical11"> Vertical 1 </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="vertical" id="vertical22">
                        <label class="peer-checked:text-purple-600 leading-[1] font-medium" for="vertical22"> Vertical 2 </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="vertical" id="vertical33">
                        <label class="peer-checked:text-success-600 leading-[1] font-medium" for="vertical33"> Vertical 3 </label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input class="peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="vertical" id="vertical44">
                        <label class="peer-checked:text-warning-600 leading-[1] font-medium" for="vertical44"> Vertical 4 </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
