@extends('layout.layout')
@php
    $title='Input From';
    $subTitle = 'Input From';
@endphp

@section('content')

    <div class="grid grid-cols-12 gap-5">
        <div class="md:col-span-6 col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h6 class="text-lg font-semibold mb-0">Default Inputs</h6>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label class="form-label">Basic Input</label>
                            <input type="text" name="#0" class="form-control">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input with Placeholder</label>
                            <input type="text" name="#0" class="form-control" placeholder="info@gmail.com">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input with Phone </label>
                            <input type="text" class="form-control grow" placeholder="+1 (555) 253-08515">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input Date</label>
                            <input type="date" name="#0" class="form-control">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input with Payment</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600">
                                    <img src="{{ asset('assets/images/card/payment-icon.png') }}" alt="image">
                                </span>
                                <input type="text" class="form-control grow rounded-ss-none rounded-es-none" placeholder="Card Number">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            <div class="card border-0 mt-6">
                <div class="card-header">
                    <h6 class="text-lg font-semibold mb-0">Input Group</h6>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label class="form-label">Input</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600">
                                    <iconify-icon icon="mynaui:envelope"></iconify-icon>
                                </span>
                                <input type="text" class="form-control grow rounded-ss-none rounded-es-none" placeholder="info@gmail.com">
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input</label>
                            <div class="flex">
                                <select class="form-select flex-grow-0 rounded-se-none rounded-ee-none border-e-0 w-auto">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                                <input type="text" class="form-control grow rounded-ss-none rounded-es-none" placeholder="info@gmail.com">
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input</label>
                            <div class="flex">
                                <input type="text" class="form-control grow rounded-se-none rounded-ee-none" placeholder="info@gmail.com">
                                <select class="form-select flex-grow-0 rounded-ss-none rounded-es-none border-s-0 w-auto">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600">
                                    http://
                                </span>
                                <input type="text" class="form-control grow rounded-ss-none rounded-es-none" placeholder="www.random.com">
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input</label>
                            <div class="flex">
                                <input type="text" class="form-control grow rounded-se-none rounded-ee-none" placeholder="www.random.com">
                                <button type="button" class="inline-flex items-center px-3 border rounded-s-0 border-s-0 rounded-e-md border-neutral-200 dark:border-neutral-600"><iconify-icon icon="lucide:copy"></iconify-icon>Copy</button>
                            </div>
                            <p class="text-sm mt-2 mb-0">This is a hint text to help user.</p>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
        <div class="md:col-span-6 col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h6 class="text-lg font-semibold mb-0">Input Sizing</h6>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label class="form-label">Input Large</label>
                            <input type="text" name="#0" class="form-control py-4" placeholder="info@gmail.com">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input Medium</label>
                            <input type="text" name="#0" class="form-control" placeholder="info@gmail.com">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input Small</label>
                            <input type="text" name="#0" class="form-control py-2 text-sm" placeholder="info@gmail.com">
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            <div class="card border-0 mt-6">
                <div class="card-header">
                    <h6 class="text-lg font-semibold mb-0">File Input Sizing</h6>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label class="form-label">Large Size File Input </label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg" name="#0" type="file">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Medium Size File Input </label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" type="file" name="#0">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Small Size File Input </label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-xs" name="#0" type="file">
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            <div class="card border-0 mt-6">
                <div class="card-header">
                    <h6 class="text-lg font-semibold mb-0">Custom Forms</h6>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label class="form-label">Readonly Input</label>
                            <input type="text" name="#0" class="form-control" placeholder="info@gmail.com" value="info@gmail.com" readonly>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Input with Phone </label>
                            <div class="flex">
                                <select class="form-select flex-grow-0 rounded-se-none rounded-ee-none border-e-0 w-auto">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                                <input type="text" name="#0" class="form-control grow rounded-ss-none rounded-es-none" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Medium Size File Input </label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" type="file" name="#0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Textarea input field</h5>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="lg:col-span-4 col-span-12">
                            <label class="form-label">Description</label>
                            <textarea name="#0" class="form-control" rows="4" cols="50" placeholder="Enter a description..."></textarea>
                        </div>
                        <div class="lg:col-span-4 col-span-12">
                            <label class="form-label">Description</label>
                            <textarea name="#0" class="form-control" rows="4" cols="50" placeholder="Enter a description..." readonly></textarea>
                        </div>
                        <div class="lg:col-span-4 col-span-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control border-danger-600" rows="4" cols="50" placeholder="Enter a description..." required=""></textarea>
                            <div class="text-danger-600 text-sm">
                                Please enter a message in the textarea.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
