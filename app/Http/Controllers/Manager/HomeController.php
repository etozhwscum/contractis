<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Product;
// use App\Models\Category;

class HomeController extends Controller
{
    public function index(){

        // $products_count = Product::all()->count();
        // $categories_count = Category::all()->count();  
        return view('manager.home.index',[
            // 'products_count'=>$products_count,
            // 'categories_count'=>$categories_count
        ]);
    }
}
