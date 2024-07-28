<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function add_product(){
        return view('admin.product.add',[
            'title' => 'Thêm Sản Phẩm',
        ]);
    }
    public function insert_product(Request $request){
        $product = new product();
        $product->name = $request->input('name');
        $product->material = $request->input('material');
        $product->price_normal = $request->input('price_normal');
        $product->price_sale = $request->input('price_sale');
        $product->description = $request->input('description');
        $product->content = $request->input('content');
        $product->image = $request->input('image');
        $product_images = implode('*', $request -> input('images'));
        $product->images = $product_images; 
        $product->save();
        return redirect() -> back();
        
    }
    public function list_product(){
        $product = DB::table('products') -> paginate(1);
        // $product = product::all();
        return view('admin.product.list',[
            'title' => 'Danh Sách Sản Phẩm',
            'products' => $product
        ]);
    }
}
