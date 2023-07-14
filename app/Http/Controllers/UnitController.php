<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
    public function index(){
        return view('admin.unit.index');
    }

    public $unit;
    public function manage(){
        $this->unit = Unit::all();

        return view('admin.unit.manage',[
            'units'=>$this->unit,
        ]);
    }
    public function editUnit($id){
        return view('admin.unit.edit',[
            'unit'=>Unit::find($id),
        ]);
    }

    public function saveUnit(Request $request){
        if ($request->name !=null && $request->description !=null){
            Unit::saveUnit($request);
        }
//        DB::table('categories')->insert([
//            'name'          => $request->name,
//            'description'   => $request->description,
//            'image'         => $request->image,
//            'status'        => $request->status,
//        ]);

        return back()->with('message','unit info created successfully.!!');
    }
    public function updateUnit(Request $request){

//        return $request;
        Unit::updateUnit($request);

        return redirect(route('unit.manage'))->with('message','unit updated successfully !!!');
    }
    public function status($id){
        Unit::status($id);
        return back();
    }
    public function deleteUnit($id){
        Unit::deleteUnit($id);
        return back();
    }
}
