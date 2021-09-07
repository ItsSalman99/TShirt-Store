<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->limit(4)->get();
        return view('pages.index')->with(['products' => $products]);
    }

    public function shop()
    {
        $products = Product::paginate(8);

        return view('pages.shop')->with(['products'=>$products]);
    }

    public function product($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.product')->with(['product' => $product]);
    }

}
