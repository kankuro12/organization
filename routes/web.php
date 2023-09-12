<?php

use App\Http\Controllers\Back\NoticeController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/news', [HomeController::class,'news'])->name('news');
Route::get('/news/{slug}', [HomeController::class,'newsSingle'])->name('news.single');


Route::prefix('admin')->name('admin.')->group(function(){

    Route::prefix('slider')->name('slider.')->group(function(){
        Route::get('',[SliderController::class,'index'])->name('index');
        Route::match(['GET','POST'],'add',[SliderController::class,'add'])->name('add');
        Route::match(['GET','POST'],'edit/{slider}',[SliderController::class,'edit'])->name('edit');
        Route::get('del/{slider}',[SliderController::class,'del'])->name('del');
    });

    Route::prefix('notice')->name('notice.')->group(function(){
        Route::get('index/{type}',[NoticeController::class,'index'])->name('index');
        Route::match(['GET','POST'],'add/{type}',[NoticeController::class,'add'])->name('add');
        Route::match(['GET','POST'],'edit/{notice}',[NoticeController::class,'edit'])->name('edit');
        Route::get('del/{notice}',[NoticeController::class,'del'])->name('del');
        Route::get('render/{type}',[NoticeController::class,'render'])->name('render');
        Route::post('image/{type}',[NoticeController::class,'image'])->name('image');

    });

    Route::prefix('setting')->name('setting.')->group(function(){
        Route::match(['GET','POST'],'general',[SettingController::class,'general'])->name('general');
        Route::match(['GET','POST'],'donation',[SettingController::class,'donation'])->name('donation');

    });
});
