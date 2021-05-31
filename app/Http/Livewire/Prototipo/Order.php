<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\Orders;
use App\Models\Payment_methods;

class Order extends Component
{
    use WithFileUploads;
    public $usersID;
    public $order;
    public $pay;

    //validar lo que quieres de cada campo
    protected $rules=[
        'order.total'=> "required|integer",
        'order.payment_method_id'=> "required",
        'order.user_id'=> "required",

    ];


    //poner de que nombre o como se llama el requeerimiento 
    protected $validationAttributes=[
        'order.total'=> "required|integer",
        'order.payment_method_id'=> "required",
        'order.user_id'=> "required",
    ];

    public function mount()
    {
        $this->order=[];
        //para quue traiga todos mis productos
        $this->pay=Payment_methods::all();
        $this->usersID=User::all();
        
    }
    
    public function save(){
        $this->validate();
        //$orders->user_id=auth()->user()->id;
        $orders=new Orders($this->order);
        //$orders=new User($this->order);
        $orders->save();
        $this->order=[];
        session()->flash('flash.banner', 'Orden guardada!');
        session()->flash('flash.bannerStyle', 'success');
    }

    public function render()
    {
        return view('livewire.prototipo.order');
    }
}
