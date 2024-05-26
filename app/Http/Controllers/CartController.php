<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;

class CartController extends Controller
{

    /**
     * Store the cart item in database.
     */
    public function store(StoreCartRequest $request, Product $product)
    {
        // return $product;
        $cart = Cart::firstOrNew([
            'user_id' => auth()->id(),
            'product_id' => $product->id,
        ]);
        $cart->quantity = (is_null($cart->quantity)) ? $request->quantity : $cart->quantity + $request->quantity;
        if ($cart->save()) {
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'تمت أضافة "' . $product->name . '" إلى السلة.', 'm-dir' => 'rtl']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'فشلت إضافة المنتج إلى السلة.', 'm-dir' => 'rtl']);
        }
    }

    /**
     * Add the cart item to the session.
     */
    public function add(StoreCartRequest $request, Product $product)
    {
        // return $product;
        $cart = session()->get('cart');
        if (!isset($cart)) $cart = [];
        // return $cart;
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $request->quantity;
            $cart[$product->id]['total_price'] = $product->getPrice() * $cart[$product->id]['quantity'];
        } else {
            $cartItem = [
                'quantity' => $request->quantity,
                'total_price' => $request->quantity * $product->getPrice(),
                'product' => $product,
            ];
            $cart[$product->id] = $cartItem;
        }
        session(['cart' => $cart]);
        return redirect()->back()->with(['m-color' => 'success', 'message' => 'تمت أضافة "' . $product->name . '" إلى السلة.', 'm-dir' => 'rtl']);
    }

    /**
     * Remove the cart item from the session.
     */
    public function remove($id) {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session(['cart' => $cart]);
        return redirect()->back()->with(['m-color' => 'success', 'message' => 'تم حذف العنصر من السلة', 'm-dir' => 'rtl']);
    }

    /**
     * Remove the cart item from the database.
     */
    public function destroy(Cart $cartItem)
    {
        if ($cartItem->user_id == auth()->id()) {
            if ($cartItem->delete()) {
                return redirect()->back()->with(['m-color' => 'success', 'message' => 'تم حذف العنصر من السلة.', 'm-dir' => 'rtl']);
            } else {
                return redirect()->back()->with(['m-color' => 'danger', 'message' => 'فشل حذف العنصر من السلة.', 'm-dir' => 'rtl']);
            }
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'لم يتم العثور على العنصر', 'm-dir' => 'rtl']);
        }
    }
}
