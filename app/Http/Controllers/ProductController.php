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
    //
    public function index(){
        return view('admin.product.index',[
            'categories'        =>Category::all(),
            'sub_categories'    =>SubCategory::all(),
            'brands'            =>Brand::all(),
            'units'             =>Unit::all(),
        ]);

    }
    public function getSubCategoryByCategory(){

        return response()->json(SubCategory::where('category_id',$_GET['id'])->get());
    }

    private $product;
    public function manage(){
        $this->product = Product::all();
        return view('admin.product.manage',[
            'products'=>$this->product,
        ]);
    }
    public function edit($id){
        return view('admin.product.edit',[
            'product'=>Product::find($id),
        ]);
    }
    public function create(Request $request){

        return $request;
        if ($request->name !=null && $request->description !=null){
            $this->product = Product::newProduct($request);
            
        }

        return back()->with('message','Product info created successfully.!!');
    }
    public function update(Request $request){
        Product::update($request);
        return redirect(route('product.manage'))->with('message','Product updated successfully !!!');
    }
    public function status($id){
        Product::status($id);
        return back();
    }
    public function delete($id){
        Product::delete($id);
        return back();
    }
}
