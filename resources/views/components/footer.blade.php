<!-- ========== FOOTER ========== -->
<footer class="w-full mt-auto bg-gray-900 dark:bg-neutral-950">
    <div class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-3">
            <div class="col-span-full lg:col-span-1">
                <a class="flex items-center gap-1 text-2xl font-bold tracking-tight text-white focus:outline-hidden" href="{{ url('/') }}"
                    aria-label="Brand">
                    <img src="{{ asset('images/logo.png') }}" class="size-12 brightness-0 invert" alt="Webstore Logo">
                    <span>Webstore</span>
                </a>
                <div class="my-5 text-gray-400 text-sm leading-relaxed max-w-xs">
                    <strong>Webstore</strong> is your dedicated library for premium books and digital literature. We believe in the power of reading to transform lives and expand horizons.
                </div>
            </div>
            <!-- End Col -->

            <div class="grid col-span-1 gap-5">
                <div>
                    <h4 class="font-semibold text-gray-100 flex items-center">
                        <svg class="size-4 me-2 text-brand-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 18H3c-1.1 0-2-.9-2-2V7c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2v2"/><path d="M14 9h4l3 3v6c0 1.1-.9 2-2 2h-2"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/></svg>
                        Reliable Shipping
                    </h4>
                    <div class="flex flex-wrap gap-2 mt-3">
                        <div class="max-h-10">
                            <img src="{{ asset('images/shipping/idexpress.webp') }}" alt="idexpress" />
                        </div>
                        <div class="flex items-center px-2 bg-white rounded-sm">
                            <img src="{{ asset('images/shipping/jne.svg') }}" alt="jne" />
                        </div>
                        <div class="flex items-center px-2 bg-white rounded-sm">
                            <img src="{{ asset('images/shipping/jntexpress.svg') }}" alt="jnt" />
                        </div>
                        <div class="flex items-center px-2 bg-white rounded-sm">
                            <img src="{{ asset('images/shipping/ninjaexpress.webp') }}" alt="ninja" />
                        </div>
                        <div class="flex items-center px-2 bg-white rounded-sm">
                            <img src="{{ asset('images/shipping/sicepat.webp') }}" alt="sicepat" />
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-100 flex items-center">
                        <svg class="size-4 me-2 text-brand-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                        Secure Payment
                    </h4>
                    <div class="flex flex-wrap gap-2 mt-3">
                        <div class="flex items-center px-2 bg-white rounded-sm">
                            <img src="{{ asset('images/bank/bca-bank-central-asia.svg') }}" class="h-10 p-2"
                                alt="bca" />
                        </div>
                        <div class="flex items-center px-2 bg-white rounded-sm">
                            <img src="{{ asset('images/bank/bank-mandiri.svg') }}" class="h-10 p-2" alt="mandiri" />
                        </div>
                        <div class="flex items-center px-2 bg-white rounded-sm">
                            <img src="{{ asset('images/bank/bank-negara-indonesia.svg') }}" class="h-10 p-2"
                                alt="BNI" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col -->

            <div class="col-span-1">
                <h4 class="font-semibold text-gray-100">Customer Care</h4>

                <div class="grid mt-3 space-y-3">
                    <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="{{ route('page') }}">Term & Conditions</a></p>
                    <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="{{ route('page') }}">Privacy</a></p>
                    <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="{{ route('page') }}">Customers</a></p>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->

        <div class="flex justify-center mt-5 sm:mt-12 gap-y-2 sm:gap-y-0">
            <p class="text-sm text-gray-400 dark:text-neutral-400">
                © 2025 {{ config('app.name') }}
            </p>

        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->
