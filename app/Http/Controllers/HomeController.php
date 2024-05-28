<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::with('products')->get();
        $images = Image::take(3)->get();
        return view('home', compact('categories', 'images'));
    }
}
