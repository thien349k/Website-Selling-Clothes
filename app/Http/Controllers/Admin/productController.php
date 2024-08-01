<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function Laravel\Prompts\alert;

class productController extends Controller
{
    public function add_product(){
        return view('admin.product.add',[
            'title' => 'Thêm Sản Phẩm',
        ]);
    }
    public function insert_product(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'material' => 'required',
            'price_normal' => 'required',
            'price_sale' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required',
            'images' => 'required',
        ], [
            'name.required' => 'Bắt buộc',
            'material.required' => 'Bắt buộc',
            'price_normal.required' => 'Bắt buộc',
            'price_sale.required' => 'Bắt buộc',
            'description.required' => 'Bắt buộc',
            'content.required' => 'Bắt buộc',
            'image.required' => 'Bắt buộc',
            'images.required' => 'Bắt buộc',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $product = new product();
        $product -> name = $request -> input('name');
        $product -> material = $request -> input('material');
        $product -> price_normal = $request -> input('price_normal');
        $product -> price_sale = $request -> input('price_sale');
        $product -> description = $request -> input('description');
        $product -> content = $request -> input('content');
        $product -> image = $request -> input('image');
        $product_images = implode('*', $request -> input('images'));
        $product -> images = $product_images; 
        $product -> save();
        return redirect() -> back();
    }
    public function list_product(){
        $product = DB::table('products') -> paginate(10);
        // $product = product::all();
        return view('admin.product.list',[
            'title' => 'Danh Sách Sản Phẩm',
            'products' => $product
        ]);
    }
    public function delete_product(Request $request){
        product::find($request -> product_id) -> delete();
        return response() -> json([
            'success' => true,
        ]);
    }
    public function edit_product(Request $request){
        $product = product::find($request -> id);
        return view('admin.product.edit', [
            'title' => 'Sửa Sản Phẩm',
            'product' => $product
        ]);
    }
    public function update_product(Request $request){
        $product = product::find($request -> id);
        $product -> name = $request -> input('name');
        $product -> material = $request -> input('material');
        $product -> price_normal = $request -> input('price_normal');
        $product -> price_sale = $request -> input('price_sale');
        $product -> description = $request -> input('description');
        $product -> content = $request -> input('content');
        $product -> image = $request -> input('image');
        $product_images = implode('*', $request -> input('images'));
        $product -> images = $product_images; 
        $product -> save();
        return redirect('/admin/product/list');
    }
}
