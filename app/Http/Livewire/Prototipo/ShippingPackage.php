<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use App\Models\User;
use App\Models\Phones;
use App\Models\Addresses;

use Livewire\WithFileUploads;
use App\Models\Shipping_packages;

class ShippingPackage extends Component
{
    use WithFileUploads;
    public $usersID;
    public $phone;
    public $addres;
    public $shipPa;

    //validar lo que quieres de cada campo
    protected $rules=[
        'shipPa.tracking_number'=> "required|integer",
        'shipPa.shipping_date'=> "required",
        'shipPa.delivery_date'=> "required",
        'shipPa.price'=> "required",
        'shipPa.user_id'=> "required",
        'shipPa.phone_id'=> "required",
        'shipPa.address_id'=> "required",

    ];


    //poner de que nombre o como se llama el requeerimiento 
    protected $validationAttributes=[
        'shipPa.tracking_number'=> "number",
        'shipPa.shipping_date'=> "shiping date",
        'shipPa.delivery_date'=> "dalivery date",
        'shipPa.price'=> "price",
        'shipPa.user_id'=> "user",
        'shipPa.phone_id'=> "phone",
        'shipPa.address_id'=> "address",
    ];

    public function mount()
    {
         
        $this->shipPa=[];
        //para quue traiga todos mis productos
        $this->usersID=User::all();
        $this->phone=Phones::all();
        $this->addres=Addresses::all();
       
        
        
    }
    
    public function save(){
        $this->validate();
        $sip=new Shipping_packages($this->shipPa);
        $sip->save();
        $this->shipPa=[];
        session()->flash('flash.banner', 'Shipping Packages success!');
        session()->flash('flash.bannerStyle', 'success');
    }

    
    public function render()
    {
        return view('livewire.prototipo.shipping-package');
    }
}
