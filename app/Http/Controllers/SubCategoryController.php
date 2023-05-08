<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use DB;

class SubCategoryController extends Controller
{
    public $sub;
    public function index(){
        return view('admin.subCategory.index',[
            'categories'=>Category::all(),
        ]);
    }
    public function manage(){
        $this->sub = DB::table('sub_categories')
            ->join('categories','sub_categories.category_id','=','categories.id')
            ->select('sub_categories.*','categories.name as category_name')
            ->get();
        return view('admin.subCategory.manage',[
            'subCategories'=>$this->sub,
        ]);

    }
    public function saveSubCategory(Request $request){
        if ($request->category_id!=null && $request->name !=null && $request->description != null){
            SubCategory::saveSubCategory($request);
        }
        return back();
    }
    public function status($id){
        SubCategory::subStatus($id);
        return back();
    }
    public function deleteSubCategory($id){
        SubCategory::deleteSubCategory($id);
        return back();

    }
    public function editSubCategory($id){
        $this->sub= SubCategory::find($id);
        return view('admin.subCategory.edit',[
            'categories'=>Category::all(),
            'sub'=>$this->sub,
        ]);
    }
    public function updateSubCategory(Request $request){

        if ($request->category_id!=null && $request->name !=null && $request->description != null){
            SubCategory::updateSubCategory($request);

        }
        return redirect(route('manage.subcategory'));
    }
}
