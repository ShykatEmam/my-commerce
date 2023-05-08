<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    private static $sub;
    public static function saveSubCategory($request){
        self::$sub = new SubCategory();
        self::$sub->category_id = $request->category_id;
        self::$sub->name = $request->name;
        self::$sub->description = $request->description;
        self::$sub->status = $request->status;
        self::$sub->save();
    }
    public static function subStatus($id){
        self::$sub = SubCategory::find($id);
        if (self::$sub->status ==1){
            self::$sub->status = 2;
        }
        else{
            self::$sub->status = 1;
        }
        self::$sub->save();
    }

    public static function deleteSubCategory($id){
        self::$sub = SubCategory::find($id);
        self::$sub->delete();
    }
}
