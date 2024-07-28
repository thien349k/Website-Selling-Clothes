<?php
use App\Http\Controllers\Admin\uploadController;
use App\Http\Controllers\Admin\productController;
use Illuminate\Support\Facades\Route;

//admin
Route::get('/admin', function () {
    return view('admin.home');
});
//product
Route::get('/admin/order_detail', function () {
    return view('admin.order_detail');
}); 
Route::get('/admin/order_list', function () {
    return view('admin.order_list');
}); 


Route::post('/admin/product/add', [productController::class,'insert_product']);
Route::get('admin/product/create',[productController::class,'add_product']);
Route::get('/admin/product/list', [productController::class, 'list_product']);


Route::post('/upload',[uploadController::class,'uploadImage']);

Route::post('/uploads',[uploadController::class,'uploadImages']);

Route::get('/', function () {
    return view('welcome');
});
