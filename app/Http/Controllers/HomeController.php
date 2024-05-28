<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Feedback;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::with('products')->get();
        $images = Image::take(3)->get();
        $feedbacks = Feedback::with('user')->get();
        return view('home', compact('categories', 'images', 'feedbacks'));
    }
}
