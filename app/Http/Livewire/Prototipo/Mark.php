<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Marks;

class Mark extends Component
{
    use WithFileUploads;

    public $mark;
    protected $rules = 
        ['mark.name'=> "required|max:100|unique:marks,name"
        ,'mark.photo'=> "nullable|image"];
    protected $validationAttributes = 
        ['mark.name'=> "Name"
        ,'mark.photo'=> "Photo"];

    public function mount(){
        $this->mark=[];
    }
    public function save(){
        $this->validate();
        $url = "storage/".$this->mark['photo']->storePublicly('images','public');
        $markt =new Marks($this->mark);
        $markt->photo = $url;
        $markt-> save();
        $this->mark=[];
        session()->flash('flash.banner','you have added a Mark');
        session()->flash('flash.bannerStyle','success');
    }

    public function render()
    {
        return view('livewire.prototipo.mark');
    }

}
