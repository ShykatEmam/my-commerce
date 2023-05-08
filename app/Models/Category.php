<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    use HasFactory;

    private static $category;
    private static $image,$imageName,$imageUrl,$directory;
    public static function saveCategory($request){
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        if ($request->file('image') != null){

            self::$category->image = self::saveImage($request);
        }
        self::$category->status = $request->status;
        self::$category->save();
    }

    public static function updateCategory($request){
        self::$category = Category::find($request->id);
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        if ($request->file('image') != null){
            if (self::$category->image !=null){
                unlink(self::$category->image);
            }
            self::$category->image = self::saveImage($request);
        }

        self::$category->status = $request->status;
        self::$category->save();

    }


    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.$request->file('image')->Extension();
        self::$directory = 'admin/upload/category-image/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    public static function status($id){
        self::$category = Category::find($id);
        if (self::$category->status == 1){
            self::$category->status = 2;
        }
        else{
            self::$category->status = 1;
        }
        self::$category->save();
    }

    public static function deleteCategory($id){
        self::$category = Category::find($id);
        if (self::$category->image !=null){
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
}
