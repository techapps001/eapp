<div class="navbar-header border-b border-neutral-200 dark:border-neutral-600">
    <div class="flex items-center justify-between">
        <div>
            <div class="flex flex-wrap items-center gap-4">
                <button type="button" class="sidebar-toggle">
                    <iconify-icon icon="heroicons:bars-3-solid" class="icon non-active"></iconify-icon>
                    <iconify-icon icon="iconoir:arrow-right" class="icon active"></iconify-icon>
                </button>
                <button type="button" class="sidebar-mobile-toggle flex leading-none">
                    <iconify-icon icon="heroicons:bars-3-solid" class="icon text-[30px]"></iconify-icon>
                </button>
                <form class="navbar-search">
                    <input type="text" name="search" placeholder="Search">
                    <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
                </form>
            </div>
        </div>
        <div>
            <div class="flex flex-wrap items-center gap-3">
                <button type="button" id="theme-toggle" class="w-10 h-10 bg-neutral-200 dark:bg-neutral-700 dark:text-white rounded-full flex justify-center items-center">
                    <span id="theme-toggle-dark-icon" class="hidden">
                        <i class="ri-sun-line"></i>
                    </span>
                    <span id="theme-toggle-light-icon" class="hidden">
                        <i class="ri-moon-line"></i>
                    </span>
                </button>

                <!-- Language Dropdown Start  -->
                <div class="hidden sm:inline-block">
                    <button data-dropdown-toggle="dropdownInformation" class="has-indicator w-10 h-10 bg-neutral-200 dark:bg-neutral-700 dark:text-white rounded-full flex justify-center items-center" type="button">
                        <img src="{{ asset('assets/images/lang-flag.png') }}" alt="image" class="w-6 h-6 object-cover rounded-full">
                    </button>
                    <div id="dropdownInformation" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-lg shadow-lg p-3">
                        <div class="py-3 px-4 rounded-lg bg-primary-50 dark:bg-primary-600/25 mb-4 flex items-center justify-between gap-2">
                            <div>
                                <h6 class="text-lg text-neutral-900 font-semibold mb-0">Choose Your Language</h6>
                            </div>
                        </div>
                        <div class="max-h-[400px] overflow-y-auto pe-2">
                            <div class="mt-4 flex flex-col gap-4">
                                <!-- English -->
                                <div class="flex items-center justify-between">
                                    <label class="font-medium text-secondary-light" for="english">
                                        <span class="text-black hover:bg-transparent hover:text-primary flex items-center gap-3">
                                            <img src="{{ asset('assets/images/flags/flag1.png') }}" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                                            <span class="text-base font-semibold mb-0">English</span>
                                        </span>
                                    </label>
                                    <input class="rounded-full" name="language" type="radio" id="english">
                                </div>
                                <!-- Japan -->
                                <div class="flex items-center justify-between">
                                    <label class="font-medium text-secondary-light" for="Japan">
                                        <span class="text-black hover:bg-transparent hover:text-primary flex items-center gap-3">
                                            <img src="{{ asset('assets/images/flags/flag2.png') }}" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                                            <span class="text-base font-semibold mb-0">Japan</span>
                                        </span>
                                    </label>
                                    <input class="rounded-full" name="language" type="radio" id="Japan">
                                </div>
                                <!-- Franch -->
                                <div class="flex items-center justify-between">
                                    <label class="font-medium text-secondary-light" for="Franch">
                                        <span class="text-black hover:bg-transparent hover:text-primary flex items-center gap-3">
                                            <img src="{{ asset('assets/images/flags/flag3.png') }}" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                                            <span class="text-base font-semibold mb-0">Franch</span>
                                        </span>
                                    </label>
                                    <input class="rounded-full" name="language" type="radio" id="Franch">
                                </div>
                                <!-- Germany -->
                                <div class="flex items-center justify-between">
                                    <label class="font-medium text-secondary-light" for="Germany">
                                        <span class="text-black hover:bg-transparent hover:text-primary flex items-center gap-3">
                                            <img src="{{ asset('assets/images/flags/flag4.png') }}" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                                            <span class="text-base font-semibold mb-0">Germany</span>
                                        </span>
                                    </label>
                                    <input class="rounded-full" name="language" type="radio" id="Germany">
                                </div>
                                <!-- South Koria -->
                                <div class="flex items-center justify-between">
                                    <label class="font-medium text-secondary-light" for="SouthKoria">
                                        <span class="text-black hover:bg-transparent hover:text-primary flex items-center gap-3">
                                            <img src="{{ asset('assets/images/flags/flag5.png') }}" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                                            <span class="text-base font-semibold mb-0">South Koria</span>
                                        </span>
                                    </label>
                                    <input class="rounded-full" name="language" type="radio" id="SouthKoria">
                                </div>
                                <!-- Bangladesh -->
                                <div class="flex items-center justify-between">
                                    <label class="font-medium text-secondary-light" for="Bangladesh">
                                        <span class="text-black hover:bg-transparent hover:text-primary flex items-center gap-3">
                                            <img src="{{ asset('assets/images/flags/flag6.png') }}" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                                            <span class="text-base font-semibold mb-0">Bangladesh</span>
                                        </span>
                                    </label>
                                    <input class="rounded-full" name="language" type="radio" id="Bangladesh">
                                </div>
                                <!-- India -->
                                <div class="flex items-center justify-between">
                                    <label class="font-medium text-secondary-light" for="India">
                                        <span class="text-black hover:bg-transparent hover:text-primary flex items-center gap-3">
                                            <img src="{{ asset('assets/images/flags/flag7.png') }}" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                                            <span class="text-base font-semibold mb-0">India</span>
                                        </span>
                                    </label>
                                    <input class="rounded-full" name="language" type="radio" id="India">
                                </div>
                                <!-- Koria -->
                                <div class="flex items-center justify-between">
                                    <label class="font-medium text-secondary-light" for="Koria">
                                        <span class="text-black hover:bg-transparent hover:text-primary flex items-center gap-3">
                                            <img src="{{ asset('assets/images/flags/flag8.png') }}" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                                            <span class="text-base font-semibold mb-0">Koria</span>
                                        </span>
                                    </label>
                                    <input class="rounded-full" name="language" type="radio" id="Koria">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Language Dropdown End  -->
                <!-- Message Dropdown Start  -->
                <button data-dropdown-toggle="dropdownMessage" class="has-indicator w-10 h-10 bg-neutral-200 dark:bg-neutral-700 rounded-full flex justify-center items-center" type="button">
                    <iconify-icon icon="mage:email" class="text-neutral-900 dark:text-white text-xl"></iconify-icon>
                </button>
                <div id="dropdownMessage" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-2xl overflow-hidden shadow-lg max-w-[394px] w-full">
                    <div class="py-3 px-4 rounded-lg bg-primary-50 dark:bg-primary-600/25 m-4 flex items-center justify-between gap-2">
                        <h6 class="text-lg text-neutral-900 font-semibold mb-0">Messaage</h6>
                        <span class="w-10 h-10 bg-white dark:bg-neutral-600 text-primary-600 dark:text-white font-bold flex justify-center items-center rounded-full">05</span>
                    </div>
                    <div>
                        <div class="max-h-[400px] overflow-y-auto">
                            <!-- Message items unchanged, already using Tailwind -->
                            <!-- ... -->
                        </div>
                        <div class="text-center py-3 px-4">
                            <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 font-semibold hover:underline text-center">See All Message </a>
                        </div>
                    </div>
                </div>
                <!-- Message Dropdown End  -->
                <!-- Notification Start  -->
                <button data-dropdown-toggle="dropdownNotification" class="has-indicator w-10 h-10 bg-neutral-200 dark:bg-neutral-700 rounded-full flex justify-center items-center" type="button">
                    <iconify-icon icon="iconoir:bell" class="text-neutral-900 dark:text-white text-xl"></iconify-icon>
                </button>
                <div id="dropdownNotification" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-2xl overflow-hidden shadow-lg max-w-[394px] w-full">
                    <div class="py-3 px-4 rounded-lg bg-primary-50 dark:bg-primary-600/25 m-4 flex items-center justify-between gap-2">
                        <h6 class="text-lg text-neutral-900 font-semibold mb-0">Notification</h6>
                        <span class="w-10 h-10 bg-white dark:bg-neutral-600 text-primary-600 dark:text-white font-bold flex justify-center items-center rounded-full">05</span>
                    </div>
                    <div>
                        <div class="max-h-[400px] overflow-y-auto">
                            <!-- Notification items unchanged, already using Tailwind -->
                            <!-- ... -->
                        </div>
                        <div class="text-center py-3 px-4">
                            <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 font-semibold hover:underline text-center">See All Notification </a>
                        </div>
                    </div>
                </div>
                <!-- Notification End  -->

                <button data-dropdown-toggle="dropdownProfile" class="flex justify-center items-center rounded-full" type="button">
                    <img src="{{ asset('assets/images/user.png') }}" alt="image" class="w-10 h-10 object-cover rounded-full">
                </button>
                <div id="dropdownProfile" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-lg shadow-lg p-3">
                    <div class="py-3 px-4 rounded-lg bg-primary-50 dark:bg-primary-600/25 mb-4 flex items-center justify-between gap-2">
                        <div>
                            <h6 class="text-lg text-neutral-900 font-semibold mb-0">Shahidul Islam</h6>
                            <span class="text-neutral-500">Admin</span>
                        </div>
                        <button type="button" class="hover:text-danger-600">
                            <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon>
                        </button>
                    </div>
                    <div class="max-h-[400px] overflow-y-auto pe-2">
                        <ul class="flex flex-col">
                            <li>
                                <a class="text-black py-2 hover:text-primary-600 flex items-center gap-4" href="{{ route('viewProfile') }}">
                                    <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon>  My Profile
                                </a>
                            </li>
                            <li>
                                <a class="text-black py-2 hover:text-primary-600 flex items-center gap-4" href="{{ route('email') }}">
                                    <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>  Inbox
                                </a>
                            </li>
                            <li>
                                <a class="text-black py-2 hover:text-primary-600 flex items-center gap-4" href="{{ route('company') }}">
                                    <iconify-icon icon="icon-park-outline:setting-two" class="icon text-xl"></iconify-icon>  Setting
                                </a>
                            </li>
                            <li>
                                <a class="text-black py-2 hover:text-danger-600 flex items-center gap-4" href="javascript:void(0)">
                                    <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>  Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
