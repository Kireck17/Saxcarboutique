<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use App\Models\Photos;
use Livewire\WithFileUploads;

class Photo extends Component
{
    use WithFileUploads;

    public $photo;
    protected $rules = ['photo.route'=> "nullable|image"];
    protected $validationAttributes = ['photo.route'=> "Photo"];

    public function mount(){
        $this->photo = [];
    }
    public function save(){
        $this -> validate();
        $url = "storage/".$this->photo['route']->storePublicly('images','public');
        $photot =new Photos($this->photo);
        $photot->route = $url;
        $photot->save();
        $this->photo=[];
        session()->flash('flash.banner','you have added a photo');
        session()->flash('flash.bannerStyle','success');
    }
    public function render()
    {
        return view('livewire.prototipo.photo');
    }
}
