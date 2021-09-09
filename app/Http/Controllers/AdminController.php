<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function products()
    {

        $products = Product::paginate(8);

        return view('admin.product.index')->with(['products' => $products]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|int',
            'name' => 'required|string',
            'img' => 'required|mimes:png',
            'color' => 'required|string',
            'size' => 'required|string',
            'rating' => 'required|int',
            'description' => 'required|min:10|max:1000',
            'amount' => 'required',
        ]);
        dd($request->all());
        // Product::create([
        //     'category_id' => $request->category_id,
        //     'name' => $request->name,
        //     'img' => $request->img,
        //     'color' => $request->color,
        //     'size' => $request->size,
        //     'rating' => $request->rating,
        //     'description' => $request->description,
        //     'amount' => $request->amount,
        // ]);

    }


}
