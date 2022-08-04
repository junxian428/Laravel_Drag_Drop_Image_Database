<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;

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


Route::get('/image_upload', function () {
    return view('image_upload');
});


//Route::post('/addProduct/store',[  // define your self
    //'uses'=>'App\Http\Controllers\ProductController@store',
    //'as'=>'addProduct.store'    // check the charactor when you copy paste from PPT
//]);
Route::post('/image_upload',[  // define your self
    'uses'=>'App\Http\Controllers\ImageController@upload',
    'as'=>'image.upload'    // check the charactor when you copy paste from PPT
]);

Route::get('upload-image', [UploadImageController::class, 'index']);
//Route::post('save', [UploadImageController::class, 'save']);

Route::post('/save',[  // define your self
    'uses'=>'App\Http\Controllers\UploadImageController@save',
    'as'=>'save.upload'    // check the charactor when you copy paste from PPT
]);