<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Data\ProductData;

class HomePage extends Component
{
    public function render()
    {
        $banners = [
            [
                'title' => 'New Season, New Stories',
                'subtitle' => 'Explore our latest mystery and thriller collection.',
                'image' => asset('images/banners/banner_new_release_1777908163435.png'),
                'link' => route('product-catalog'),
            ],
            [
                'title' => 'Big Book Sale',
                'subtitle' => 'Up to 50% off on selected digital literature.',
                'image' => asset('images/banners/banner_sale_books_1777908186504.png'),
                'link' => route('product-catalog'),
            ],
            [
                'title' => "Editor's Choice 2025",
                'subtitle' => 'The most influential books of the year, curated for you.',
                'image' => asset('images/banners/banner_curated_collection_1777908208531.png'),
                'link' => route('product-catalog'),
            ],
        ];

        $featureItems = Product::orderByRaw('RAND()', [])->take(3)->get();
        $feature_products = ProductData::collect($featureItems);

        $latestItems = Product::orderByDesc('created_at')->take(3)->get();
        $latest_products = ProductData::collect($latestItems);

        return view('livewire.home-page', [
            'feature_products' => $feature_products,
            'latest_products' => $latest_products,
            'banners' => $banners,
        ]);
    }
}
