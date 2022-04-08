<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Product;
// use App\Models\Category;

class CreateTenderController extends Controller
{
    public function index(){

        // $products_count = Product::all()->count();
        // $categories_count = Category::all()->count();  
        return view('tender.create.index',[
            // 'products_count'=>$products_count,
            // 'categories_count'=>$categories_count
        ]);
    }
}
