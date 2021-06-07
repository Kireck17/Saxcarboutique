<?php

namespace App\Http\Livewire\Dasboard;

use Livewire\Component;
use App\Models\Products;

class Slider extends Component
{
    public $products;

    public function mount(){
        $this->products = Products::has('photo')->get();
    }

    public function render()
    {
        return view('livewire.dasboard.slider');
    }
}
