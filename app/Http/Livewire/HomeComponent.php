<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $popular_products = Product::inRandomOrder()->limit(8)->get();
        return view('livewire.home-component', ['popular_products' => $popular_products])->layout("layouts.base");
    }
}
