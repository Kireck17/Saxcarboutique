<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use App\Models\Parcels;

class Parcel extends Component
{
    public $parcel;
    protected $rules =
    ['parcel.name'=>"required|max:100|unique:parcels,name"];
    protected $validationAttributes =
    ['parcel.name'=>"Name"];

    
    public function mount(){
        $this->parcel = [];
    }
    public function save(){
        $this->validate();
        $parcelt = new Parcels($this->parcel);
        $parcelt-> save();
        $this->parcel=[];
        session()->flash('flash.banner','you have added a Parcels');
        session()->flash('flash.bannerStyle','success');
    }

    public function render()
    {
        return view('livewire.prototipo.parcel');
    }
}
