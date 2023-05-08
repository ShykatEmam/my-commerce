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
    public function edit(){
        return view('admin.subCategory.edit');
    }
    public function manage(){
        $this->sub = DB::table('sub_categories')
            ->join('categories','sub_categories.category_id','=','categories.id')
            ->select('sub_categories.*','categories.name')
            ->get();
        return view('admin.subCategory.manage',[
            'subs'=>SubCategory::all(),
        ]);

    }
    public function saveSubCategory(Request $request){
        SubCategory::saveSubCategory($request);
        return back();
    }
}
