<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyCommerceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
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


});
