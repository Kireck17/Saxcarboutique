<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use App\Models\Phones;
use App\Models\User;

class Phone extends Component
{
    public $phoness;
    public $usersID;
    protected $rules =
    ['phoness.telephone'=>"required|max:15"
    ,'phoness.phone'=>"required|max:15"
    ,'phoness.status'=>"required|max:50"
    ,'phoness.user_id' => "required"];
    protected $validationAttributes =
    ['phoness.telephone'=>"Telephone"
    ,'phoness.phone'=>"Phone"
    ,'phoness.user_id'=>"User"];

    public function mount(){
        $this->phoness = [];
        $this->usersID = User::all();
    }
    public function save(){
        $this->validate();
        $phonest =new Phones($this->phoness);
        $phonest->save();
        $this->phoness=[];
        session()->flash('flash.banner','you have added a Phones');
        session()->flash('flash.bannerStyle','success');
    }
    public function render()
    {
        return view('livewire.prototipo.phone');
    }
}
