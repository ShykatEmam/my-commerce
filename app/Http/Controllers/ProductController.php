<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.index',[
            'categories'        =>Category::all(),
            'sub_categories'    =>SubCategory::all(),
            'brands'            =>Brand::all(),
            'units'             =>Unit::all(),
        ]);

    }

    public $product;
    public function manage(){
        $this->product = Product::all();
        return view('admin.product.manage',[
            'products'=>$this->product,
        ]);
    }
    public function editCategory($id){
        return view('admin.product.edit',[
            'product'=>Product::find($id),
        ]);
    }
    public function saveProduct(Request $request){
        if ($request->name !=null && $request->description !=null){
            Product::saveProduct($request);
        }
//        DB::table('categories')->insert([
//            'name'          => $request->name,
//            'description'   => $request->description,
//            'image'         => $request->image,
//            'status'        => $request->status,
//        ]);

        return back()->with('message','Product info created successfully.!!');
    }
    public function updateProduct(Request $request){
        Product::updateProduct($request);
        return redirect(route('product.manage'))->with('message','Product updated successfully !!!');
    }
    public function status($id){
        Product::status($id);
        return back();
    }
    public function deleteProduct($id){
        Product::deleteProduct($id);
        return back();
    }
}
