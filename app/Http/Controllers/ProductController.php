<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');
        return view('pet-shop/index', [
            'randProducts' => $randProducts,
            'product' => $product,
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function about()
    {
        return view('pet-shop.about-us');
    }

    public function contact()
    {
        return view('pet-shop.contact');
    }

    public function addCart(Request $request)
    {
        $product = Product::query()->where(['id' => $request->id])->first();
        $sessionId = Session::getId();
        \Cart::session($sessionId)->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty ?? 1,
            'attributes' => [
              'image' => $product->image,
            ],
        ]);

        $cart = \Cart::getContent();

        return redirect()->back();
    }
}
