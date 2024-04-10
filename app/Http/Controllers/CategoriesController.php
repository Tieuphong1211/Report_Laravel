<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct(){

    }
    // Show list (GET)
    public function index(){
        return view('category/list');
    }
//    lấy ra 1 category (GET)
    public function getCategory($id){
        return view('category/edit');
    }
//    cập nhât 1 category (POST)
    public function updateCategory($id){
        return 'Submit update: '.$id;
    }
//    Add data (GET)
    public function addCategory(){
        return view('category/add');
    }
//    handle data vào category (POST) hoi them
    public function handleCategory(){
        redirect(route('category.add'));
        return 'Submit handle';
    }
//    xóa 1 category (DELETE)
    public function deleteCategory($id){
        return 'Submit delete: '.$id;
    }
}
