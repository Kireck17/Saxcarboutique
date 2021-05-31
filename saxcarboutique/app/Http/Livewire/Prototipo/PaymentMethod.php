<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use App\Models\Payment_methods;

class PaymentMethod extends Component
{
    public $pay;
    protected $rules = 
        ['pay.method'=> "required|max:100|unique:payment_methods,method"
        ,'pay.cuantity'=> "required"];
    protected $validationAttributes = 
        ['pay.method'=> "method"
        ,'pay.cuantity'=> "cuantity"];

    public function mount(){
        $this->pay=[];
    }
    public function save(){
        $this->validate();
        $payt = new Payment_methods($this->pay);
        $payt-> save();
        $this->pay=[];
        session()->flash('flash.banner','you have added a Payment Methods');
        session()->flash('flash.bannerStyle','success');
    }
    public function render()
    {
        return view('livewire.prototipo.payment-method');
    }
}

