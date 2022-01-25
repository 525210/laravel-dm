<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function shopList()
    {
        $products = Product::all();
//        $products = Product::query()->select()->where(['id' => 3])->get();
//        $products = Product::query()->limit(3)->offset(2)->get();
        return view('pet-shop.shop-page', [
           'products' => $products,
        ]);
    }

    public function shopIndex()
    {
        $randProducts = Product::query()->inRandomOrder()->limit(4)->get();
        $product = Product::query()->select()->where(['id' => 2])->get();
//        dd($product);
        return view('pet-shop/index', ['randProducts' => $randProducts, 'product' => $product]);
    }

    public function about()
    {
        return view('pet-shop.about-us');
    }

    public function contact()
    {
        return view('pet-shop.contact');
    }
}
