<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use App\Models\Categories;

class Category extends Component
{
    public $category;
    protected $rules =
    ['category.name'=>"required|max:100|unique:categories,name"];
    protected $validationAttributes =
    ['category.name'=>"Name"];

    public function mount()
    {
        $this->category=[];
    }
    public function save(){
        $this->validate();
        $categoryt = new Categories($this->category);
        $categoryt-> save();
        $this->category=[];
        session()->flash('flash.banner','you have added a categories');
        session()->flash('flash.bannerStyle','success');
    }

    public function render()
    {
        return view('livewire.prototipo.category');
    }
}
