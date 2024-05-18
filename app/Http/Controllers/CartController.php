<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;

class CartController extends Controller
{

    /**
     * Store a newly created resource in storage.
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
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
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
