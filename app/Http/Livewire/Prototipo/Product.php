<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use App\Models\Products;
use App\Models\Marks;

class Product extends Component
{
    public $product;
    public $markID;
    
    protected $rules =
    ['product.name'=>"required|max:100"
    ,'product.quantity'=>"required"
    ,'product.price'=>"required"
    ,'product.discount'=>"required"
    ,'product.barcode'=>"required"
    ,'product.description'=>"required"
    ,'product.mark_id'=>"required"
    ];

    public function mount(){
        $this->product = [];
        $this->markID = Marks::all();
    }
    
    public function save(){

        $this->validate();

        $productt = new Products($this->product);

        $productt-> save();

        $this->product=[];

        session()->flash('flash.banner','you have added a Products');
        session()->flash('flash.bannerStyle','success');
    }
    public function render()
    {
        return view('livewire.prototipo.product');
    }
}
