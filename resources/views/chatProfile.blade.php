@extends('layout.layout')

@php
    $title='Chat';
    $subTitle = 'Chat';
@endphp

@section('content')

    <div class="chat-wrapper">
        <div class="chat-sidebar profile-setting card">
            <div class="text-end">
                <a href="{{ route('chatMessage') }}"><iconify-icon icon="akar-icons:cross"></iconify-icon></a>
            </div>
            <div class="chat-600-profile">
                <div class="img">
                    <img src="{{ asset('assets/images/chat/chat-600.png') }}" alt="image">
                </div>
                <div class="text-center">
                    <h6 class="text-base mb-0">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm">Admin</p>
                </div>
            </div>
            <div class="mt-6">
                <label class="inline-block">About Me</label>
                <textarea name="about" class="form-control" placeholder="Write some description"></textarea>
            </div>

            <div class="mt-6">
                <ul class="flex flex-col gap-1">
                    <li class="flex flex-wrap items-center justify-between">
                        <span class="inline-flex gap-2 items-center">
                            <iconify-icon icon="mingcute:location-line" class="text-lg"></iconify-icon>
                            Location
                        </span>
                        <span class="text-neutral-600 dark:text-neutral-200">United State</span>
                    </li>
                    <li class="flex flex-wrap items-center justify-between">
                        <span class="inline-flex gap-2 items-center">
                            <iconify-icon icon="fluent:person-24-regular" class="text-lg"></iconify-icon>
                            Member since
                        </span>
                        <span class="text-neutral-600 dark:text-neutral-200">25 Jan 2025</span>
                    </li>
                    <li class="flex flex-wrap items-center justify-between">
                        <span class="inline-flex gap-2 items-center">
                            <iconify-icon icon="cil:language" class="text-lg"></iconify-icon>
                            Language
                        </span>
                        <span class="text-neutral-600 dark:text-neutral-200">English</span>
                    </li>
                </ul>
            </div>

            <div class="mt-6">
                <h6 class="text-lg">Status</h6>

                <div class="flex flex-col gap-1">
                    <div class="form-check flex items-center">
                        <input class="form-check-input" type="radio" name="status" id="status1" checked>
                        <label class="form-check-label" for="status1">
                            Active
                        </label>
                    </div>
                    <div class="form-check flex items-center">
                        <input class="form-check-input" type="radio" name="status" id="status2">
                        <label class="form-check-label" for="status2">
                            Do Not Disturb
                        </label>
                    </div>
                    <div class="form-check flex items-center">
                        <input class="form-check-input" type="radio" name="status" id="status3">
                        <label class="form-check-label" for="status3">
                            Away
                        </label>
                    </div>
                    <div class="form-check flex items-center">
                        <input class="form-check-input" type="radio" name="status" id="status4">
                        <label class="form-check-label" for="status4">
                            Offline
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-600 card">
            <div class="chat-sidebar-single active">
                <div class="img">
                    <img src="{{ asset('assets/images/chat/11.png') }}" alt="image">
                </div>
                <div class="info">
                    <h6 class="text-base mb-0">Kathryn Murphy</h6>
                    <p class="mb-0">Available</p>
                </div>
                <div class="action inline-flex items-center gap-3">
                    <button type="button" class="text-xl text-neutral-600 dark:text-neutral-200">
                        <iconify-icon icon="mi:call"></iconify-icon>
                    </button>
                    <button type="button" class="text-xl text-neutral-600 dark:text-neutral-200">
                        <iconify-icon icon="fluent:video-32-regular"></iconify-icon>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="text-neutral-600 dark:text-neutral-200 text-xl" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <iconify-icon icon="tabler:dots-vertical"></iconify-icon>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end border">
                            <li>
                                <button class="dropdown-item rounded text-secondary-light hover:bg-neutral-200 text-hover-neutral-900" type="button">
                                    <iconify-icon icon="mdi:clear-circle-outline"></iconify-icon>
                                    Clear All
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item rounded text-secondary-light hover:bg-neutral-200 text-hover-neutral-900" type="button">
                                    <iconify-icon icon="ic:baseline-block"></iconify-icon>
                                    Block
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- chat-sidebar-single end -->
            <div class="chat-message-list">
                <div class="chat-single-message left">
                    <img src="{{ asset('assets/images/chat/11.png') }}" alt="image" class="avatar-lg object-fit-cover rounded-full">
                    <div class="chat-message-content">
                        <p class="mb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                        <p class="chat-time mb-0">
                            <span>6.30 pm</span>
                        </p>
                    </div>
                </div><!-- chat-single-message end -->
                <div class="chat-single-message right">
                    <div class="chat-message-content">
                        <p class="mb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                        <p class="chat-time mb-0">
                            <span>6.30 pm</span>
                        </p>
                    </div>
                </div><!-- chat-single-message end -->
                <div class="chat-single-message left">
                    <img src="{{ asset('assets/images/chat/11.png') }}" alt="image" class="avatar-lg object-fit-cover rounded-full">
                    <div class="chat-message-content">
                        <p class="mb-3">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default.Contrary to popular belief, Lorem Ipsum is not simply random text is the model text for your company.</p>
                        <p class="chat-time mb-0">
                            <span>6.30 pm</span>
                        </p>
                    </div>
                </div><!-- chat-single-message end -->
            </div>
            <form class="chat-message-box">
                <input type="text" name="chatMessage" placeholder="Write message">
                <div class="chat-message-box-action">
                    <button type="button" class="text-xl">
                        <iconify-icon icon="ph:link"></iconify-icon>
                    </button>
                    <button type="button" class="text-xl">
                        <iconify-icon icon="solar:gallery-linear"></iconify-icon>
                    </button>
                    <button type="submit" class="btn btn-sm btn-primary-600 rounded-lg inline-flex items-center gap-1">
                        Send
                        <iconify-icon icon="f7:paperplane"></iconify-icon>
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection