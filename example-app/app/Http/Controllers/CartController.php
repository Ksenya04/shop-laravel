<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request, Product $product,)
    {
            $userId = Auth::user()->id;
            Cart::create([
                'user_id' => $userId,
                'product_id' => $product->id,
            ]);
            return redirect()->back();
    }

    public function showListAndAdress($id)
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $id)->with('product')->get();
        return view('cart', compact('carts', 'user'));
    }

    public function remove($id)
{
    $cartItem = Cart::find($id);
    if ($cartItem) {
        $cartItem->delete();
        return redirect()->route('buy', ['id' => auth()->id()])->with('success', 'Товар удален из корзины');
    }
    return redirect()->route('buy', ['id' => auth()->id()])->with('error', 'Товар не найден в корзине');
}
}
