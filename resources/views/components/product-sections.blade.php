@props(['title' => 'Title Section', 'url' => '#', 'products' => []])
<!-- Title -->
<div class="flex items-center justify-between mb-10">
    <h2 class="text-2xl font-extrabold text-gray-900 md:text-3xl tracking-tight">{{ $title }}</h2>
    <a href="{{ $url }}" class="hidden sm:inline-flex items-center text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors">
        View All
        <svg class="size-4 ms-1 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
    </a>
</div>
<!-- End Title -->

<!-- Grid -->
<div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($products as $product)
        <x-single-product-card :product="$product" />
    @endforeach
</div>

<div class="flex justify-center w-full mt-10 sm:hidden">
    <a href="{{ $url }}" class="inline-flex items-center px-6 py-3 border border-gray-200 rounded-xl text-sm font-semibold text-gray-700 hover:bg-gray-50 transition-all">
        Show More Product
        <svg class="size-4 ms-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
    </a>
</div>
<!-- End Card Blog -->
