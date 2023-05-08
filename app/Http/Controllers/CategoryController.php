<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }

    public $cat;
    public function manage(){
        $this->cat = Category::all();


        return view('admin.category.manage',[
            'cats'=>$this->cat,
        ]);
    }
    public function editCategory($id){
        return view('admin.category.edit',[
            'category'=>Category::find($id),
        ]);
    }






    public function saveCategory(Request $request){
        if ($request->name !=null && $request->description !=null){
            Category::saveCategory($request);
        }


        return back();
    }
    public function updateCategory(Request $request){

//        return $request;
        Category::updateCategory($request);

        return redirect(route('category.manage'));
    }
    public function status($id){
        Category::status($id);
        return back();
    }
    public function deleteCategory($id){
        Category::deleteCategory($id);
        return back();
    }
}
