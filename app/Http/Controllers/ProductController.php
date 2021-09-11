<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
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
            'img' => 'required|image|mimes:png',
            'color' => 'required|string',
            'size' => 'required|string',
            'rating' => 'required|int',
            'description' => 'required|min:10|max:1000',
            'amount' => 'required',
        ]);

        if ($request->hasFile('img')) {
            //Get filename ...
            $filename = $request->img->getClientOriginalName();
        }

        $request->img->storeAs('products', $filename,'public');

        // dd($request->filename);

        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'img' => $filename,
            'color' => $request->color,
            'size' => $request->size,
            'rating' => $request->rating,
            'description' => $request->description,
            'amount' => $request->amount,
        ]);

        redirect()->route('admin.storeproducts')->withMessage('Product has been stored successfully !');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view()->with(['product' => $product]);

    }

}
