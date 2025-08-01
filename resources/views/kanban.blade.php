@extends('layout.layout')

@php
$title='Kanban';
$subTitle = 'Kanban';   
$script = '<script>
            $(function() {
                $("#sortable-wrapper").sortable();
            });

            $(function() {
                $("#sortable1, #sortable2, #sortable3").sortable({
                    connectWith: ".connectedSortable"
                }).disableSelection();
            });
            </script>

            <!--=========================== Delete & Duplicate js code start ==============================-->
            <script>
            // Duplicate Item js
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelectorAll(".duplicate-button").forEach(button => {
                    button.addEventListener("click", function() {
                        // Find the closest card to the clicked button
                        const card = this.closest(".kanban-item");
                        // Clone the card
                        const clone = card.cloneNode(true);
                        // Append the cloned card to the parent container
                        card.parentNode.appendChild(clone);

                        // Add event listener to delete button of the cloned card
                        clone.querySelector(".delete-button").addEventListener("click", function() {
                            clone.remove();
                        });
                    });
                });

                $(document).on("click", ".delete-button", function() {
                    $(this).closest(".kanban-item").addClass("hidden");
                });
            });
            </script>
            <!--=========================== Delete & Duplicate js code End ==============================-->

            <!--=========================== Add new Task & Edit Task js code Start ==============================-->
            <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Show the modal to add a new task
                document.querySelectorAll(".add-kanban, .add-task-button").forEach(button => {
                    button.addEventListener("click", function() {
                        var addTaskModal = new bootstrap.Modal(document.getElementById("addTaskModal"));
                        document.getElementById("editTaskId").value = ""; // Clear edit ID
                        document.getElementById("taskTitle").value = ""; // Clear title
                        document.getElementById("taskDescription").value = ""; // Clear description
                        document.getElementById("taskTag").value = ""; // Clear Tag
                        document.getElementById("startDate").value = ""; // Clear Date
                        document.getElementById("taskImage").value = ""; // Clear file input
                        document.getElementById("taskImagePreview").style.display = "none"; // Hide image preview
                        document.getElementById("taskImagePreview").src = ""; // Clear image preview
                        addTaskModal.show();
                    });
                });

                // Preview the image when a file is selected
                document.getElementById("taskImage").addEventListener("change", function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById("taskImagePreview").src = e.target.result;
                        document.getElementById("taskImagePreview").style.display = "block";
                    };
                    if (file) {
                        reader.readAsDataURL(file);
                    }
                });

                // Save task button click handler
                document.getElementById("saveTaskButton").addEventListener("click", function() {
                    var title = document.getElementById("taskTitle").value;
                    var description = document.getElementById("taskDescription").value;
                    var tag = document.getElementById("taskTag").value;
                    var date = document.getElementById("startDate").value;
                    var editTaskId = document.getElementById("editTaskId").value;
                    var imageSrc = document.getElementById("taskImagePreview").src;

                    if (title === "" || description === "") {
                        alert("Title and Description cannot be empty");
                        return;
                    }

                    var kanbanCardHTML = `
                                                <div class="kanban-card bg-neutral-50 p-16 radius-8 mb-24" id="${editTaskId ? editTaskId : "kanban-" + new Date().getTime()}">
                                                    ${imageSrc ? `<div class="radius-8 mb-12 max-h-350-px overflow-hidden"><img src="${imageSrc}" alt="" class="w-100 h-100 object-fit-cover"></div>` : ""}
                                                    <h6 class="kanban-title text-lg fw-semibold mb-8">${title}</h6>
                                                    <p class="kanban-desc text-secondary-light">${description}</p>
                                                    <button type="button" class="start-date btn text-primary-600 border rounded border-primary-600 bg-hover-primary-600 text-hover-white d-flex align-items-center gap-2">
                                                        <iconify-icon icon="lucide:tag" class="icon"></iconify-icon> <span class="kanban-tag fw-semibold">${tag}</span>
                                                    </button>
                                                    <div class="mt-12 d-flex align-items-center justify-content-between gap-10">
                                                        <div class="d-flex align-items-center justify-content-between gap-10">
                                                            <iconify-icon icon="solar:calendar-outline" class="text-primary-light"></iconify-icon>
                                                            <span class="start-date text-secondary-light">${date}</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between gap-10">
                                                            <button type="button" class="card-edit-button text-success-600"><iconify-icon icon="lucide:edit" class="icon text-lg line-height-1"></iconify-icon></button>
                                                            <button type="button" class="card-delete-button text-danger-600"><iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            `;

                    if (editTaskId) {
                        // Edit existing card
                        var editCard = document.getElementById(editTaskId);
                        if (editCard) {
                            editCard.outerHTML = kanbanCardHTML;
                        }
                    } else {
                        // Add new card
                        var targetKanbanItem = document.querySelector(".kanban-item");
                        if (targetKanbanItem) {
                            var firstKanbanCard = targetKanbanItem.querySelector(".card-body .kanban-card");
                            if (firstKanbanCard) {
                                firstKanbanCard.insertAdjacentHTML("beforebegin", kanbanCardHTML);
                            } else {
                                targetKanbanItem.querySelector(".card-body").insertAdjacentHTML("afterbegin", kanbanCardHTML);
                            }
                        }
                    }

                    var addTaskModal = bootstrap.Modal.getInstance(document.getElementById("addTaskModal"));
                    addTaskModal.hide();
                });

                // Delegate edit and delete button events to dynamically added kanban cards
                document.addEventListener("click", function(e) {
                    if (e.target.closest(".card-edit-button")) {
                        var card = e.target.closest(".kanban-card");
                        document.getElementById("taskTitle").value = card.querySelector(".kanban-title").textContent;
                        document.getElementById("taskDescription").value = card.querySelector(".kanban-desc").textContent;
                        document.getElementById("taskTag").value = card.querySelector(".kanban-tag").textContent;
                        document.getElementById("startDate").value = card.querySelector(".start-date").textContent;
                        document.getElementById("editTaskId").value = card.id;
                        var img = card.querySelector("img");
                        if (img) {
                            document.getElementById("taskImagePreview").src = img.src;
                            document.getElementById("taskImagePreview").style.display = "block";
                        } else {
                            document.getElementById("taskImagePreview").style.display = "none";
                            document.getElementById("taskImagePreview").src = "";
                        }

                        var addTaskModal = new bootstrap.Modal(document.getElementById("addTaskModal"));
                        addTaskModal.show();
                    }
                    if (e.target.closest(".card-delete-button")) {
                        var card = e.target.closest(".kanban-card");
                        if (card) {
                            card.remove();
                        }
                    }
                });
            });
            </script>';
