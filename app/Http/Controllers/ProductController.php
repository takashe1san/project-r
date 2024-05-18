<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeProductImageRequest;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request, Category $category)
    {
        // return $category;
        if($category->products()->create($request->validated())){
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'product stored successfully', 'm-dir' => 'ltr']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'failed to store product', 'm-dir' => 'ltr']);
        }
    }

    public function changeImage(ChangeProductImageRequest $request, Product $product){
        // return $product;
        if($product->update($request->validated())){
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'product image changed successfully', 'm-dir' => 'ltr']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'failed to change product image', 'm-dir' => 'ltr']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // return $request;
        if($product->update($request->validated())){
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'product updated successfully', 'm-dir' => 'ltr']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'failed to update product', 'm-dir' => 'ltr']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if($product->delete()){
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'product deleted successfully', 'm-dir' => 'ltr']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'failed to delete product', 'm-dir' => 'ltr']);
        }
    }
}
