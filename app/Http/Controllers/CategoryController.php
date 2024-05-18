<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
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
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'category added successfully.', 'm-dir' => 'ltr']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'failed to add category', 'm-dir' => 'ltr']);
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
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // return $category;
        // return $request->validated();
        if($category->update($request->validated())){
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'category updated successfully', 'm-dir' => 'ltr']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'failed to update category', 'm-dir' => 'ltr']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // return $category;
        if($category->delete()){
            return redirect()->route('category.index')->with(['m-color' => 'success', 'message' => 'category deleted successfully', 'm-dir' => 'ltr']);
        } else {
            return redirect()->route('category.index')->with(['m-color' => 'danger', 'message' => 'failed to delete category', 'm-dir' => 'ltr']);
        }
    }
}