@endphp

@section('content')

        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="overflow-x-auto scroll-sm pb-8">
                    <div class="kanban-wrapper min-w-[1560px]">
                        <div class="flex items-start gap-6" id="sortable-wrapper">
                            <div class="w-[25%] kanban-item rounded-xl progress-card">
                                <div class="card p-0 rounded-xl overflow-hidden shadow-none border-0">
                                    <div class="card-body p-0 pb-6">
                                        <div class="flex items-center gap-2 justify-between ps-6 pt-6 pe-6">
                                            <h6 class="text-lg font-semibold mb-0">In Progress</h6>
                                            <div class="flex items-center gap-3 justify-between mb-0">
                                                <button type="button" class="text-2xl hover-text-primary add-task-button flex" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                                    <iconify-icon icon="ph:plus-circle" class="icon"></iconify-icon>
                                                </button>
                                                <div class="dropdown">
                                                    <button data-dropdown-toggle="dropdown1" class="text-neutral-800 flex text-lg dark:text-white" type="button">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>

                                                    <div id="dropdown1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700">
                                                        <ul class="p-2 text-sm text-gray-700 dark:text-gray-200">
                                                            <li>
                                                                <button type="submit" class="w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2 duplicate-button">
                                                                    <iconify-icon class="text-xl" icon="humbleicons:duplicate"></iconify-icon>
                                                                    Duplicate
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2 delete-button">
                                                                    <iconify-icon class="text-xl" icon="mingcute:delete-2-line"></iconify-icon>
                                                                    Delete
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="connectedSortable ps-6 pt-6 pe-6" id="sortable1">
                                            <div class="kanban-card bg-neutral-50 dark:bg-dark-3 p-4 rounded-lg mb-6" id="kanban-1">
                                                <div class="rounded-lg mb-3 max-h-[350px] overflow-hidden">
                                                    <img src="{{ asset('assets/images/kanban/kanban-1.png') }}" alt="" class="w-full h-full object-fit-cover">
                                                </div>
                                                <h6 class="kanban-title text-lg font-semibold mb-2">Creating a new website</h6>
                                                <p class="kanban-desc text-secondary-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                                <button type="button" class="btn text-primary-600 border rounded border-primary-600 bg-hover-primary-600 text-hover-white flex items-center gap-2 my-3">
                                                    <iconify-icon icon="lucide:tag" class="icon"></iconify-icon>
                                                    <span class="kanban-tag font-semibold">UI Design</span>
                                                </button>
                                                <div class="mt-3 flex items-center justify-between gap-2.5">
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <iconify-icon icon="solar:calendar-outline" class="text-neutral-600 dark:text-neutral-200"></iconify-icon>
                                                        <span class="start-date text-secondary-light">25 Aug 2024</span>
                                                    </div>
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <button type="button" class="card-edit-button text-success-600" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                                            <iconify-icon icon="lucide:edit" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                        <button type="button" class="card-delete-button text-danger-600">
                                                            <iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kanban-card bg-neutral-50 dark:bg-dark-3 p-4 rounded-lg mb-6" id="kanban-2">
                                                <div class="rounded-lg mb-3 max-h-[350px] overflow-hidden">
                                                    <img src="{{ asset('assets/images/kanban/kanban-2.png') }}" alt="" class="w-full h-full object-fit-cover">
                                                </div>
                                                <h6 class="kanban-title text-lg font-semibold mb-2">Creating a new website</h6>
                                                <p class="kanban-desc text-secondary-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                                <button type="button" class="btn text-primary-600 border rounded border-primary-600 bg-hover-primary-600 text-hover-white flex items-center gap-2 my-3">
                                                    <iconify-icon icon="lucide:tag" class="icon"></iconify-icon>
                                                    <span class="kanban-tag font-semibold">UI Design</span>
                                                </button>
                                                <div class="mt-3 flex items-center justify-between gap-2.5">
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <iconify-icon icon="solar:calendar-outline" class="text-neutral-600 dark:text-neutral-200"></iconify-icon>
                                                        <span class="start-date text-secondary-light">25 Aug 2024</span>
                                                    </div>
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <button type="button" class="card-edit-button text-success-600" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                                            <iconify-icon icon="lucide:edit" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                        <button type="button" class="card-delete-button text-danger-600">
                                                            <iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Task Button -->
                                        <button type="button" class="flex items-center gap-2 font-medium w-full text-primary-600 justify-center text-hover-primary-800 add-task-button" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                            <iconify-icon icon="ph:plus-circle" class="icon text-xl"></iconify-icon>
                                            Add Task
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-[25%] kanban-item rounded-xl pending-card">
                                <div class="card p-0 rounded-xl overflow-hidden shadow-none border-0">
                                    <div class="card-body p-0 pb-6">
                                        <div class="flex items-center gap-2 justify-between ps-6 pt-6 pe-6">
                                            <h6 class="text-lg font-semibold mb-0">Pending</h6>
                                            <div class="flex items-center gap-3 justify-between mb-0">
                                                <button type="button" class="text-2xl hover-text-primary add-task-button flex" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                                    <iconify-icon icon="ph:plus-circle" class="icon"></iconify-icon>
                                                </button>
                                                <div class="dropdown">
                                                    <button data-dropdown-toggle="dropdown2" class="text-neutral-800 flex text-lg dark:text-white" type="button">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>

                                                    <div id="dropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700">
                                                        <ul class="p-2 text-sm text-gray-700 dark:text-gray-200">
                                                            <li>
                                                                <button type="submit" class="w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2">
                                                                    <iconify-icon class="text-xl" icon="humbleicons:duplicate"></iconify-icon>
                                                                    Duplicate
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2">
                                                                    <iconify-icon class="text-xl" icon="mingcute:delete-2-line"></iconify-icon>
                                                                    Delete
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="connectedSortable ps-6 pt-6 pe-6" id="sortable2">
                                            <div class="kanban-card bg-neutral-50 dark:bg-dark-3 p-4 rounded-lg mb-6" id="kanban-3">
                                                <h6 class="kanban-title text-lg font-semibold mb-2">Creating a new website</h6>
                                                <p class="kanban-desc text-secondary-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                                <button type="button" class="btn text-primary-600 border rounded border-primary-600 bg-hover-primary-600 text-hover-white flex items-center gap-2 my-3">
                                                    <iconify-icon icon="lucide:tag" class="icon"></iconify-icon>
                                                    <span class="kanban-tag font-semibold">UI Design</span>
                                                </button>
                                                <div class="mt-3 flex items-center justify-between gap-2.5">
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <iconify-icon icon="solar:calendar-outline" class="text-neutral-600 dark:text-neutral-200"></iconify-icon>
                                                        <span class="start-date text-secondary-light">25 Aug 2024</span>
                                                    </div>
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <button type="button" class="card-edit-button text-success-600" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                                            <iconify-icon icon="lucide:edit" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                        <button type="button" class="card-delete-button text-danger-600">
                                                            <iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kanban-card bg-neutral-50 dark:bg-dark-3 p-4 rounded-lg mb-6" id="kanban-4">
                                                <div class="rounded-lg mb-3 max-h-[350px] overflow-hidden">
                                                    <img src="{{ asset('assets/images/kanban/kanban-2.png') }}" alt="" class="w-full h-full object-fit-cover">
                                                </div>
                                                <h6 class="kanban-title text-lg font-semibold mb-2">Creating a new website</h6>
                                                <p class="kanban-desc text-secondary-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                                <button type="button" class="btn text-primary-600 border rounded border-primary-600 bg-hover-primary-600 text-hover-white flex items-center gap-2 my-3">
                                                    <iconify-icon icon="lucide:tag" class="icon"></iconify-icon>
                                                    <span class="kanban-tag font-semibold">UI Design</span>
                                                </button>
                                                <div class="mt-3 flex items-center justify-between gap-2.5">
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <iconify-icon icon="solar:calendar-outline" class="text-neutral-600 dark:text-neutral-200"></iconify-icon>
                                                        <span class="start-date text-secondary-light">25 Aug 2024</span>
                                                    </div>
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <button type="button" class="card-edit-button text-success-600" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                                            <iconify-icon icon="lucide:edit" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                        <button type="button" class="card-delete-button text-danger-600">
                                                            <iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Task Button -->
                                        <button type="button" class="flex items-center gap-2 font-medium w-full text-primary-600 justify-center text-hover-primary-800 add-task-button" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                            <iconify-icon icon="ph:plus-circle" class="icon text-xl"></iconify-icon>
                                            Add Task
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-[25%] kanban-item rounded-xl done-card">
                                <div class="card p-0 rounded-xl overflow-hidden shadow-none border-0">
                                    <div class="card-body p-0 pb-6">
                                        <div class="flex items-center gap-2 justify-between ps-6 pt-6 pe-6">
                                            <h6 class="text-lg font-semibold mb-0">Done</h6>
                                            <div class="flex items-center gap-3 justify-between mb-0">
                                                <button type="button" class="text-2xl hover-text-primary add-task-button flex" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                                    <iconify-icon icon="ph:plus-circle" class="icon"></iconify-icon>
                                                </button>
                                                <div class="dropdown">
                                                    <button data-dropdown-toggle="dropdown3" class="text-neutral-800 flex text-lg dark:text-white" type="button">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>

                                                    <div id="dropdown3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700">
                                                        <ul class="p-2 text-sm text-gray-700 dark:text-gray-200">
                                                            <li>
                                                                <button type="submit" class="w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2">
                                                                    <iconify-icon class="text-xl" icon="humbleicons:duplicate"></iconify-icon>
                                                                    Duplicate
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2">
                                                                    <iconify-icon class="text-xl" icon="mingcute:delete-2-line"></iconify-icon>
                                                                    Delete
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="connectedSortable ps-6 pt-6 pe-6" id="sortable3">
                                            <div class="kanban-card bg-neutral-50 dark:bg-dark-3 p-4 rounded-lg mb-6" id="kanban-5">
                                                <h6 class="kanban-title text-lg font-semibold mb-2">Creating a new website</h6>
                                                <p class="kanban-desc text-secondary-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                                <button type="button" class="btn text-primary-600 border rounded border-primary-600 bg-hover-primary-600 text-hover-white flex items-center gap-2 my-3">
                                                    <iconify-icon icon="lucide:tag" class="icon"></iconify-icon>
                                                    <span class="kanban-tag font-semibold">UI Design</span>
                                                </button>
                                                <div class="mt-3 flex items-center justify-between gap-2.5">
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <iconify-icon icon="solar:calendar-outline" class="text-neutral-600 dark:text-neutral-200"></iconify-icon>
                                                        <span class="start-date text-secondary-light">25 Aug 2024</span>
                                                    </div>
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <button type="button" class="card-edit-button text-success-600" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                                            <iconify-icon icon="lucide:edit" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                        <button type="button" class="card-delete-button text-danger-600">
                                                            <iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kanban-card bg-neutral-50 dark:bg-dark-3 p-4 rounded-lg mb-6" id="kanban-6">
                                                <h6 class="kanban-title text-lg font-semibold mb-2">Creating a new website</h6>
                                                <p class="kanban-desc text-secondary-light">Lorem ipsum dolor sit amet, consectetur </p>
                                                <button type="button" class="btn text-primary-600 border rounded border-primary-600 bg-hover-primary-600 text-hover-white flex items-center gap-2 my-3">
                                                    <iconify-icon icon="lucide:tag" class="icon"></iconify-icon>
                                                    <span class="kanban-tag font-semibold">UI Design</span>
                                                </button>
                                                <div class="mt-3 flex items-center justify-between gap-2.5">
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <iconify-icon icon="solar:calendar-outline" class="text-neutral-600 dark:text-neutral-200"></iconify-icon>
                                                        <span class="start-date text-secondary-light">25 Aug 2024</span>
                                                    </div>
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <button type="button" class="card-edit-button text-success-600" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                                            <iconify-icon icon="lucide:edit" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                        <button type="button" class="card-delete-button text-danger-600">
                                                            <iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kanban-card bg-neutral-50 dark:bg-dark-3 p-4 rounded-lg mb-6" id="kanban-7">
                                                <div class="rounded-lg mb-3 max-h-[350px] overflow-hidden">
                                                    <img src="{{ asset('assets/images/kanban/kanban-2.png') }}" alt="" class="w-full h-full object-fit-cover">
                                                </div>
                                                <h6 class="kanban-title text-lg font-semibold mb-2">Creating a new website</h6>
                                                <p class="kanban-desc text-secondary-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                                <button type="button" class="btn text-primary-600 border rounded border-primary-600 bg-hover-primary-600 text-hover-white flex items-center gap-2 my-3">
                                                    <iconify-icon icon="lucide:tag" class="icon"></iconify-icon>
                                                    <span class="kanban-tag font-semibold">UI Design</span>
                                                </button>
                                                <div class="mt-3 flex items-center justify-between gap-2.5">
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <iconify-icon icon="solar:calendar-outline" class="text-neutral-600 dark:text-neutral-200"></iconify-icon>
                                                        <span class="start-date text-secondary-light">25 Aug 2024</span>
                                                    </div>
                                                    <div class="flex items-center justify-between gap-2.5">
                                                        <button type="button" class="card-edit-button text-success-600" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                                            <iconify-icon icon="lucide:edit" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                        <button type="button" class="card-delete-button text-danger-600">
                                                            <iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Add Task Button -->
                                        <button type="button" class="flex items-center gap-2 font-medium w-full text-primary-600 justify-center text-hover-primary-800 add-task-button" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                            <iconify-icon icon="ph:plus-circle" class="icon text-xl"></iconify-icon>
                                            Add Task
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-[25%] kanban-item rounded-xl overflow-hidden">
                                <div class="card p-0 rounded-xl overflow-hidden shadow-none border-0">
                                    <div class="card-body p-6">
                                        <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal" class="add-kanban flex items-center gap-2 font-medium w-full text-primary-600 justify-center text-hover-primary-800 line-height-1">
                                            <iconify-icon icon="ph:plus-circle" class="icon text-xl flex"></iconify-icon>
                                            Add Task
                                        </button>
                                        <!-- Modal toggle -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-dark-2">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white"> Add New Task </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                        <form id="taskForm">
                            <input type="hidden" id="editTaskId" value="">
                            <div class="mb-3">
                                <label for="taskTitle" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Title</label>
                                <input type="text" class="form-control" placeholder="Enter Event Title " id="taskTitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="taskTag" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Tag</label>
                                <input type="text" class="form-control" placeholder="Enter tag" id="taskTag" required>
                            </div>
                            <div class="mb-3">
                                <label for="startDate" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Start Date</label>
                                <input type="date" class="form-control" id="startDate" required>
                            </div>
                            <div class="mb-3">
                                <label for="taskDescription" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Description</label>
                                <textarea class="form-control" id="taskDescription" rows="3" placeholder="Write some text" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="taskImage" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Attachments <span class="text-sm">(Jpg, Png format)</span> </label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="taskImage" type="file">
                                <img id="taskImagePreview" src="{{ asset('assets/images/carousel/carousel-img1.png') }}" alt="Image Preview">
                            </div>
                        </form>
                    </div>
                    <div class="flex items-center gap-4 p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="button" data-modal-hide="default-modal" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-base px-[50px] py-[11px] rounded-lg" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary border border-primary-600 text-base px-7 py-3 rounded-lg" id="saveTaskButton">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>

@endsection



