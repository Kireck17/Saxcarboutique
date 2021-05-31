<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use App\Models\Order_details;
use Livewire\WithFileUploads;
use App\Models\Products;
use App\Models\Orders;

class OrderDetails extends Component
{
    use WithFileUploads;
    public $ordDet;

    public $product;
    public $order;
    

    //validar lo que quieres de cada campo
    protected $rules=[
        'ordDet.feach_day'=> "required|integer",
        'ordDet.sub_total'=> "required",
        'ordDet.discount'=> "required",
        'ordDet.order_id'=> "required",
        'ordDet.product_id'=> "required",

    ];


    //poner de que nombre o como se llama el requeerimiento 
    protected $validationAttributes=[
        'ordDet.feach_day'=> "required|integer",
        'ordDet.sub_total'=> "required",
        'ordDet.discount'=> "required",
        'ordDet.order_id'=> "required",
        'ordDet.product_id'=> "required",
    ];

    public function mount()
    {
        $this->ordDet=[];
        //para quue traiga todos mis productos
        $this->order=Orders::all();
        $this->product=Products::all();
        
    }
    
    public function save(){
        $this->validate();
        //$orders->user_id=auth()->user()->id;
        $orders=new Order_details($this->ordDet);
        //$orders=new User($this->order);
        $orders->save();
        $this->ordDet=[];
        session()->flash('flash.banner', 'Order Details Success!');
        session()->flash('flash.bannerStyle', 'success');
    }
    public function render()
    {
        return view('livewire.prototipo.order-details');
    }
}
