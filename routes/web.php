<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\contentcontroller;
use App\Http\Controllers\Coarsescontroller;
use App\Http\Controllers\webController;
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

Route::get('/', function () {
    return view('welcome');
});
 //rates
Route::get('/rat/es/con/ver/ter', [webController::class, 'coarsetab'])->name('/rat/es/con/ver/ter');
Route::get('/vie/wco/arse/{id}',[webController::class,'coarsedetails'])->name('/vie/wco/arse');

Auth::routes(['register' => false]);
// web route here
Route::get('/', [webController::class, 'welcome'])->name('welcome');
//blogs
Route::get('/vie/b/lo/g/{slug}', [webController::class, 'blogs'])->name('/vie/b/lo/g');
// all blogs view 
Route::get('/al/l/b/lo/g', [webController::class, 'allblogs'])->name('/al/l/b/lo/g');


Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

            //admin routes
    Route::get('/a/dmin', [HomeController::class, 'adminindex'])->name('/a/dmin');
            // category routes
    Route::get('/cat/gory', [categoryController::class, 'index'])->name('/cat/gory');
    Route::post('/add/cat',[categoryController::class,'addcategory'])->name('/add/cat');
                //logistics here
    Route::get('/logi/stics/panel', [contentcontroller::class, 'logistics'])->name('/logi/stics/panel');
               //header content updates


    Route::get('/getcategoryList',[categoryController::class, 'getcategoryList'])->name('get.category.List');
    Route::post('/get/category/Details',[categoryController::class, 'getcategoryDetails'])->name('get.category.Details');
    Route::post('/updatecategoryDetails',[categoryController::class, 'updatecategoryDetails'])->name('update.category.details');
    Route::post('/deletecategory',[categoryController::class,'deletecategory'])->name('delete.category');
    Route::post('/delete/Selected/category',[categoryController::class,'deleteSelectedcategory'])->name('delete.Selected.category');
               //coarses
    Route::get('/coa/rs/e', [Coarsescontroller::class, 'index'])->name('/coa/rs/e');
    Route::get('/Co/a/rs/es/cr/ea/te', [Coarsescontroller::class, 'create'])->name('/Co/a/rs/es/cr/ea/te');
    Route::post('/Co/a/rs/es/cr/ea/te', [Coarsescontroller::class, 'store'])->name('/co/ar/ses/sto/re');
    Route::get('/edi/tc/oar/ses/{coarse_id}', [Coarsescontroller::class, 'edit'])->name('/edi/tc/oar/ses');
    Route::post('/edi/tc/oar/ses/{coarse_id}', [Coarsescontroller::class, 'update'])->name('/upd/ates/co/ar/ses');
    Route::get('/tr/a/sh/{coarse_id}', [Coarsescontroller::class, 'destroy'])->name('/tr/a/sh');

                //content Routes here
    Route::get('/cont/ent/li/st', [contentcontroller::class, 'index'])->name('/cont/ent/li/st');
    Route::get('/cont/ent/cr/ea/te', [contentcontroller::class, 'create'])->name('/cont/ent/cr/ea/te');
    Route::post('/cont/ent/cr/ea/te', [contentcontroller::class, 'store'])->name('/cont/ent/sto/re');
    Route::get('/edi/tcont/ent/{content_id}', [contentcontroller::class, 'edit'])->name('/edi/tcont/ent');
    Route::post('/edi/tcont/ent/{content_id}', [contentcontroller::class, 'update'])->name('/upd/ates/tcont/ent');
    Route::get('/filter/fetch', [contentcontroller::class, 'fetch'])->name('filter.fetch');
    Route::get('/web/tr/a/sh/{content_id}', [contentcontroller::class, 'destroy'])->name('/web/tr/a/sh');
    


});
Route::get('logout', 'Auth\LoginController@logout', function () {
            return abort(404);
    });
