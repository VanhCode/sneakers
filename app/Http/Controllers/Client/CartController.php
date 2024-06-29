<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cartAdd(Request $request, $sneakerSlug)
    {
        try {
            $sneaker = Product::where('slug', $sneakerSlug)->firstOrFail();

            $cartSession = session()->get('cart', []);

            $cartKey = $sneaker->product_id . '-' . $request->size;

            $cartModel = Cart::firstOrNew(['user_id' => 1]);
            $cartModel->save();
            $cartId = $cartModel->cart_id;

            if (!isset($cartSession[$cartKey])) {
                $cartSession[$cartKey] = [
                    'product_id' => $sneaker->product_id,
                    'productSize' => $request->size,
                    'productQuantity' => $request->quantity
                ];

                $cartItem = new CartItem;
                $cartItem->cart_id = $cartId;
                $cartItem->product_id = $sneaker->product_id;
                $cartItem->size = $request->size;
                $cartItem->quantity = $cartSession[$cartKey]['productQuantity'];
                $cartItem->price = $sneaker->price;
                $cartItem->save();
            } else {
                $cartSession[$cartKey]['productQuantity'] += $request->quantity;

                $cartItem = CartItem::where('cart_id', $cartId)
                    ->where('product_id', $sneaker->product_id)
                    ->where('size', $request->size)
                    ->firstOrFail();

                $cartItem->cart_id = $cartId;
                $cartItem->product_id = $sneaker->product_id;
                $cartItem->size = $request->size;
                $cartItem->quantity = $cartSession[$cartKey]['productQuantity'];
                $cartItem->price = $sneaker->price;
                $cartItem->save();
            }

            session()->put('cart', $cartSession);

            return response()->json(['successAddCart' => true]);
        } catch (\Exception $e) {
            logger('Lỗi khi thêm vào giỏ hàng: ' . $e->getMessage());
            return response()->json(['errorAddCart' => true]);
        }
    }
}


