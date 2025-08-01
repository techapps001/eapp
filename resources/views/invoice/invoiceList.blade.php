@extends('layout.layout')
@php
    $title='Invoice List';
    $subTitle = 'Invoice List';
@endphp

@section('content')

    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="card border-0">
                <div class="card-header flex flex-wrap items-center justify-between gap-3">
                    <div class="flex flex-wrap items-center gap-3">
                        <div class="flex items-center gap-2">
                            <span>Show</span>
                            <select class="form-select form-select-sm w-auto dark:bg-dark-2 dark:text-white">
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                            </select>
                        </div>
                        <div class="icon-field relative">
                            <input type="text" name="#0" class="bg-white dark:bg-dark-2 ps-10 border-neutral-200 dark:border-neutral-500 rounded-lg w-auto" placeholder="Search">
                            <span class="icon absolute top-1/2 left-0 text-lg flex">
                                <iconify-icon icon="ion:search-outline"></iconify-icon>
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <select class="form-select form-select-sm w-auto dark:bg-dark-2 dark:text-white border-neutral-200 dark:border-neutral-500">
                            <option>Satatus</option>
                            <option>Paid</option>
                            <option>Pending</option>
                        </select>
                        <a href="{{ route('invoiceAdd') }}" class="btn btn-sm text-white bg-primary-600 hover:bg-primary-700 flex items-center gap-2"><i class="ri-add-line"></i> Create Invoice</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                            <label class="form-check-label" for="checkAll">
                                                S.L
                                            </label>
                                        </div>
                                    </th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Issued Date</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="check1">
                                            <label class="form-check-label" for="check1">
                                                01
                                            </label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-list/user-list1.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <h6 class="text-base mb-0 font-medium grow">Kathryn Murphy</h6>
                                        </div>
                                    </td>
                                    <td>25 Jan 2025</td>
                                    <td>$200.00</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/25 text-primary-600 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="check2">
                                            <label class="form-check-label" for="check2">
                                                02
                                            </label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-primary-600">#696589</a></td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-list/user-list2.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <h6 class="text-base mb-0 font-medium grow">Annette Black</h6>
                                        </div>
                                    </td>
                                    <td>25 Jan 2025</td>
                                    <td>$200.00</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/25 text-primary-600 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="check3">
                                            <label class="form-check-label" for="check3">
                                                03
                                            </label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-list/user-list3.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <h6 class="text-base mb-0 font-medium grow">Ronald Richards</h6>
                                        </div>
                                    </td>
                                    <td>10 Feb 2025</td>
                                    <td>$200.00</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/25 text-primary-600 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="check4">
                                            <label class="form-check-label" for="check4">
                                                04
                                            </label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-primary-600">#526587</a></td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-list/user-list4.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <h6 class="text-base mb-0 font-medium grow">Eleanor Pena</h6>
                                        </div>
                                    </td>
                                    <td>10 Feb 2025</td>
                                    <td>$150.00</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/25 text-primary-600 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="check5">
                                            <label class="form-check-label" for="check5">
                                                05
                                            </label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-primary-600">#105986</a></td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-list/user-list5.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <h6 class="text-base mb-0 font-medium grow">Leslie Alexander</h6>
                                        </div>
                                    </td>
                                    <td>15 March 2025</td>
                                    <td>$150.00</td>
                                    <td> <span class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm">Pending</span> </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/25 text-primary-600 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="check6">
                                            <label class="form-check-label" for="check6">
                                                06
                                            </label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-primary-600">#526589</a></td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-list/user-list6.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <h6 class="text-base mb-0 font-medium grow">Albert Flores</h6>
                                        </div>
                                    </td>
                                    <td>15 March 2025</td>
                                    <td>$150.00</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/25 text-primary-600 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="check7">
                                            <label class="form-check-label" for="check7">
                                                07
                                            </label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-primary-600">#526520</a></td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-list/user-list7.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <h6 class="text-base mb-0 font-medium grow">Jacob Jones</h6>
                                        </div>
                                    </td>
                                    <td>27 April 2025</td>
                                    <td>$250.00</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/25 text-primary-600 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="check8">
                                            <label class="form-check-label" for="check8">
                                                08
                                            </label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-list/user-list8.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <h6 class="text-base mb-0 font-medium grow">Jerome Bell</h6>
                                        </div>
                                    </td>
                                    <td>27 April 2025</td>
                                    <td>$250.00</td>
                                    <td> <span class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm">Pending</span> </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/25 text-primary-600 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="check9">
                                            <label class="form-check-label" for="check9">
                                                09
                                            </label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-primary-600">#200257</a></td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-list/user-list9.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <h6 class="text-base mb-0 font-medium grow">Marvin McKinney</h6>
                                        </div>
                                    </td>
                                    <td>30 April 2025</td>
                                    <td>$250.00</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/25 text-primary-600 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check style-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="check110">
                                            <label class="form-check-label" for="check110">
                                                10
                                            </label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-primary-600">#526525</a></td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-list/user-list10.png') }}" alt="" class="shrink-0 me-3 rounded-lg">
                                            <h6 class="text-base mb-0 font-medium grow">Cameron Williamson</h6>
                                        </div>
                                    </td>
                                    <td>30 April 2025</td>
                                    <td>$250.00</td>
                                    <td> <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Paid</span> </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-primary-50 dark:bg-primary-600/25 text-primary-600 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                            </a>
                                            <a href="javascript:void(0)" class="w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center">
                                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex flex-wrap items-center justify-between gap-2 mt-6">
                        <span>Showing 1 to 10 of 12 entries</span>
                        <ul class="pagination flex flex-wrap items-center gap-2 justify-center">
                            <li class="page-item">
                                <a class="page-link text-secondary-light font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8 bg-white dark:bg-neutral-700"
                                    href="javascript:void(0)"><iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-primary-600 text-white font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8"
                                    href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8"
                                    href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-primary-50 dark:bg-primary-600/25 text-secondary-light font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8"
                                    href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link text-secondary-light font-medium rounded border-0 px-2.5 py-2.5 flex items-center justify-center h-8 w-8 bg-white dark:bg-neutral-700"
                                    href="javascript:void(0)"> <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection