@extends('layout.layout')
@php
    $title='Languages';
    $subTitle = 'Settings - Languages';
@endphp

@section('content')

    <div class="card h-full p-0 rounded-xl border-0">
        <div class="card-body p-6">
            <div class="grid grid-cols-12 gap-5">
                <div class="2xl:col-span-6 col-span-12">
                    <div class="card rounded-xl shadow-none border-neutral-200 dark:border-neutral-600 overflow-hidden">
                        <div class="card-header bg-neutral-100 border-b border-neutral-200 dark:border-neutral-600 dark:bg-dark-2 py-4 px-6 flex items-center flex-wrap gap-3 justify-between">
                            <div class="flex items-center gap-3">
                                <span class="w-9 h-9 bg-white dark:bg-neutral-700 rounded-full flex justify-center items-center">
                                    <img src="{{ asset('assets/images/payment/payment-gateway1.png') }}" alt="" class="">
                                </span>
                                <span class="text-lg font-semibold text-neutral-600 dark:text-neutral-200">Paypal</span>
                            </div>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                            </label>
                        </div>
                        <div class="card-body p-6">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="sm:col-span-6 col-span-12">
                                    <span class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Environment <span class="text-danger-600">*</span></span>
                                    <div class="flex items-center gap-3">
                                        <div class="flex items-center gap-3 font-medium text-lg">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="sandbox" checked>
                                            </div>
                                            <label for="sandbox" class="inline-block font-medium text-lg text-neutral-600 dark:text-neutral-200 mb-0">Sandbox</label>
                                        </div>
                                        <div class="flex items-center gap-3 font-medium text-lg">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="Production">
                                            </div>
                                            <label for="Production" class="inline-block font-medium text-lg text-neutral-600 dark:text-neutral-200 mb-0">Production</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-6 col-span-12">
                                    <label for="currency" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Currency <span class="text-danger-600">*</span></label>
                                    <select class="form-control rounded-lg form-select" id="currency">
                                        <option selected disabled>USD</option>
                                        <option>TK</option>
                                        <option>Rupee</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-6 col-span-12">
                                    <label for="secretKey" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Secret Key <span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control rounded-lg" id="secretKey" placeholder="Secret Key" value="EGtgNkjt3I5lkhEEzicdot8gVH_PcFiKxx6ZBiXpVrp4QLDYcVQQMLX6MMG_fkS9_H0bwmZzBovb4jLP">
                                </div>
                                <div class="sm:col-span-6 col-span-12">
                                    <label for="publicKey" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Publics Key<span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control rounded-lg" id="publicKey" placeholder="Publics Key" value="AcRx7vvy79nbNxBemacGKmnnRe_CtxkItyspBS_eeMIPREwfCEIfPg1uX-bdqPrS_ZFGocxEH_SJRrIJ">
                                </div>

                                <div class="sm:col-span-6 col-span-12">
                                    <label for="logo" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Logo <span class="text-danger-600">*</span></label>
                                    <input type="file" class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" id="logo">
                                </div>
                                <div class="sm:col-span-6 col-span-12">
                                    <label for="logo" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white"><span class="visibility-hidden">Save</span></label>
                                    <button type="submit" class="btn btn-primary border border-primary-600 text-base px-6 py-2 rounded-lg w-full justify-center">
                                        Save Change
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="2xl:col-span-6 col-span-12">
                    <div class="card rounded-xl shadow-none border-neutral-200 dark:border-neutral-600 overflow-hidden">
                        <div class="card-header bg-neutral-100 border-b border-neutral-200 dark:border-neutral-600 dark:bg-dark-2 py-4 px-6 flex items-center flex-wrap gap-3 justify-between">
                            <div class="flex items-center gap-3">
                                <span class="w-9 h-9 bg-white dark:bg-neutral-700 rounded-full flex justify-center items-center">
                                    <img src="{{ asset('assets/images/payment/payment-gateway2.png') }}" alt="" class="">
                                </span>
                                <span class="text-lg font-semibold text-neutral-600 dark:text-neutral-200">RazorPay</span>
                            </div>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <span class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                            </label>
                        </div>
                        <div class="card-body p-6">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="sm:col-span-6 col-span-12">
                                    <span class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Environment <span class="text-danger-600">*</span></span>
                                    <div class="flex items-center gap-3">
                                        <div class="flex items-center gap-3 font-medium text-lg">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="sandbox2" checked>
                                            </div>
                                            <label for="sandbox2" class="inline-block font-medium text-lg text-neutral-600 dark:text-neutral-200 mb-0">Sandbox</label>
                                        </div>
                                        <div class="flex items-center gap-3 font-medium text-lg">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="Production2">
                                            </div>
                                            <label for="Production2" class="inline-block font-medium text-lg text-neutral-600 dark:text-neutral-200 mb-0">Production</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-6 col-span-12">
                                    <label for="currencyTwo" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Currency <span class="text-danger-600">*</span></label>
                                    <select class="form-control rounded-lg form-select" id="currencyTwo">
                                        <option selected disabled>USD</option>
                                        <option>TK</option>
                                        <option>Rupee</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-6 col-span-12">
                                    <label for="secretKeyTwo" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Secret Key <span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control rounded-lg" id="secretKeyTwo" placeholder="Secret Key" value="EGtgNkjt3I5lkhEEzicdot8gVH_PcFiKxx6ZBiXpVrp4QLDYcVQQMLX6MMG_fkS9_H0bwmZzBovb4jLP">
                                </div>
                                <div class="sm:col-span-6 col-span-12">
                                    <label for="publicKeyTwo" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Publics Key<span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control rounded-lg" id="publicKeyTwo" placeholder="Publics Key" value="AcRx7vvy79nbNxBemacGKmnnRe_CtxkItyspBS_eeMIPREwfCEIfPg1uX-bdqPrS_ZFGocxEH_SJRrIJ">
                                </div>

                                <div class="sm:col-span-6 col-span-12">
                                    <label for="logoTwo" class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white">Logo <span class="text-danger-600">*</span></label>
                                    <input type="file" class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" id="logoTwo">
                                </div>
                                <div class="sm:col-span-6 col-span-12">
                                    <label class="text-sm font-semibold mb-2 block text-neutral-900 dark:text-white"><span class="visibility-hidden">Save</span></label>
                                    <button type="submit" class="btn btn-primary border border-primary-600 text-base px-6 py-2 rounded-lg w-full justify-center">
                                        Save Change
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
