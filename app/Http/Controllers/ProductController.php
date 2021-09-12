<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            
            $request->img->storeAs('products', $filename,'public');
        }

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

        return redirect()->route('admin.products')->withMessage('Product has been stored successfully !');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.show')->with(['product' => $product]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'category_id' => 'required|int',
            'name' => 'required|string',
            'img' => 'image|mimes:png',
            'color' => 'required|string',
            'size' => 'required|string',
            'rating' => 'required|int',
            'description' => 'required|min:10|max:1000',
            'amount' => 'required',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('img')) {
            //Get filename ...
            $filename = $request->img->getClientOriginalName();
            if ($product->img) {
                Storage::delete(['/public/products/'. $product->img]);
            }
            $request->img->storeAs('products', $filename,'public');
        }
        else{
            $filename = $product->img;
        }
        
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->img = $filename;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->rating = $request->rating;
        $product->description = $request->description;
        $product->amount = $request->amount;
        
        $product->save();

        return redirect()->route('admin.products')->withMessage('Product has been updated successfully !');
        
    }

    public function destroy($id)
    {   
        $product = Product::findOrFail($id);

        return view('admin.product.delete')->with(['product' => $product]);

    }

    public function delete($id)
    {
        
        $product = Product::findOrFail($id);
        
        if ($product->img) {
            
            Storage::delete(['/public/products/'. $product->img]);
        }
        $product->delete();

        return redirect()->route('admin.products')->withMessage('Product has been deleted successfully !');


    }

}
