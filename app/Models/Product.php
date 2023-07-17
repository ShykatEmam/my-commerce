<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product;
    private static $image,$imageName,$imageUrl,$directory;





    public static function newProduct($request){
        self::$product                      = new Product();
        self::$product->category_id         = $request->category_id;
        self::$product->sub_category_id     = $request->sub_category_id;
        self::$product->brand_id            = $request->brand_id;
        self::$product->unit_id             = $request->unit_id;
        self::$product->name                = $request->name;
        self::$product->code                = $request->code;
        self::$product->model               = $request->model;
        self::$product->stock_amount        = $request->stock_amount;
        self::$product->regular_price       = $request->regular_price;
        self::$product->selling_price       = $request->selling_price;
        self::$product->short_description   = $request->short_description;
        self::$product->long_description    = $request->long_description;
        self::$product->status              = $request->status;

        if ($request->file('image') != null){
            self::$product->image           = self::saveImage($request);
        }
        self::$product->save();

        return self::$product;
    }

    public static function updateProduct($request){
        self::$product = Product::find($request->id);
        self::$product->category_id         = $request->category_id;
        self::$product->sub_category_id     = $request->sub_category_id;
        self::$product->brand_id            = $request->brand_id;
        self::$product->unit_id             = $request->unit_id;
        self::$product->name                = $request->name;
        self::$product->code                = $request->code;
        self::$product->model               = $request->model;
        self::$product->stock_amount        = $request->stock_amount;
        self::$product->regular_price       = $request->regular_price;
        self::$product->selling_price       = $request->selling_price;
        self::$product->short_description   = $request->short_description;
        self::$product->long_description    = $request->long_description;
        self::$product->status              = $request->status;




        if ($request->file('image') != null){
            if (self::$product->image !=null){
                unlink(self::$product->image);
            }
            self::$product->image = self::saveImage($request);
        }

        self::$product->save();

    }


    public static function saveImage($request){
        self::$image        = $request->file('image');
        self::$imageName    = rand().'.'.$request->file('image')->Extension();
        self::$directory    = 'admin/upload/product-image/';
        self::$imageUrl     = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    public static function status($id){
        self::$product = Product::find($id);
        if (self::$product->status == 1){
            self::$product->status = 2;
        }
        else{
            self::$product->status = 1;
        }
        self::$product->save();
    }

    public static function deleteProduct($id){
        self::$product = Product::find($id);
        if (self::$product->image !=null){
            unlink(self::$product->image);
        }
        self::$product->delete();
    }
}
