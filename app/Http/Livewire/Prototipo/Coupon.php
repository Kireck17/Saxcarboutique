<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use App\Models\Coupons;

class Coupon extends Component
{
    public $couponn;

    protected $rules = ['couponn.coupon'=>"required|max:100|unique:coupons,coupon",
                        'couponn.validity'=>"required|date"];
    protected $validationAttributes =['couponn.coupon'=>"Coupons"];


    public function mount (){
        $this->couponn = [];
    }
    public function save(){
        $this->validate();
        $coupont = new Coupons($this->couponn);
        $coupont-> save();
        $this->couponn=[];
        session()->flash('flash.banner','you have added a Coupons');
        session()->flash('flash.bannerStyle','success');
    }
    public function render()
    {
        return view('livewire.prototipo.coupon');
    }
}
