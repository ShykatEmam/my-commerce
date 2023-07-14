<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function index(){
        return view('admin.brand.index');
    }

    public $brand;
    public function manage(){
        $this->brand = Brand::all();
        return view('admin.brand.manage',[
            'brands'=>$this->brand,
        ]);
    }
    public function editBrand($id){
        return view('admin.brand.edit',[
            'brand'=>Brand::find($id),
        ]);
    }

    public function saveBrand(Request $request){
        if ($request->name !=null && $request->description !=null){
            Brand::saveBrand($request);
        }
//        DB::table('categories')->insert([
//            'name'          => $request->name,
//            'description'   => $request->description,
//            'image'         => $request->image,
//            'status'        => $request->status,
//        ]);

        return back()->with('message','Brand info created successfully.!!');
    }
    public function updateBrand(Request $request){

//        return $request;
        Brand::updateBrand($request);

        return redirect(route('brand.manage'))->with('message','Brand updated successfully !!!');
    }
    public function status($id){
        Brand::status($id);
        return back();
    }
    public function deleteBrand($id){
        Brand::deleteBrand($id);
        return back();
    }
}
