<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function welcome(){

    }
    public function home(){      
        // Fetch the latest products
        $products = Product::latest()->paginate(10);
        return view('home', compact('products'));
    }
    public function store(){
        // Fetch the latest products
        $products = Product::latest()->paginate(10);
        return view('store', compact('products'));
    }
    public function create(){
        return view('create');
    }
    public function edit(){
        return view('edit');
    }
}
