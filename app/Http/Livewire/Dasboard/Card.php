<?php

namespace App\Http\Livewire\Dasboard;

use Livewire\Component;
use App\Models\Products;

class Card extends Component
{
    /** */
    public $foo;
    public $search = '';
    public $page = 1;

    protected $queryString = [
        'foo',
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];
    /** */
    public $products;

    public function mount(){
        $this->products = Products::has('photo')->get();
    }


    public function render()
    {
        return view('livewire.dasboard.card', [
            'posts' => Products::where('name', 'like', '%'.$this->search.'%')->get(),
        ]);
    }
}
