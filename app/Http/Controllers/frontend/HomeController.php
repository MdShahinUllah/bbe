<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class HomeController extends Controller
{
//    public function index(){
//        return view('')
//    }
public function index(){
    return view('frontend.partials.home');
}

public function aboutUs(){
    return view('frontend.pages.about-us');
}

public function cart(){
    return view('frontend.pages.cart');
}

public function checkout(){
    return view('frontend.pages.checkout');
}

public function contactUs(){
    return view('frontend.pages.contact-us');
}

public function shop(){
    return view('frontend.pages.shop');
}
}

