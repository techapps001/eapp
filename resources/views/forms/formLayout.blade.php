@extends('layout.layout')
@php
    $title='Input Layout';
    $subTitle = 'Input Layout';
@endphp

@section('content')

    <div class="grid grid-cols-12 gap-5">
        <div class="md:col-span-6 col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Vertical Input Form</h5>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label class="form-label">First Name</label>
                            <input type="text" name="#0" class="form-control" placeholder="Enter First Name">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="#0" class="form-control" placeholder="Enter Last Name">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Email</label>
                            <input type="email" name="#0" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Phone</label>
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
                            <label class="form-label">Password</label>
                            <input type="password" name="#0" class="form-control" placeholder="*******">
                        </div>
                        <div class="col-span-12">
                            <button type="submit" class="btn btn-primary-600">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:col-span-6 col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Input Form With Icons</h5>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label class="form-label">First Name</label>
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="f7:person"></iconify-icon>
                                </span>
                                <input type="text" name="#0" class="form-control" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Last Name</label>
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="f7:person"></iconify-icon>
                                </span>
                                <input type="text" name="#0" class="form-control" placeholder="Enter Last Name">
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Email</label>
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="mage:email"></iconify-icon>
                                </span>
                                <input type="email" name="#0" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Phone</label>
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="solar:phone-calling-linear"></iconify-icon>
                                </span>
                                <input type="text" name="#0" class="form-control" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label class="form-label">Password</label>
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                                </span>
                                <input type="password" name="#0" class="form-control" placeholder="*******">
                            </div>
                        </div>
                        <div class="col-span-12">
                            <button type="submit" class="btn btn-primary-600">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:col-span-6 col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Horizontal Input Form</h5>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">First Name</label>
                        <div class="sm:col-span-10 col-span-12">
                            <input type="text" name="#0" class="form-control" placeholder="Enter First Name">
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Last Name</label>
                        <div class="sm:col-span-10 col-span-12">
                            <input type="text" name="#0" class="form-control" placeholder="Enter Last Name">
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Email</label>
                        <div class="sm:col-span-10 col-span-12">
                            <input type="email" name="#0" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Phone</label>
                        <div class="sm:col-span-10 col-span-12">
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
                    </div>
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Password</label>
                        <div class="sm:col-span-10 col-span-12">
                            <input type="password" name="#0" class="form-control" placeholder="*******">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary-600">Submit</button>
                </div>
            </div>
        </div>
        <div class="md:col-span-6 col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Horizontal Input Form With Icons</h5>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">First Name</label>
                        <div class="sm:col-span-10 col-span-12">
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="f7:person"></iconify-icon>
                                </span>
                                <input type="text" name="#0" class="form-control" placeholder="Enter First Name">
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Last Name</label>
                        <div class="sm:col-span-10 col-span-12">
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="f7:person"></iconify-icon>
                                </span>
                                <input type="text" name="#0" class="form-control" placeholder="Enter Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Email</label>
                        <div class="sm:col-span-10 col-span-12">
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="mage:email"></iconify-icon>
                                </span>
                                <input type="email" name="#0" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Phone</label>
                        <div class="sm:col-span-10 col-span-12">
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="solar:phone-calling-linear"></iconify-icon>
                                </span>
                                <input type="text" name="#0" class="form-control" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Password</label>
                        <div class="sm:col-span-10 col-span-12">
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                                </span>
                                <input type="password" name="#0" class="form-control" placeholder="*******">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary-600">Submit</button>
                </div>
            </div>
        </div>
    </div>

@endsection
