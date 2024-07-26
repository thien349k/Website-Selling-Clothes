<?php
use App\Http\Controllers\Admin\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/order_detail', function () {
    return view('admin.order_detail');
}); 
Route::get('/admin/order_list', function () {
    return view('admin.order_list');
}); 

Route::get('/admin/product_list', function () {
    return view('admin.product_list');
});

Route::get('/admin/product_add', function () {
    return view('admin.product_add');
});

Route::get('/admin', function () {
    return view('admin.home');
});

Route::post('/upload',[uploadController::class,'uploadImage']);

Route::post('/uploads',[uploadController::class,'uploadImages']);

Route::get('/', function () {
    return view('welcome');
});
