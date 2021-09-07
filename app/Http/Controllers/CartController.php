<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function addtoCart($id,Request $request)
    {
        $product = Product::findOrFail($id);
        $cart = Cart::add($product->id,$product->name,$request->qty,$product->amount,[ 'size' => $product->size, 'color' => $product->color]);
        if ($cart == null) {
            return abort(404);
        }

        return redirect()->route('cart.index')->withMessage('Your Product has been added to the cart successfully !');

    }

    public function updateCart($rowId,Request $request)
    {
        Cart::update($rowId,$request->qty);

        return redirect()->route('cart.index')->withMessage('Item updated successfully !');
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);

        return redirect()->route('cart.index')->withMessage('Item removed successfully !');

    }

    public function destroy()
    {
        Cart::destroy();

        return redirect()->route('cart.index')->withMessage('Your cart is now empty !');
    }

}
