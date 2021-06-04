<?php

namespace App\Http\Livewire\Photo;

use Livewire\Component;
use App\Models\Products;
use App\Models\Photos;

class Edit extends Component
{
    public $photos;
    public $products;
    public $selected_products;

    protected $rules=[
        'photos.*.id' => 'required'
    ];

    public function mount()
    {
        $this->photos=Photos::all();
        $this->products=Products::all();
        $this->selected_products=[];
    }
    public function guardar()
    {
        foreach ($this->selected_products as $key => $prod) {
            $this->photos[$key]->product()->attach($prod);
        }
    }
    public function render()
    {
        return view('livewire.photo.edit');
    }
}
