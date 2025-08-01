@extends('layout.layout')

@php
    $title='Chat';
    $subTitle = 'Components / Chat';
@endphp

@section('content')

    <div class="chat-wrapper">
        <div class="chat-sidebar card">
            <div class="chat-sidebar-single active top-profile">
                <div class="img">
                    <img src="{{ asset('assets/images/chat/1.png') }}" alt="image">
                </div>
                <div class="info">
                    <h6 class="text-base mb-0">Kathryn Murphy</h6>
                    <p class="mb-0">Available</p>
                </div>
                <div class="action">
                    <div class="btn-group">
                        <button type="button" class="text-secondary-light text-xl" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <iconify-icon icon="bi:three-dots"></iconify-icon>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end border">
                            <li>
                                <a href="{{ route('chatProfile') }}" class="dropdown-item rounded text-secondary-light hover:bg-neutral-200 text-hover-neutral-900">
                                    <iconify-icon icon="fluent:person-32-regular"></iconify-icon>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('chatProfile') }}" class="dropdown-item rounded text-secondary-light hover:bg-neutral-200 text-hover-neutral-900">
                                    <iconify-icon icon="carbon:settings"></iconify-icon>
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- chat-sidebar-single end -->
            <div class="chat-search">
                <span class="icon">
                    <iconify-icon icon="iconoir:search"></iconify-icon>
                </span>
                <input type="text" name="#0" autocomplete="off" placeholder="Search...">
            </div>
            <div class="chat-all-list">
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/2.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Kathryn Murphy</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/3.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">James Michael</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/4.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Russell Lucas</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/5.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Caleb Bradley</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/6.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Bobby Roy</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/7.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Vincent Liam</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/8.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Randy Mason</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/9.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Albert Wayne</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/10.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Elijah Willie</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/2.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Kathryn Murphy</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/3.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">James Michael</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/4.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Russell Lucas</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/5.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Caleb Bradley</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/6.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Bobby Roy</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/7.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Vincent Liam</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/8.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Randy Mason</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/9.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Albert Wayne</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class="chat-sidebar-single active">
                    <div class="img">
                        <img src="{{ asset('assets/images/chat/10.png') }}" alt="image">
                    </div>
                    <div class="info">
                        <h6 class="text-sm mb-1">Elijah Willie</h6>
                        <p class="mb-0 text-xs">hey! there i'm...</p>
                    </div>
                    <div class="action text-end">
                        <p class="mb-0 text-neutral-400 text-xs lh-1">12:30 PM</p>
                        <span class="w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center">8</span>
                    </div>
                </div><!-- chat-sidebar-single end -->
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
            <div class="chat-empty">
                <div class="text-center">
                    <img src="{{ asset('assets/images/chat/empty-img.png') }}" alt="image">
                    <h6 class="mb-1 mt-4">Empty, Message...</h6>
                    <p class="mb-0 text-sm">don't worry, just take a deep breath & say "Hello"</p>
                </div>
            </div>
        </div>
    </div>

@endsection