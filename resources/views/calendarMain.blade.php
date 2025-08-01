@extends('layout.layout')

@php
    $title='Calendar';
    $subTitle = 'Components / Calendar';
    $script = '<script src="' . asset('assets/js/full-calendar.js') . '"></script>
               <script src="' . asset('assets/js/flatpickr.js') . '"></script>
                 <script>
                 // Flat pickr or date picker js 
                 function getDatePicker(receiveID) {
                     flatpickr(receiveID, {
                         enableTime: true,
                         dateFormat: "d/m/Y H:i",
                     });
                 }
                 getDatePicker("#startDate");
                 getDatePicker("#endDate");

                 getDatePicker("#editstartDate");
                 getDatePicker("#editendDate");
                 </script>';
@endphp

@section('content')

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
                    <div class="card h-full p-0 border-0">
                        <div class="card-body p-6">
                            <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="btn btn-primary text-sm btn-sm px-3 py-3 w-full rounded-lg flex items-center gap-2 mb-8">
                                <iconify-icon icon="fa6-regular:square-plus" class="icon text-lg line-height-1"></iconify-icon>
                                Add Currency
                            </button>
                            <div class="mt-8">
                                <div class="event-item flex items-center justify-between gap-4 pb-4 mb-4 border-b border-neutral-200 dark:border-neutral-600">
                                    <div class="">
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-3 h-3 bg-warning-600 rounded-full font-medium"></span>
                                            <span class="text-secondary-light">Today, 10:30 PM - 02:30 AM</span>
                                        </div>
                                        <span class="text-neutral-600 dark:text-neutral-200 font-semibold text-base mt-1.5">Design Conference</span>
                                    </div>
                                    <div class="dropdown">
                                        <button data-dropdown-toggle="dropdownDotsZero" class="inline-flex items-center p-2 text-xl font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                            <i class="ri-more-2-fill"></i>
                                        </button>

                                        <div id="dropdownDotsZero" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <button data-modal-target="view-popup-modal" data-modal-toggle="view-popup-modal" type="submit" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-eye-line"></i></span>
                                                        View
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-modal-target="edit-popup-modal" data-modal-toggle="edit-popup-modal" type="button" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-edit-line"></i></span>
                                                        Edit
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-modal-target="delete-popup-modal" data-modal-toggle="delete-popup-modal" type="button" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-delete-bin-5-line"></i></span>
                                                        Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-item flex items-center justify-between gap-4 pb-4 mb-4 border-b border-neutral-200 dark:border-neutral-600">
                                    <div class="">
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-3 h-3 bg-success-600 rounded-full font-medium"></span>
                                            <span class="text-secondary-light">Today, 10:30 PM - 02:30 AM</span>
                                        </div>
                                        <span class="text-neutral-600 dark:text-neutral-200 font-semibold text-base mt-1.5">Weekend Festival</span>
                                    </div>
                                    <div class="dropdown">
                                        <button data-dropdown-toggle="dropdownDotsOne" class="inline-flex items-center p-2 text-xl font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                            <i class="ri-more-2-fill"></i>
                                        </button>

                                        <div id="dropdownDotsOne" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <button data-modal-target="view-popup-modal" data-modal-toggle="view-popup-modal" type="submit" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-eye-line"></i></span>
                                                        View
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-modal-target="edit-popup-modal" data-modal-toggle="edit-popup-modal" type="button" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-edit-line"></i></span>
                                                        Edit
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-modal-target="delete-popup-modal" data-modal-toggle="delete-popup-modal" type="button" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-delete-bin-5-line"></i></span>
                                                        Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-item flex items-center justify-between gap-4 pb-4 mb-4 border-b border-neutral-200 dark:border-neutral-600">
                                    <div class="">
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-3 h-3 bg-info-600 rounded-full font-medium"></span>
                                            <span class="text-secondary-light">Today, 10:30 PM - 02:30 AM</span>
                                        </div>
                                        <span class="text-neutral-600 dark:text-neutral-200 font-semibold text-base mt-1.5">Design Conference</span>
                                    </div>
                                    <div class="dropdown">
                                        <button data-dropdown-toggle="dropdownDotsTwo" class="inline-flex items-center p-2 text-xl font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                            <i class="ri-more-2-fill"></i>
                                        </button>

                                        <div id="dropdownDotsTwo" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <button data-modal-target="view-popup-modal" data-modal-toggle="view-popup-modal" type="submit" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-eye-line"></i></span>
                                                        View
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-modal-target="edit-popup-modal" data-modal-toggle="edit-popup-modal" type="button" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-edit-line"></i></span>
                                                        Edit
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-modal-target="delete-popup-modal" data-modal-toggle="delete-popup-modal" type="button" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-delete-bin-5-line"></i></span>
                                                        Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-item flex items-center justify-between gap-4 pb-4 mb-4 border-b border-neutral-200 dark:border-neutral-600">
                                    <div class="">
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-3 h-3 bg-warning-600 rounded-full font-medium"></span>
                                            <span class="text-secondary-light">Today, 10:30 PM - 02:30 AM</span>
                                        </div>
                                        <span class="text-neutral-600 dark:text-neutral-200 font-semibold text-base mt-1.5">Ultra Europe 2019</span>
                                    </div>
                                    <div class="dropdown">
                                        <button data-dropdown-toggle="dropdownDotsThree" class="inline-flex items-center p-2 text-xl font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                            <i class="ri-more-2-fill"></i>
                                        </button>

                                        <div id="dropdownDotsThree" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <button data-modal-target="view-popup-modal" data-modal-toggle="view-popup-modal" type="submit" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-eye-line"></i></span>
                                                        View
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-modal-target="edit-popup-modal" data-modal-toggle="edit-popup-modal" type="button" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-edit-line"></i></span>
                                                        Edit
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-modal-target="delete-popup-modal" data-modal-toggle="delete-popup-modal" type="button" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-delete-bin-5-line"></i></span>
                                                        Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-item flex items-center justify-between gap-4 pb-4 mb-4 border-b border-neutral-200 dark:border-neutral-600">
                                    <div class="">
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-3 h-3 bg-warning-600 rounded-full font-medium"></span>
                                            <span class="text-secondary-light">Today, 10:30 PM - 02:30 AM</span>
                                        </div>
                                        <span class="text-neutral-600 dark:text-neutral-200 font-semibold text-base mt-1.5">Design Conference</span>
                                    </div>
                                    <div class="dropdown">
                                        <button data-dropdown-toggle="dropdownDotsFour" class="inline-flex items-center p-2 text-xl font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                            <i class="ri-more-2-fill"></i>
                                        </button>

                                        <div id="dropdownDotsFour" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <button data-modal-target="view-popup-modal" data-modal-toggle="view-popup-modal" type="submit" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-eye-line"></i></span>
                                                        View
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-modal-target="edit-popup-modal" data-modal-toggle="edit-popup-modal" type="button" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-edit-line"></i></span>
                                                        Edit
                                                    </button>
                                                </li>
                                                <li>
                                                    <button data-modal-target="delete-popup-modal" data-modal-toggle="delete-popup-modal" type="button" class="w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center gap-2">
                                                        <span class="text-lg flex"><i class="ri-delete-bin-5-line"></i></span>
                                                        Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                    <div class="card h-full p-0 border-0">
                        <div class="card-body p-6">
                            <div id='wrap'>
                                <div id='calendar'></div>
                                <div style='clear:both'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Add Event -->
            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="rounded-2xl bg-white dark:bg-dark-2 max-w-[800px] w-full">
                    <div class="py-4 px-6 border-b border-neutral-200 dark:border-neutral-600 flex items-center justify-between">
                        <h1 class="text-xl">Add New Event</h1>
                        <button data-modal-hide="popup-modal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-6">
                        <form action="#">
                            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <label for="title" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Event Title : </label>
                                    <input type="text" id="title" class="form-control rounded-lg" placeholder="Enter Event Title ">
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <label for="startDate" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Start Date</label>
                                    <div class=" relative">
                                        <input class="form-control rounded-lg bg-white dark:bg-neutral-700" id="startDate" type="text" placeholder="03/12/2025, 10:30 AM">
                                        <span class="absolute end-0 top-1/2 -translate-y-1/2 me-3 line-height-1"><iconify-icon icon="solar:calendar-linear" class="icon text-lg"></iconify-icon></span>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <label for="endDate" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">End Date </label>
                                    <div class=" relative">
                                        <input class="form-control rounded-lg bg-white dark:bg-neutral-700" id="endDate" type="text" placeholder="03/12/2025, 2:30 PM">
                                        <span class="absolute end-0 top-1/2 -translate-y-1/2 me-3 line-height-1"><iconify-icon icon="solar:calendar-linear" class="icon text-lg"></iconify-icon></span>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <label for="endDate" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Label </label>
                                    <div class="flex items-center flex-wrap gap-7">
                                        <div class="form-check checked-success flex items-center gap-2">
                                            <input class="form-check-input rounded-full" type="radio" name="label" id="Personal">
                                            <label class="form-check-label line-height-1 font-medium text-secondary-light text-sm flex items-center gap-1" for="Personal">
                                                <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                                                Personal
                                            </label>
                                        </div>
                                        <div class="form-check checked-primary flex items-center gap-2">
                                            <input class="form-check-input rounded-full" type="radio" name="label" id="Business">
                                            <label class="form-check-label line-height-1 font-medium text-secondary-light text-sm flex items-center gap-1" for="Business">
                                                <span class="w-2 h-2 bg-primary-600 rounded-full"></span>
                                                Business
                                            </label>
                                        </div>
                                        <div class="form-check checked-warning flex items-center gap-2">
                                            <input class="form-check-input rounded-full" type="radio" name="label" id="Family">
                                            <label class="form-check-label line-height-1 font-medium text-secondary-light text-sm flex items-center gap-1" for="Family">
                                                <span class="w-2 h-2 bg-warning-600 rounded-full"></span>
                                                Family
                                            </label>
                                        </div>
                                        <div class="form-check checked-secondary flex items-center gap-2">
                                            <input class="form-check-input rounded-full" type="radio" name="label" id="Important">
                                            <label class="form-check-label line-height-1 font-medium text-secondary-light text-sm flex items-center gap-1" for="Important">
                                                <span class="w-2 h-2 bg-purple-600 rounded-full"></span>
                                                Important
                                            </label>
                                        </div>
                                        <div class="form-check checked-danger flex items-center gap-2">
                                            <input class="form-check-input rounded-full" type="radio" name="label" id="Holiday">
                                            <label class="form-check-label line-height-1 font-medium text-secondary-light text-sm flex items-center gap-1" for="Holiday">
                                                <span class="w-2 h-2 bg-danger-600 rounded-full"></span>
                                                Holiday
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <label for="desc" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Description</label>
                                    <textarea class="form-control" id="desc" rows="4" cols="50" placeholder="Write some text"></textarea>
                                </div>
                                <div class="col-span-12">
                                    <div class="flex items-center justify-center gap-3 mt-6">
                                        <button type="reset" data-modal-hide="edit-popup-modal" class="border border-danger-600 hover:bg-danger-100 text-danger-600 text-base px-10 py-[11px] rounded-lg">
                                            Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- View Details Event -->
            <div id="view-popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="rounded-2xl bg-white dark:bg-dark-2 max-w-[600px] w-full">
                    <div class="py-4 px-6 border-b border-neutral-200 dark:border-neutral-600 flex items-center justify-between">
                        <h1 class="text-xl">View Details</h1>
                        <button data-modal-hide="view-popup-modal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="mb-3">
                            <span class="text-secondary-light txt-sm font-medium">Title</span>
                            <h6 class="text-neutral-600 dark:text-neutral-200 font-semibold text-base mb-0 mt-6">Design Conference</h6>
                        </div>
                        <div class="mb-3">
                            <span class="text-secondary-light txt-sm font-medium">Start Date</span>
                            <h6 class="text-neutral-600 dark:text-neutral-200 font-semibold text-base mb-0 mt-6">25 Jan 2025, 10:30AM</h6>
                        </div>
                        <div class="mb-3">
                            <span class="text-secondary-light txt-sm font-medium">End Date</span>
                            <h6 class="text-neutral-600 dark:text-neutral-200 font-semibold text-base mb-0 mt-6">25 Jan 2025, 2:30AM</h6>
                        </div>
                        <div class="mb-3">
                            <span class="text-secondary-light txt-sm font-medium">Description</span>
                            <h6 class="text-neutral-600 dark:text-neutral-200 font-semibold text-base mb-0 mt-6">N/A</h6>
                        </div>
                        <div class="mb-3">
                            <span class="text-secondary-light txt-sm font-medium">Label</span>
                            <h6 class="text-neutral-600 dark:text-neutral-200 font-semibold text-base mb-0 mt-6 flex items-center gap-2">
                                <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                                Business
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Modal Event -->
            <div id="edit-popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="rounded-2xl bg-white dark:bg-dark-2 max-w-[800px] w-full">
                    <div class="py-4 px-6 border-b border-neutral-200 dark:border-neutral-600 flex items-center justify-between">
                        <h1 class="text-xl">Edit Event</h1>
                        <button data-modal-hide="edit-popup-modal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-6">
                        <form action="#">
                            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <label class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Event Title : </label>
                                    <input type="text" class="form-control rounded-lg" placeholder="Enter Event Title ">
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <label for="editstartDate" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Start Date</label>
                                    <div class=" relative">
                                        <input class="form-control rounded-lg" id="editstartDate" type="text" placeholder="03/12/2025, 10:30 AM">
                                        <span class="absolute end-0 top-1/2 -translate-y-1/2 me-3 line-height-1"><iconify-icon icon="solar:calendar-linear" class="icon text-lg"></iconify-icon></span>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <label for="editendDate" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">End Date </label>
                                    <div class=" relative">
                                        <input class="form-control rounded-lg" id="editendDate" type="text" placeholder="03/12/2025, 2:30 PM">
                                        <span class="absolute end-0 top-1/2 -translate-y-1/2 me-3 line-height-1"><iconify-icon icon="solar:calendar-linear" class="icon text-lg"></iconify-icon></span>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <label class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Label </label>
                                    <div class="flex items-center flex-wrap gap-7">
                                        <div class="form-check checked-success flex items-center gap-2">
                                            <input class="form-check-input rounded-full" type="radio" name="label" id="editPersonal">
                                            <label class="form-check-label line-height-1 font-medium text-secondary-light text-sm flex items-center gap-1" for="editPersonal">
                                                <span class="w-2 h-2 bg-success-600 rounded-full"></span>
                                                Personal
                                            </label>
                                        </div>
                                        <div class="form-check checked-primary flex items-center gap-2">
                                            <input class="form-check-input rounded-full" type="radio" name="label" id="editBusiness">
                                            <label class="form-check-label line-height-1 font-medium text-secondary-light text-sm flex items-center gap-1" for="editBusiness">
                                                <span class="w-2 h-2 bg-primary-600 rounded-full"></span>
                                                Business
                                            </label>
                                        </div>
                                        <div class="form-check checked-warning flex items-center gap-2">
                                            <input class="form-check-input rounded-full" type="radio" name="label" id="editFamily">
                                            <label class="form-check-label line-height-1 font-medium text-secondary-light text-sm flex items-center gap-1" for="editFamily">
                                                <span class="w-2 h-2 bg-warning-600 rounded-full"></span>
                                                Family
                                            </label>
                                        </div>
                                        <div class="form-check checked-secondary flex items-center gap-2">
                                            <input class="form-check-input rounded-full" type="radio" name="label" id="editImportant">
                                            <label class="form-check-label line-height-1 font-medium text-secondary-light text-sm flex items-center gap-1" for="editImportant">
                                                <span class="w-2 h-2 bg-purple-600 rounded-full"></span>
                                                Important
                                            </label>
                                        </div>
                                        <div class="form-check checked-danger flex items-center gap-2">
                                            <input class="form-check-input rounded-full" type="radio" name="label" id="editHoliday">
                                            <label class="form-check-label line-height-1 font-medium text-secondary-light text-sm flex items-center gap-1" for="editHoliday">
                                                <span class="w-2 h-2 bg-danger-600 rounded-full"></span>
                                                Holiday
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <label for="desc" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Description</label>
                                    <textarea class="form-control" id="editdesc" rows="4" cols="50" placeholder="Write some text"></textarea>
                                </div>
                                <div class="col-span-12">
                                    <div class="flex items-center justify-center gap-3 mt-6">
                                        <button type="reset" data-modal-hide="edit-popup-modal" class="border border-danger-600 hover:bg-danger-100 text-danger-600 text-base px-10 py-[11px] rounded-lg">
                                            Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Modal Event -->
            <div id="delete-popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="rounded-2xl bg-white dark:bg-neutral-700 max-w-[400px] w-full">
                    <div class="p-6 text-center">
                        <span class="mb-4 text-[40px] line-height-1 text-danger-600">
                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                        </span>
                        <h6 class="text-lg font-semibold text-neutral-600 dark:text-neutral-200 mb-0">Are your sure you want to delete this event</h6>
                        <div class="flex items-center justify-center gap-3 mt-6">
                            <button type="reset" data-modal-hide="delete-popup-modal" class="w-1/2 border border-danger-600 hover:bg-danger-100 text-danger-600 text-base px-10 py-[11px] rounded-lg">
                                Cancel
                            </button>
                            <button type="button" class="w-1/2 btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>

@endsection
