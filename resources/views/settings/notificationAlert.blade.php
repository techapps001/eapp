@extends('layout.layout')
@php
    $title='Notification Alert';
    $subTitle = 'Settings - Notification Alert';

@endphp

@section('content')

    <div class="card h-full rounded-lg border-0">
        <div class="card-body p-10">
            <form action="#">
                <div class="mb-6">
                    <h6 class="mb-4">Mail Notification Messages</h6>
                    <div class="flex flex-wrap justify-between gap-1">
                        <label class="inline-block font-medium text-secondary-light text-base mb-2">Admin New Order Message</label>
                        <label class="inline-flex items-center mb-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">On</span>
                        </label>
                    </div>
                    <textarea class="form-control rounded-lg h-[80px]" placeholder="You have a new order."></textarea>
                </div>
                <div class="mb-6">
                    <h6 class="mb-4">Sms Notification Messages</h6>
                    <div class="flex flex-wrap justify-between gap-1">
                        <label class="inline-block font-medium text-secondary-light text-base mb-2">Admin New Order Message</label>
                        <label class="inline-flex items-center mb-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">On</span>
                        </label>
                    </div>
                    <textarea class="form-control rounded-lg h-[80px]" placeholder="You have a new order."></textarea>
                </div>
                <div class="mb-6">
                    <h6 class="mb-4">Push Notification Messages</h6>
                    <div class="flex flex-wrap justify-between gap-1">
                        <label class="inline-block font-medium text-secondary-light text-base mb-2">Admin New Order Message</label>
                        <label class="inline-flex items-center mb-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">On</span>
                        </label>
                    </div>
                    <textarea class="form-control rounded-lg h-[80px]" placeholder="You have a new order."></textarea>
                </div>

                <div class="flex items-center justify-center gap-3 mt-6">
                    <button type="reset" class="border border-danger-600 hover:bg-danger-200 text-danger-600 text-base px-10 py-[11px] rounded-lg">
                        Reset
                    </button>
                    <button type="submit" class="btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg">
                        Save Change
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
