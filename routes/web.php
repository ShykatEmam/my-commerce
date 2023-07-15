<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyCommerceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[MyCommerceController::class,'index'])->name('home');
Route::get('/product-category',[MyCommerceController::class,'category'])->name('product-category');
Route::get('/product-detail',[MyCommerceController::class,'detail'])->name('product-detail');

Route::get('/show-cart',[CartController::class,'index'])->name('show-cart');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

//    Category Routes
    Route::get('/category/add',[CategoryController::class,'index'])->name('category.add');
    Route::get('/category/manage',[CategoryController::class,'manage'])->name('category.manage');
    Route::get('/status/{id}',[CategoryController::class,'status'])->name('status');
    Route::get('/delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('delete.category');
    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit.category');

    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new.category');
    Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('update.category');

//    SubCategory routes
    Route::get('/sub-category/add',[SubCategoryController::class,'index'])->name('add.subcategory');
    Route::get('/sub-category/manage',[SubCategoryController::class,'manage'])->name('manage.subcategory');
    Route::get('/sub-status/{id}',[SubCategoryController::class,'status'])->name('sub.status');
    Route::get('/delete-sub-category/{id}',[SubCategoryController::class,'deleteSubCategory'])->name('delete.subcategory');
    Route::get('/edit-sub-category/{id}',[SubCategoryController::class,'editSubCategory'])->name('edit.subcategory');

    Route::post('new-sub-category',[SubCategoryController::class,'saveSubCategory'])->name('new.subcategory');
    Route::post('/update-sub-category',[SubCategoryController::class,'updateSubCategory'])->name('update.subcategory');

//    Brand routes
    Route::get('/brand/add',[BrandController::class,'index'])->name('brand.add');
    Route::get('/brand/manage',[BrandController::class,'manage'])->name('brand.manage');
    Route::get('/brand/status/{id}',[BrandController::class,'status'])->name('brand.status');
    Route::get('/brand/delete/{id}',[BrandController::class,'deleteBrand'])->name('delete.brand');
    Route::get('/brand/edit/{id}',[BrandController::class,'editBrand'])->name('edit.brand');

    Route::post('/brand/new',[BrandController::class,'saveBrand'])->name('new.brand');
    Route::post('/brand/update',[BrandController::class,'updateBrand'])->name('update.brand');


//    Unit ROutes
    Route::get('/unit/add',[UnitController::class,'index'])->name('unit.add');
    Route::get('/unit/manage',[UnitController::class,'manage'])->name('unit.manage');
    Route::get('/unit/status/{id}',[UnitController::class,'status'])->name('unit.status');
    Route::get('/unit/delete/{id}',[UnitController::class,'deleteUnit'])->name('delete.unit');
    Route::get('/unit/edit/{id}',[UnitController::class,'editUnit'])->name('edit.unit');

    Route::post('/unit/new',[UnitController::class,'saveUnit'])->name('new.unit');
    Route::post('/unit/update',[UnitController::class,'updateUnit'])->name('update.unit');

});
