<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    private static $brand;
    private static $image,$imageName,$imageUrl,$directory;
    public static function saveBrand($request){
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        if ($request->file('image') != null){

            self::$brand->image = self::saveImage($request);
        }
        self::$brand->status = $request->status;
        self::$brand->save();
    }

    public static function updateBrand($request){
        self::$brand = Brand::find($request->id);
        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        if ($request->file('image') != null){
            if (self::$brand->image !=null){
                unlink(self::$brand->image);
            }
            self::$brand->image = self::saveImage($request);
        }

        self::$brand->status = $request->status;
        self::$brand->save();

    }


    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.$request->file('image')->Extension();
        self::$directory = 'admin/upload/brand-image/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    public static function status($id){
        self::$brand = Brand::find($id);
        if (self::$brand->status == 1){
            self::$brand->status = 2;
        }
        else{
            self::$brand->status = 1;
        }
        self::$brand->save();
    }

    public static function deleteBrand($id){
        self::$brand = Brand::find($id);
        if (self::$brand->image !=null){
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }

}
