<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->middleware('auth')->group( function() {
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('blog', 'BlogController');
    Route::resource('productlist', 'ProductListController');
    Route::resource('productgallery', 'ProductGalleryController');
    Route::resource('productcategory', 'ProductCategoryController');
    Route::get('productlist/{id}/gallery', 'ProductListController@gallery')
    ->name('productlist.gallery');
});

Route::get('/', 'HomeController@index');
Route::get('contact-us', 'ContactController@create');
Route::post('contact-us', 'ContactController@store');
Route::get('about-us', 'AboutController@index');

//product page
// Route::prefix('product' , 'ProductController@index')->group( function(){
//     Route::get('product/{slug}', 'ProductController@view');
// });

// Route::get('category', 'CategoryController@index');
// Route::get('category/{slug}', 'CategoryController@show');

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');



Auth::routes(['register' => true]);
