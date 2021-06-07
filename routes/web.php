<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('prototipo.intro');
})->name('intro');

//Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', function () {
  // return view('prototipo.intro');
//})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('prototipo.intro');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/prueba', function () {
    return view('prueba.prueba');
})->name('prueba');

Route::middleware(['auth:sanctum', 'verified'])->get('/cartas', function () {
    return view('dashboard');
})->name('cartas');



Route::middleware(['auth:sanctum','verified'])->group(function(){
	Route::prefix('prototipo')->group(function(){
		Route::name('prototipo.')->group(function (){
			Route::get('/product',function(){
	           return view('prototipo.product');
	      })->name('product');
          //Categoria Productos
	      Route::get('/categoryProduct',function(){
	           return view('prototipo.categoryProduct');
	      })->name('categoryProduct');
          //Categoria
	      Route::get('/category',function(){
	           return view('prototipo.category');
	      })->name('category');
          //Foto
	      Route::get('/photo',function(){
	           return view('prototipo.photo');
	      })->name('photo');
	      //Foto Producto
	      Route::get('/photoProduct',function(){
	           return view('prototipo.photoProduct');
	      })->name('photoProduct');
          //Cupon Producto
	      Route::get('/cuponProduct',function(){
	           return view('prototipo.cuponProduct');
	      })->name('cuponProduct');
	      //Cupon
	      Route::get('/cupon',function(){
	           return view('prototipo.cupon');
	      })->name('cupon');
	      //Product_User
	      Route::get('/productUser',function(){
	           return view('prototipo.productUser');
	      })->name('productUser');
	      //address
	      Route::get('/address',function(){
	           return view('prototipo.address');
	      })->name('address');
	      //Phote
	      Route::get('/phone',function(){
	           return view('prototipo.phone');
	      })->name('phone');
	      //Shipping_package
	      Route::get('/shippingPackage',function(){
	           return view('prototipo.shippingPackage');
	      })->name('shippingPackage');
	      //Order_shipping
	      Route::get('/orderShipping',function(){
	           return view('prototipo.orderShipping');
	      })->name('orderShipping');
	      //Parcel_shipping_package
	      Route::get('/parcelShipping',function(){
	           return view('prototipo.parcelShipping');
	      })->name('parcelShipping');
	      //Parcel
	      Route::get('/parcel',function(){
	           return view('prototipo.parcel');
	      })->name('parcel');
	      //User
	      Route::get('/user',function(){
	           return view('prototipo.user');
	      })->name('user');
	      //Mark
	      Route::get('/mark',function(){
	           return view('prototipo.mark');
	      })->name('mark');
	      //Order_details
	      Route::get('/orderDetails',function(){
	           return view('prototipo.orderDetails');
	      })->name('orderDetails');
	      //order
	      Route::get('/order',function(){
	           return view('prototipo.order');
	      })->name('order');
	      //Payment_method
	      Route::get('/paymentMethod',function(){
	           return view('prototipo.paymentMethod');
	      })->name('paymentMethod');

	      Route::get('/ver',function(){
	           return view('prototipo.ver');
	      })->name('ver');
	      Route::get('/photo/edit',function(){
	           return view('photo.edit');
	      })->name('photo.edit');
		});
	});
});

