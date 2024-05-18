<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

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
        if($cart->save()){
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'تمت أضافة "' . $product->name . '" إلى السلة.', 'm-dir' => 'rtl']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'فشلت إضافة المنتج إلى السلة.', 'm-dir' => 'rtl']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
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
    public function destroy(Cart $cart)
    {
        //
    }
}
