@extends('layout.layout')

@php
    $title='Radio';
    $subTitle = 'Components / Radio';
    $script = '<script>
    // =============================== Upload Single Image js start here ================================================
    const fileInput = document.getElementById("upload-file");
    const imagePreview = document.getElementById("uploaded-img__preview");
    const uploadedImgContainer = document.querySelector(".uploaded-img");
    const removeButton = document.querySelector(".uploaded-img__remove");

    fileInput.addEventListener("change", (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            imagePreview.src = src;
            uploadedImgContainer.classList.remove("hidden");
        }
    });
    removeButton.addEventListener("click", () => {
        imagePreview.src = "";
        uploadedImgContainer.classList.add("hidden");
        fileInput.value = "";
    });
    // =============================== Upload Single Image js End here ================================================

    // ================================================ Upload Multiple image js Start here ================================================
    const fileInputMultiple = document.getElementById("upload-file-multiple");
    const uploadedImgsContainer = document.querySelector(".uploaded-imgs-container");

    fileInputMultiple.addEventListener("change", (e) => {
        const files = e.target.files;

        Array.from(files).forEach(file => {
            const src = URL.createObjectURL(file);

            const imgContainer = document.createElement("div");
            imgContainer.classList.add("position-relative", "h-120-px", "w-120-px", "border", "input-form-light", "radius-8", "overflow-hidden", "border-dashed", "bg-neutral-50");

            const removeButton = document.createElement("button");
            removeButton.type = "button";
            removeButton.classList.add("uploaded-img__remove", "position-absolute", "top-0", "end-0", "z-1", "text-2xxl", "line-height-1", "me-8", "mt-8", "d-flex");
            removeButton.innerHTML = "<iconify-icon icon=\'radix-icons:cross-2\' class=\'text-xl text-danger-600\'></iconify-icon>";

            const imagePreview = document.createElement("img");
            imagePreview.classList.add("w-100", "h-100", "object-fit-cover");
            imagePreview.src = src;

            imgContainer.appendChild(removeButton);
            imgContainer.appendChild(imagePreview);
            uploadedImgsContainer.appendChild(imgContainer);

            removeButton.addEventListener("click", () => {
                URL.revokeObjectURL(src);
                imgContainer.remove();
            });
        });

        // Clear the file input so the same file(s) can be uploaded again if needed
        fileInputMultiple.value = "";
    });
    // ================================================ Upload Multiple image js End here  ================================================

    // ================================================ Upload image & show it\'s name js start  ================================================
    document.getElementById("file-upload-name").addEventListener("change", function(event) {
        var fileInput = event.target;
        var fileList = fileInput.files;
        var ul = document.getElementById("uploaded-img-names");

        // Add show-uploaded-img-name class to the ul element if not already added
        ul.classList.add("show-uploaded-img-name");

        // Append each uploaded file name as a list item with Font Awesome and Iconify icons
        for (var i = 0; i < fileList.length; i++) {
            var li = document.createElement("li");
            li.classList.add("uploaded-image-name-list", "text-primary-600", "fw-semibold", "d-flex", "align-items-center", "gap-2");

            // Create the Link Iconify icon element
            var iconifyIcon = document.createElement("iconify-icon");
            iconifyIcon.setAttribute("icon", "ph:link-break-light");
            iconifyIcon.classList.add("text-xl", "text-secondary-light");

            // Create the Cross Iconify icon element
            var crossIconifyIcon = document.createElement("iconify-icon");
            crossIconifyIcon.setAttribute("icon", "radix-icons:cross-2");
            crossIconifyIcon.classList.add("remove-image", "text-xl", "text-secondary-light", "text-hover-danger-600");

            // Add event listener to remove the image on click
            crossIconifyIcon.addEventListener("click", (function(liToRemove) {
                return function() {
                    ul.removeChild(liToRemove); // Remove the corresponding list item
                };
            })(li)); // Pass the current list item as a parameter to the closure

            // Append both icons to the list item
            li.appendChild(iconifyIcon);

            // Append the file name text to the list item
            li.appendChild(document.createTextNode(" " + fileList[i].name));

            li.appendChild(crossIconifyIcon);

            // Append the list item to the unordered list
            ul.appendChild(li);
        }
    });
    // ================================================ Upload image & show it\'s name js end ================================================
                </script>';
@endphp

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Basic Upload</h6>
            </div>
            <div class="card-body p-6">
                <label for="basic-upload" class="border border-primary-600 font-medium text-primary-600 px-4 py-3 rounded-xl inline-flex items-center gap-2 cursor-pointer hover:bg-primary-50">
                    <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                    Click to upload
                </label>
                <input type="file" id="basic-upload" class="block w-full text-sm  text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 mt-6">
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Image Upload</h6>
            </div>
            <div class="card-body p-6">
                <div class="upload-image-wrapper flex items-center gap-3">
                    <div class="uploaded-img hidden relative h-[120px] w-[120px] border input-form-light rounded-lg overflow-hidden border-dashed bg-neutral-50 dark:bg-neutral-600">
                        <button type="button" class="uploaded-img__remove absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-2 flex">
                            <iconify-icon icon="radix-icons:cross-2" class="text-xl text-danger-600"></iconify-icon>
                        </button>
                        <img id="uploaded-img__preview" class="w-full h-full object-fit-cover" src="{{ asset('assets/images/user.png') }}" alt="image">
                    </div>

                    <label class="upload-file h-[120px] w-[120px] border input-form-light rounded-lg overflow-hidden border-dashed bg-neutral-50 dark:bg-neutral-600 hover:bg-neutral-200 flex items-center flex-col justify-center gap-1" for="upload-file">
                        <iconify-icon icon="solar:camera-outline" class="text-xl text-secondary-light"></iconify-icon>
                        <span class="font-semibold text-secondary-light">Upload</span>
                        <input id="upload-file" type="file" hidden>
                    </label>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Upload With image preview</h6>
            </div>
            <div class="card-body p-6">
                <div class="upload-image-wrapper flex items-center gap-3 flex-wrap">
                    <div class="uploaded-imgs-container flex gap-3 flex-wrap"></div>
                    <label class="upload-file-multiple h-[120px] w-[120px] border input-form-light rounded-lg overflow-hidden border-dashed bg-neutral-50 dark:bg-neutral-600 hover:bg-neutral-200 flex items-center flex-col justify-center gap-1" for="upload-file-multiple">
                        <iconify-icon icon="solar:camera-outline" class="text-xl text-secondary-light"></iconify-icon>
                        <span class="font-semibold text-secondary-light">Upload</span>
                        <input id="upload-file-multiple" type="file" hidden multiple>
                    </label>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Upload With image preview</h6>
            </div>
            <div class="card-body p-6">
                <label for="file-upload-name" class="mb-4 border border-neutral-600 font-medium text-secondary-light px-4 py-3 rounded-xl inline-flex items-center gap-2 hover:bg-neutral-200">
                    <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                    Click to upload
                    <input type="file" class="form-control w-auto mt-6 form-control-lg" id="file-upload-name" multiple hidden>
                </label>
                <ul id="uploaded-img-names" class=""></ul>
            </div>
        </div>
    </div>
    
@endsection