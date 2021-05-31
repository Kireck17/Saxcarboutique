<?php

namespace App\Http\Livewire\Prototipo;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Order_details;

class OrdDetails extends Component
{
    use WithFileUploads;
    public $ordDet;

    public $product;
    public $order;
    

    //validar lo que quieres de cada campo
    protected $rules=[
        'ordDet.feach_day'=> "required",
        'ordDet.sub_total'=> "required|max:200",
        'ordDet.discount'=> "required|:max:200",
        'ordDet.order_id'=> "required|integer",
        'ordDet.product_id'=> "required|integer",

    ];


    //poner de que nombre o como se llama el requeerimiento 
    protected $validationAttributes=[
        'ordDet.feach_day'=> "fech day",
        'ordDet.sub_total'=> "sub total",
        'ordDet.discount'=> "discount",
        'ordDet.order_id'=> "order",
        'ordDet.product_id'=> "product",
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
        session()->flash('flash.banner', 'Details Order success!');
        session()->flash('flash.bannerStyle', 'success');
    }

    public function render()
    {
        return view('livewire.prototipo.ord-details');
    }
}
