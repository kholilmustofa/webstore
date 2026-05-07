<div>
    <!-- Carousel Hero (Full Width) -->
    <div class="w-full">
        <div data-hs-carousel='{
            "loadingClasses": "opacity-0",
            "isAutoPlay": true
          }' class="relative">
            <div class="hs-carousel relative overflow-hidden w-full min-h-[350px] md:min-h-[450px] bg-gray-900">
                <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                    @foreach($banners as $banner)
                    <div class="hs-carousel-slide">
                        <div class="relative h-full w-full flex flex-col">
                            <!-- Background Image -->
                            <img src="{{ $banner['image'] }}" class="absolute inset-0 w-full h-full object-cover" alt="{{ $banner['title'] }}">
                            <!-- Overlay Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-950/90 via-gray-950/40 to-transparent"></div>
                            
                            <!-- Content Wrapper (Centered) -->
                            <div class="relative h-full w-full max-w-[85rem] mx-auto px-10 sm:px-16 lg:px-24">
                                <div class="relative h-full flex flex-col justify-center max-w-2xl space-y-4 py-10">
                                    <h2 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
                                        {{ $banner['title'] }}
                                    </h2>
                                    <p class="text-base md:text-lg text-gray-200 line-clamp-2">
                                        {{ $banner['subtitle'] }}
                                    </p>
                                    <div class="pt-4">
                                        <a href="{{ $banner['link'] }}" class="inline-flex items-center text-white text-lg font-bold group">
                                            <span class="border-b-2 border-white group-hover:border-brand-400 group-hover:text-brand-400 transition-all pb-1">Explore Now</span>
                                            <svg class="size-5 ms-3 transform group-hover:translate-x-2 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Controls (Aligned to content edges) -->
            <div class="absolute inset-0 max-w-[85rem] mx-auto px-4 pointer-events-none">
                <div class="relative h-full w-full">
                    <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-0 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center size-10 rounded-full bg-white/20 backdrop-blur-md text-white hover:bg-white hover:text-gray-900 focus:outline-hidden transition-all z-10 top-1/2 -translate-y-1/2 pointer-events-auto">
                        <span class="text-2xl" aria-hidden="true">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-0 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center size-10 rounded-full bg-white/20 backdrop-blur-md text-white hover:bg-white hover:text-gray-900 focus:outline-hidden transition-all z-10 top-1/2 -translate-y-1/2 pointer-events-auto">
                        <span class="sr-only">Next</span>
                        <span class="text-2xl" aria-hidden="true">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </span>
                    </button>
                </div>
            </div>

            <!-- Pagination -->
            <div class="hs-carousel-pagination flex justify-center absolute bottom-6 start-0 end-0 space-x-2">
                @foreach($banners as $index => $banner)
                <span class="hs-carousel-active:bg-brand-500 hs-carousel-active:border-brand-500 size-2.5 border border-white/50 rounded-full cursor-pointer transition-colors duration-300"></span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container mx-auto max-w-[85rem] w-full">
        <div class="mt-20 space-y-24 mb-24">
            <x-product-sections :products="$feature_products" title="Feature Product" :url="route('product-catalog')" />
            <x-featured-icon />
            <x-product-sections :products="$latest_products" title="Latest Products" :url="route('product-catalog')" />
        </div>
    </div>
</div>
