<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function aboutus(){
        return view('about-us');
    }

    public function Welcome(){
        $categories=Category::all();
        $companies=Company::all();
//        $products=Product::all();
        return view('welcome',compact('categories','companies'));
    }
    public function contectUs(){
        return view('contect-us');
    }
    public function terms(){
        return view('Terms');
    }
}
