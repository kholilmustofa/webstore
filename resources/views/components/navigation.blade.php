<!-- ========== HEADER ========== -->
<header
    class="sticky top-0 z-50 flex flex-wrap w-full bg-white/80 backdrop-blur-md border-b border-gray-200/50 md:justify-start md:flex-nowrap transition-all duration-300">
    <nav
        class="relative max-w-[85rem] w-full md:flex md:items-center md:justify-between md:gap-3 mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <!-- Logo w/ Collapse Button -->
        <div class="flex items-center justify-between">
            <a class="flex items-center gap-1 text-2xl font-bold tracking-tight text-gray-900 focus:outline-hidden"
                href="{{ url('/') }}" aria-label="Brand">
                <img src="{{ asset('images/logo.png') }}" class="size-12" alt="Webstore Logo">
                <span>Webstore</span>
            </a>

            <!-- Collapse Button -->
            <div class="md:hidden">
                <button type="button"
                    class="relative flex items-center justify-center text-sm font-semibold text-gray-800 border border-gray-200 rounded-xl hs-collapse-toggle size-10 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                    id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
                    <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hidden hs-collapse-open:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
            <!-- End Collapse Button -->
        </div>
        <!-- End Logo w/ Collapse Button -->

        <!-- Collapse -->
        <div id="hs-header-classic"
            class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow md:block"
            aria-labelledby="hs-header-classic-collapse">
            <div
                class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-1 md:gap-2">
                    <a class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('home') ? 'text-brand-600 bg-brand-50' : 'text-gray-600 hover:text-brand-600 hover:bg-gray-50' }}"
                        href="{{ route('home') }}" {!! request()->routeIs('home') ? 'aria-current="page"' : '' !!}>
                        Home
                    </a>

                    <a class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('product-catalog') ? 'text-brand-600 bg-brand-50' : 'text-gray-600 hover:text-brand-600 hover:bg-gray-50' }}"
                        href="{{ route('product-catalog') }}" {!! request()->routeIs('product-catalog') ? 'aria-current="page"' : '' !!}>
                        Collection
                    </a>

                    <livewire:cart-count />
                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>
<!-- ========== END HEADER ========== -->
