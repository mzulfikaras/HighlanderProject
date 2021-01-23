<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getHome(){
        return view('user.pages.home.home');
    }

    public function getProduct(){
        return view('user.pages.product.product');
    }

    public function getProductDetails(){
        return view('user.pages.product.product-details');
    }
}