<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show()
{
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }
}

    public function show2()
{
    {
        $products = Product::all();
        return view('sale', compact('products'));
    }
}

    public function show3()
{
    {
        $products = Product::all();
        return view('catalog', compact('products'));
    }
}

    public function show4()
{
    {
        $products = Product::all();
        return view('catalog-ytvar', compact('products'));
    }
}

    public function show5()
{
    {
        $products = Product::all();
        return view('catalog-tea', compact('products'));
    }
}

    public function show6()
{
    {
        $products = Product::all();
        return view('catalog-smesi', compact('products'));
    }
}
}
