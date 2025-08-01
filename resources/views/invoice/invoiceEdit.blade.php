@extends('layout.layout')
@php
    $title='Invoice List';
    $subTitle = 'Invoice List';
    $script = ' <script src="' . asset('assets/js/invoice.js') . '"></script>';
@endphp

@section('content')

    <div class="card border-0">
        <div class="card-header">
            <div class="flex flex-wrap items-center justify-end gap-2">
                <button type="button" class="btn btn-sm btn-primary-600 rounded-lg inline-flex items-center gap-1">
                    <iconify-icon icon="simple-line-icons:check" class="text-xl"></iconify-icon>
                    Save
                </button>
            </div>
        </div>
        <div class="card-body py-[60px]">
            <div class="grid grid-cols-1" id="invoice">
                <div class="max-w-[1174px] mx-auto w-full">
                    <div class="shadow-4 border border-neutral-200 dark:border-neutral-600 rounded-lg">
                        <div class="p-5 border-b border-neutral-200 dark:border-neutral-600">
                            <div class="flex flex-wrap justify-between gap-4">
                                <div class="">
                                    <h3 class="text-xl">Invoice #3492</h3>
                                    <p class="mb-1 text-sm">Date Issued: <span class="editable underline">25/08/2020</span> <span class="text-success-600"><iconify-icon icon="mage:edit"></iconify-icon></span></p>
                                    <p class="mb-0 text-sm">Date Due: <span class="editable underline">29/08/2020</span> <span class="text-success-600"><iconify-icon icon="mage:edit"></iconify-icon></span></p>
                                </div>
                                <div class="">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image" class="mb-2">
                                    <p class="mb-1 text-sm">4517 Washington Ave. Manchester, Kentucky 39495</p>
                                    <p class="mb-0 text-sm">random@gmail.com, +1 543 2198</p>
                                </div>
                            </div>
                        </div>

                        <div class="py-7 px-5">
                            <div class="flex flex-wrap justify-between align-items-end gap-3">
                                <div>
                                    <h6 class="text-base">Issus For:</h6>
                                    <table class="text-sm text-secondary-light">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td class="ps-2">: <span class="editable underline">Will Marthas</span> <span class="text-success-600"><iconify-icon icon="mage:edit"></iconify-icon></span></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td class="ps-2">: <span class="editable underline">4517 Washington Ave.USA</span> <span class="text-success-600"><iconify-icon icon="mage:edit"></iconify-icon></span></td>
                                            </tr>
                                            <tr>
                                                <td>Phone number</td>
                                                <td class="ps-2">: <span class="editable underline">+1 543 2198</span> <span class="text-success-600"><iconify-icon icon="mage:edit"></iconify-icon></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="text-sm text-secondary-light">
                                        <tbody>
                                            <tr>
                                                <td>Issus Date</td>
                                                <td class="ps-2">:25 Jan 2025</td>
                                            </tr>
                                            <tr>
                                                <td>Order ID</td>
                                                <td class="ps-2">:#653214</td>
                                            </tr>
                                            <tr>
                                                <td>Shipment ID</td>
                                                <td class="ps-2">:#965215</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="mt-6">
                                <div class="table-responsive scroll-sm">
                                    <table class="table bordered-table text-sm" id="invoice-table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-sm">SL.</th>
                                                <th scope="col" class="text-sm">Items</th>
                                                <th scope="col" class="text-sm">Qty</th>
                                                <th scope="col" class="text-sm">Units</th>
                                                <th scope="col" class="text-sm">Unit Price</th>
                                                <th scope="col" class="text-sm">Price</th>
                                                <th scope="col" class="text-center text-sm">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>$200</td>
                                                <td>$1000.00</td>
                                                <td class="text-center">
                                                    <button type="button" class="remove-row"><iconify-icon icon="ic:twotone-close" class="text-danger-600 text-xl"></iconify-icon></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>$200</td>
                                                <td>$1000.00</td>
                                                <td class="text-center">
                                                    <button type="button" class="remove-row"><iconify-icon icon="ic:twotone-close" class="text-danger-600 text-xl"></iconify-icon></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>$200</td>
                                                <td>$1000.00</td>
                                                <td class="text-center">
                                                    <button type="button" class="remove-row"><iconify-icon icon="ic:twotone-close" class="text-danger-600 text-xl"></iconify-icon></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>$200</td>
                                                <td>$1000.00</td>
                                                <td class="text-center">
                                                    <button type="button" class="remove-row"><iconify-icon icon="ic:twotone-close" class="text-danger-600 text-xl"></iconify-icon></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div>
                                    <button type="button" id="addRow" class="btn btn-sm btn-primary-600 rounded-lg inline-flex items-center gap-1 mt-6">
                                        <iconify-icon icon="simple-line-icons:plus" class="text-xl"></iconify-icon>
                                        Add New
                                    </button>
                                </div>

                                <div class="flex flex-wrap justify-between gap-3 mt-6">
                                    <div>
                                        <p class="text-sm mb-0"><span class="text-neutral-600 dark:text-neutral-200 font-semibold">Sales By:</span> Jammal</p>
                                        <p class="text-sm mb-0">Thanks for your business</p>
                                    </div>
                                    <div>
                                        <table class="text-sm">
                                            <tbody>
                                                <tr>
                                                    <td class="pe-[64px]">Subtotal:</td>
                                                    <td class="ps-6">
                                                        <span class="text-neutral-600 dark:text-neutral-200 font-semibold">$4000.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-[64px]">Discount:</td>
                                                    <td class="ps-6">
                                                        <span class="text-neutral-600 dark:text-neutral-200 font-semibold">$0.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-[64px] border-b border-neutral-200 dark:border-neutral-600 pb-4">Tax:</td>
                                                    <td class="ps-6 border-b border-neutral-200 dark:border-neutral-600 pb-4">
                                                        <span class="text-neutral-600 dark:text-neutral-200 font-semibold">0.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-[64px] pt-4">
                                                        <span class="text-neutral-600 dark:text-neutral-200 font-semibold">Total:</span>
                                                    </td>
                                                    <td class="ps-6 pt-4">
                                                        <span class="text-neutral-600 dark:text-neutral-200 font-semibold">$1690</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-16">
                                <p class="text-center text-secondary-light text-sm font-semibold">Thank you for your purchase!</p>
                            </div>

                            <div class="flex flex-wrap justify-between align-items-end mt-16">
                                <div class="text-sm border-t border-neutral-200 dark:border-neutral-600 inline-block px-3">Signature of Customer</div>
                                <div class="text-sm border-t border-neutral-200 dark:border-neutral-600 inline-block px-3">Signature of Authorized</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection