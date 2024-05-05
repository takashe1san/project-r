<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // return $request;
        $category = new Category($request->validated());
        if($category->save()){
            return redirect()->route('category.index');
        } else {
            return redirect()->route('category.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $category->products;
        return view('dashboard.categories.products', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // return $category;
        if($category->delete()){
            return redirect()->route('category.index');
        } else {
            return redirect()->route('category.index');
        }
    }
}
