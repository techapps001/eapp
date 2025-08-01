@extends('layout.layout')
@php
    $title='Wallet';
    $subTitle = 'Wallet';
@endphp

@section('content')

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-9">
            <div class="card h-full border-0 p-0 rounded-xl">
                <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center flex-wrap gap-3 justify-between">
                    <div class="flex items-center flex-wrap gap-3">
                        <span class="text-base font-medium text-secondary-light mb-0">Show</span>
                        <select class="form-select form-select-sm w-auto dark:text-white">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                        <div class="icon-field relative">
                            <input type="text" name="#0" class="form-control rounded-lg w-auto" placeholder="Search">
                            <span class="icon absolute top-1/2 left-0 text-lg flex">
                                <iconify-icon icon="ion:search-outline"></iconify-icon>
                            </span>
                        </div>
                        <select class="form-select form-select-sm w-auto dark:text-white">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="btn btn-primary text-sm btn-sm px-3 py-3 rounded-lg flex items-center gap-2" type="button">
                        <iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>
                        Connect Wallet
                    </button>
                </div>
                <div class="card-body p-6">
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table sm-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border input-form-dark" type="checkbox" name="checkbox" id="selectAll">
                                            </div>
                                            S.L
                                        </div>
                                    </th>
                                    <th scope="col">Aset</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Change %</th>
                                    <th scope="col">Allocation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="01">
                                            </div>
                                            01
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/crypto/crypto-img1.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                            <div class="grow flex flex-col">
                                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Bitcoin</span>
                                                <span class="text-xs mb-0 font-normal text-secondary-light">BTC</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0.3464 BTC</td>
                                    <td>$2,753.00</td>
                                    <td>
                                        <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-4 py-1.5 rounded-full font-semibold text-xs">
                                            <i class="ri-arrow-up-s-fill"></i>
                                            1.37%
                                        </span>
                                    </td>
                                    <td>
                                        <div class="w-full max-w-[150px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                            <div class="bg-primary-500 h-2.5 rounded-full" style="width: 40%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="02">
                                            </div>
                                            02
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/crypto/crypto-img2.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                            <div class="grow flex flex-col">
                                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Ethereum</span>
                                                <span class="text-xs mb-0 font-normal text-secondary-light">ETH</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0.5464 ETH</td>
                                    <td>$2,753.00</td>
                                    <td>
                                        <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-4 py-1.5 rounded-full font-semibold text-xs">
                                            <i class="ri-arrow-up-s-fill"></i>
                                            1.37%
                                        </span>
                                    </td>
                                    <td>
                                        <div class="w-full max-w-[150px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                            <div class="bg-primary-500 h-2.5 rounded-full" style="width: 20%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="03">
                                            </div>
                                            03
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/crypto/crypto-img3.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                            <div class="grow flex flex-col">
                                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Litecoin</span>
                                                <span class="text-xs mb-0 font-normal text-secondary-light">LTC</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0.5464 LTC</td>
                                    <td>$2,753.00</td>
                                    <td>
                                        <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-4 py-1.5 rounded-full font-semibold text-xs">
                                            <i class="ri-arrow-up-s-fill"></i>
                                            1.37%
                                        </span>
                                    </td>
                                    <td>
                                        <div class="w-full max-w-[150px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                            <div class="bg-primary-500 h-2.5 rounded-full" style="width: 50%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="04">
                                            </div>
                                            04
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/crypto/crypto-img4.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                            <div class="grow flex flex-col">
                                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Binance</span>
                                                <span class="text-xs mb-0 font-normal text-secondary-light">BNB</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0.5464 BNB</td>
                                    <td>$2,753.00</td>
                                    <td>
                                        <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-4 py-1.5 rounded-full font-semibold text-xs">
                                            <i class="ri-arrow-up-s-fill"></i>
                                            1.37%
                                        </span>
                                    </td>
                                    <td>
                                        <div class="w-full max-w-[150px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                            <div class="bg-primary-500 h-2.5 rounded-full" style="width: 30%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="05">
                                            </div>
                                            05
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/crypto/crypto-img6.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                            <div class="grow flex flex-col">
                                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Dogecoin</span>
                                                <span class="text-xs mb-0 font-normal text-secondary-light">DOGE</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0.5464 DOGE</td>
                                    <td>$2,753.00</td>
                                    <td>
                                        <span class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-4 py-1.5 rounded-full font-semibold text-xs">
                                            <i class="ri-arrow-down-s-fill"></i>
                                            1.37%
                                        </span>
                                    </td>
                                    <td>
                                        <div class="w-full max-w-[150px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                            <div class="bg-primary-500 h-2.5 rounded-full" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="06">
                                            </div>
                                            06
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/crypto/crypto-img5.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                            <div class="grow flex flex-col">
                                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Polygon </span>
                                                <span class="text-xs mb-0 font-normal text-secondary-light">MATIC</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0.5464 MATIC</td>
                                    <td>$2,753.00</td>
                                    <td>
                                        <span class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-4 py-1.5 rounded-full font-semibold text-xs">
                                            <i class="ri-arrow-down-s-fill"></i>
                                            1.37%
                                        </span>
                                    </td>
                                    <td>
                                        <div class="w-full max-w-[150px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                            <div class="bg-primary-500 h-2.5 rounded-full" style="width: 60%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="066">
                                            </div>
                                            06
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/crypto/crypto-img5.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                            <div class="grow flex flex-col">
                                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Polygon </span>
                                                <span class="text-xs mb-0 font-normal text-secondary-light">MATIC</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0.5464 MATIC</td>
                                    <td>$2,753.00</td>
                                    <td>
                                        <span class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-4 py-1.5 rounded-full font-semibold text-xs">
                                            <i class="ri-arrow-down-s-fill"></i>
                                            1.37%
                                        </span>
                                    </td>
                                    <td>
                                        <div class="w-full max-w-[150px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                            <div class="bg-primary-500 h-2.5 rounded-full" style="width: 25%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="016">
                                            </div>
                                            06
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/crypto/crypto-img5.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                            <div class="grow flex flex-col">
                                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Polygon </span>
                                                <span class="text-xs mb-0 font-normal text-secondary-light">MATIC</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0.5464 MATIC</td>
                                    <td>$2,753.00</td>
                                    <td>
                                        <span class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-4 py-1.5 rounded-full font-semibold text-xs">
                                            <i class="ri-arrow-down-s-fill"></i>
                                            1.37%
                                        </span>
                                    </td>
                                    <td>
                                        <div class="w-full max-w-[150px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                            <div class="bg-primary-500 h-2.5 rounded-full" style="width: 45%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="026">
                                            </div>
                                            06
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/crypto/crypto-img5.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                            <div class="grow flex flex-col">
                                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Polygon </span>
                                                <span class="text-xs mb-0 font-normal text-secondary-light">MATIC</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0.5464 MATIC</td>
                                    <td>$2,753.00</td>
                                    <td>
                                        <span class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-4 py-1.5 rounded-full font-semibold text-xs">
                                            <i class="ri-arrow-down-s-fill"></i>
                                            1.37%
                                        </span>
                                    </td>
                                    <td>
                                        <div class="w-full max-w-[150px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                            <div class="bg-primary-500 h-2.5 rounded-full" style="width: 65%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-10">
                                            <div class="form-check style-check flex items-center">
                                                <input class="form-check-input rounded border border-neutral-400" type="checkbox" name="checkbox" id="061">
                                            </div>
                                            06
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/crypto/crypto-img5.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                            <div class="grow flex flex-col">
                                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Polygon </span>
                                                <span class="text-xs mb-0 font-normal text-secondary-light">MATIC</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0.5464 MATIC</td>
                                    <td>$2,753.00</td>
                                    <td>
                                        <span class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-4 py-1.5 rounded-full font-semibold text-xs">
                                            <i class="ri-arrow-down-s-fill"></i>
                                            1.37%
                                        </span>
                                    </td>
                                    <td>
                                        <div class="w-full max-w-[150px] bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                            <div class="bg-primary-500 h-2.5 rounded-full" style="width: 40%"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex items-center justify-between flex-wrap gap-2 mt-6">
                        <span>Showing 1 to 10 of 12 entries</span>
                        <ul class="pagination flex flex-wrap items-center gap-2 justify-center">
                            <li class="page-item">
                                <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8 text-base" href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class=""></iconify-icon></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base bg-primary-600 text-white" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8 text-base" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8 text-base" href="javascript:void(0)">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8 text-base" href="javascript:void(0)">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8 text-base" href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class=""></iconify-icon> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-3">
            <div class="card h-full border-0">
                <div class="card-body p-0">
                    <div class="px-6 py-5">
                        <span class="mb-2">WowDash</span>
                        <h5 class="text-2xl">$40,570.85</h5>
                        <div class="mt-6 pb-6 mb-6 border-b border-neutral-200 dark:border-neutral-600 flex items-center gap-4 justify-between flex-wrap">
                            <div class="text-center flex items-center  flex-col">
                                <span class="w-[60px] h-[60px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 text-2xl inline-flex justify-center items-center rounded-full ">
                                    <i class="ri-add-line"></i>
                                </span>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium mt-6">Buy</span>
                            </div>
                            <div class="text-center flex items-center  flex-col">
                                <span class="w-[60px] h-[60px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 text-2xl inline-flex justify-center items-center rounded-full ">
                                    <i class="ri-arrow-left-right-line"></i>
                                </span>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium mt-6">Swap</span>
                            </div>
                            <div class="text-center flex items-center  flex-col">
                                <span class="w-[60px] h-[60px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 text-2xl inline-flex justify-center items-center rounded-full ">
                                    <i class="ri-upload-2-line"></i>
                                </span>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium mt-6">Send</span>
                            </div>
                            <div class="text-center flex items-center  flex-col">
                                <span class="w-[60px] h-[60px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 text-2xl inline-flex justify-center items-center rounded-full ">
                                    <i class="ri-download-2-line"></i>
                                </span>
                                <span class="text-neutral-600 dark:text-neutral-200 font-medium mt-6">Receive</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-2 pb-6 border-b border-neutral-200 dark:border-neutral-600">
                            <h6 class="text-lg mb-0">Watchlist</h6>
                            <a href="javascript:void(0)" class="text-primary-600 font-medium text-base">Sell all</a>
                        </div>

                        <div class="flex items-center justify-between flex-wrap gap-2 py-4 border-b border-neutral-200 dark:border-neutral-600">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/crypto/crypto-img1.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow flex flex-col">
                                    <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Bitcoin</span>
                                    <span class="text-xs mb-0 font-normal text-secondary-light">BTC</span>
                                </div>
                            </div>
                            <div class=" flex flex-col">
                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">$1,236.21</span>
                                <span class="text-xs mb-0 font-normal text-secondary-light">1.4363 BTC </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between flex-wrap gap-2 py-4 border-b border-neutral-200 dark:border-neutral-600">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/crypto/crypto-img2.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow flex flex-col">
                                    <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Ethereum</span>
                                    <span class="text-xs mb-0 font-normal text-secondary-light">ETH</span>
                                </div>
                            </div>
                            <div class=" flex flex-col">
                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">$1,236.21</span>
                                <span class="text-xs mb-0 font-normal text-secondary-light">1.4363 ETH </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between flex-wrap gap-2 py-4 border-b border-neutral-200 dark:border-neutral-600">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/crypto/crypto-img5.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow flex flex-col">
                                    <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Dogecoin</span>
                                    <span class="text-xs mb-0 font-normal text-secondary-light">DOGE</span>
                                </div>
                            </div>
                            <div class=" flex flex-col">
                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">$1,658</span>
                                <span class="text-xs mb-0 font-normal text-secondary-light">1.4363 DOGE</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between flex-wrap gap-2 py-4">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/crypto/crypto-img6.png') }}" alt="" class="w-10 h-10 rounded-full shrink-0 me-2 overflow-hidden">
                                <div class="grow flex flex-col">
                                    <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Digibyte</span>
                                    <span class="text-xs mb-0 font-normal text-secondary-light">DGB</span>
                                </div>
                            </div>
                            <div class=" flex flex-col">
                                <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">$165,8</span>
                                <span class="text-xs mb-0 font-normal text-secondary-light">1.4363 DGB</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Edit Currecny Start -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between px-6 py-3 border-b rounded-t dark:border-gray-600">
                    <h5 class="modal-title text-xl" id="exampleModalEditLabel">Connect Wallet</h5>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="flex flex-col gap-2 p-6">
                    <a href="javascript:void(0)" class="flex items-center justify-between gap-2 p-4 border border-neutral-200 dark:border-neutral-600 rounded-lg hover:bg-neutral-50 dark:hover:bg-neutral-600">
                        <span class="flex items-center gap-4">
                            <img src="{{ asset('assets/images/crypto/wallet-icon1.png') }}" alt="" class="shrink-0 me-3 overflow-hidden">
                            <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Bitcoin</span>
                        </span>
                        <span class="text-secondary-light text-base"><i class="ri-arrow-right-s-line"></i></span>
                    </a>
                    <a href="javascript:void(0)" class="flex items-center justify-between gap-2 p-4 border border-neutral-200 dark:border-neutral-600 rounded-lg hover:bg-neutral-50 dark:hover:bg-neutral-600">
                        <span class="flex items-center gap-4">
                            <img src="{{ asset('assets/images/crypto/wallet-icon2.png') }}" alt="" class="shrink-0 me-3 overflow-hidden">
                            <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Coinbase Wallet</span>
                        </span>
                        <span class="text-secondary-light text-base"><i class="ri-arrow-right-s-line"></i></span>
                    </a>
                    <a href="javascript:void(0)" class="flex items-center justify-between gap-2 p-4 border border-neutral-200 dark:border-neutral-600 rounded-lg hover:bg-neutral-50 dark:hover:bg-neutral-600">
                        <span class="flex items-center gap-4">
                            <img src="{{ asset('assets/images/crypto/wallet-icon3.png') }}" alt="" class="shrink-0 me-3 overflow-hidden">
                            <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Exodus Wallet</span>
                        </span>
                        <span class="text-secondary-light text-base"><i class="ri-arrow-right-s-line"></i></span>
                    </a>
                    <a href="javascript:void(0)" class="flex items-center justify-between gap-2 p-4 border border-neutral-200 dark:border-neutral-600 rounded-lg hover:bg-neutral-50 dark:hover:bg-neutral-600">
                        <span class="flex items-center gap-4">
                            <img src="{{ asset('assets/images/crypto/wallet-icon4.png') }}" alt="" class="shrink-0 me-3 overflow-hidden">
                            <span class="text-base mb-0 font-medium text-neutral-600 dark:text-neutral-200 block">Trust Wallet</span>
                        </span>
                        <span class="text-secondary-light text-base"><i class="ri-arrow-right-s-line"></i></span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit Currecny End -->
        
@endsection