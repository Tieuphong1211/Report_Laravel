<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;



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

Route::get('/abc', function(){
    return 'Hello World';
});


Route::get('/xyz/{id}', function($id){
    return 'so thu tu = '.$id;
});


Route::get('/test_http_request', function(){
    return view('form');
});


Route::post('/test_http_request', function(){
    return 'Post Request';
});

Route::put('/test_http_request', function(){
    return 'Put Request';
});



//Khai bao cho Controller
Route::group(['prefix'=>'categories'],function() {
    //List category
    Route::get('/index', [CategoriesController::class, 'index']);

    //Lấy ra 1 category
    Route::get('/getCategory/{id}', [CategoriesController::class, 'getCategory']);

    //Cap nhat 1 category
    Route::post('/updateCategory/{id}', [CategoriesController::class, 'updateCategory']);

    //Add data
    Route::get('/addCategory', [CategoriesController::class, 'addCategory']);

    //handle data vào category
    Route::post('/handleCategory', [CategoriesController::class, 'handleCategory']);

    //Xóa 1 category
    Route::delete('/deleteCategory/{id}', [CategoriesController::class, 'deleteCategory']);
});

// Neu categories la ten nhom thi khi go path chi co categories lai ko dc mac du tren youtube lai duoc
// Trong file add.php khi gan token bi loi phan action of form nen ko load dc trang
// dat ten trong route()

//View
Route::get('viewHome', function(){
    $english = 'hello';
    $japanies = 'こんにちは';

//    C1
//    $dataView = [
//        'englishData' => $english,
//        'japaniesData' => $japanies
//    ];
//
//    return view('home', $dataView);

//    C2
    return view('home', compact('english', 'japanies'));
});




