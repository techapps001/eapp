@extends('layout.layout')
@php
    $title='Pagination';
    $subTitle = 'Components / Pagination';

@endphp

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="col-md-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Default Solid</h6>
                </div>
                <div class="card-body p-6">
                    <ul class="pagination flex flex-wrap items-center gap-2 justify-center">
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48]" href="javascript:void(0)">First</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48]" href="javascript:void(0)">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48] w-[48px]" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48] w-[48px]" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48] w-[48px] bg-primary-600 text-white" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48] w-[48px]" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48]" href="javascript:void(0)">Next</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48]" href="javascript:void(0)">Last</a>
                        </li>
                    </ul>
                    <ul class="pagination flex flex-wrap items-center gap-2 justify-center mt-6">
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px]" href="javascript:void(0)">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] bg-primary-600 text-white" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px]" href="javascript:void(0)">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Outline</h6>
                </div>
                <div class="card-body p-6">
                    <ul class="pagination flex flex-wrap items-center gap-2 justify-center">
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px]" href="javascript:void(0)">First</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px]" href="javascript:void(0)">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] border-primary-400 text-primary-600" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px]" href="javascript:void(0)">Next</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px]" href="javascript:void(0)">Last</a>
                        </li>
                    </ul>
                    <ul class="pagination flex flex-wrap items-center gap-2 justify-center mt-6">
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px]" href="javascript:void(0)">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] border-primary-400 text-primary-600" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-white dark:bg-neutral-700 border border-neutral-200 dark:border-neutral-600 text-secondary-light font-medium rounded-lg px-5 py-2.5 flex items-center justify-center h-[48px]" href="javascript:void(0)">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Square with icon</h6>
                </div>
                <div class="card-body p-6">
                    <ul class="pagination flex flex-wrap items-center gap-2 justify-center">
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="iconamoon:arrow-left-2-light" class="text-2xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] bg-primary-600 text-white" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="iconamoon:arrow-right-2-light" class="text-2xl"></iconify-icon> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                        </li>
                    </ul>
                    <ul class="pagination flex flex-wrap items-center gap-2 justify-center mt-6">
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] bg-primary-600 text-white" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Rounded with icon</h6>
                </div>
                <div class="card-body p-6">
                    <ul class="pagination flex flex-wrap items-center gap-2 justify-center">
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="iconamoon:arrow-left-2-light" class="text-2xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] bg-primary-600 text-white" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="iconamoon:arrow-right-2-light" class="text-2xl"></iconify-icon> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                        </li>
                    </ul>
                    <ul class="pagination flex flex-wrap items-center gap-2 justify-center mt-6">
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] bg-primary-600 text-white" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded-full border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Default Solid</h6>
                </div>
                <div class="card-body p-6 text-center">
                    <div class="p-6 bg-primary-50 dark:bg-primary-600/25 inline-block rounded-xl bg-primary-success-gradient justify-center mx-auto">
                        <ul class="pagination flex flex-wrap items-center gap-2 justify-center">
                            <li class="page-item">
                                <a class="page-link bg-white dark:bg-neutral-700 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px]" href="javascript:void(0)">Page 1of 11</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-white dark:bg-neutral-700 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-white dark:bg-neutral-700 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] bg-primary-600 text-white" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-white dark:bg-neutral-700 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-white dark:bg-neutral-700 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-white dark:bg-neutral-700 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-white dark:bg-neutral-700 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-white dark:bg-neutral-700 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-white dark:bg-neutral-700 text-secondary-light font-medium rounded-lg border-0 px-5 py-2.5 flex items-center justify-center h-[48px]" href="javascript:void(0)">Last</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">No Spacing</h6>
                </div>
                <div class="card-body text-center p-6">
                    <ul class="pagination flex flex-wrap items-center justify-center">
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] rounded-s-full" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"><iconify-icon icon="iconamoon:arrow-left-2-light" class="text-2xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] bg-primary-600 text-white" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)"> <iconify-icon icon="iconamoon:arrow-right-2-light" class="text-2xl"></iconify-icon> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] rounded-e-full" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                        </li>
                    </ul>
                    <ul class="pagination flex flex-wrap items-center justify-center mt-6">
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]  rounded-s-full" href="javascript:void(0)"><iconify-icon icon="iconamoon:arrow-left-2-light" class="text-2xl"></iconify-icon></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] bg-primary-600 text-white" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px]" href="javascript:void(0)">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium border-0 px-5 py-2.5 flex items-center justify-center h-[48px] w-[48px] rounded-e-full" href="javascript:void(0)"> <iconify-icon icon="iconamoon:arrow-right-2-light" class="text-2xl"></iconify-icon></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
