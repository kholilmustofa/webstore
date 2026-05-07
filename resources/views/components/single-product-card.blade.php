<a class="group relative flex flex-col h-full bg-white border border-gray-100 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:shadow-brand-500/10 hover:-translate-y-1 overflow-hidden"
    href="{{ route('product', $product->slug) }}">
    <!-- Image -->
    <div class="aspect-square overflow-hidden bg-gray-50">
        <img class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
            src="{{ $product->cover_url }}"
            alt="{{ $product->name }}">
    </div>
    
    <!-- Content -->
    <div class="flex flex-col flex-1 p-5">
        <div class="flex-1">
            <h3 class="text-lg font-bold text-gray-900 line-clamp-1 group-hover:text-brand-600 transition-colors">
                {{ $product->name }}
            </h3>
            <p class="mt-1 text-sm text-gray-500 line-clamp-2 leading-relaxed">
                {{ $product->short_desc }}
            </p>
        </div>
        
        <div class="mt-4 flex items-center justify-between">
            <p class="text-lg font-bold text-gray-900">
                {{ $product->price_formatted }}
            </p>
            
            <div class="inline-flex items-center justify-center size-9 rounded-xl bg-gray-50 text-gray-400 group-hover:bg-brand-600 group-hover:text-white transition-all duration-300">
                <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </div>
        </div>
    </div>
</a>
