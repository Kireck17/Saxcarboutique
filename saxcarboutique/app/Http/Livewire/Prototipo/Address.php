<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use App\Models\Addresses;
use App\Models\User;

class Address extends Component
{
    public $adress;
    public $usersID;
    protected $rules =
    ['adress.street'=>"required|max:100"
    ,'adress.colony'=>"required|max:100"
    ,'adress.state'=>"required|max:50"
    ,'adress.country'=>"required|max:50"
    ,'adress.status'=>"required|max:50"
    ,'adress.internal_number'=>"required|max:20"
    ,'adress.external_number'=>"required|max:20"
    ,'adress.zip_code'=>"required|max:20"];

    public function mount(){
        $this->adress = [];
        $this->usersID = User::all();
    }
    public function save(){
        $this->validate();
        $adresst = new Addresses($this->adress);
        $adresst-> save();
        $this->adress=[];
        session()->flash('flash.banner','you have added a Addresses');
        session()->flash('flash.bannerStyle','success');
    }
    public function render()
    {
        return view('livewire.prototipo.address');
    }
}
