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
}
