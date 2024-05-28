<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::get();
        return view('dashboard.images.index', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImageRequest $request)
    {
        $image = new Image($request->validated());
        if($image->save()) {
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'Image saved successfully', 'm-dir' => 'ltr']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'failed to save image', 'm-dir' => 'ltr']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        if($image->delete()) {
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'Image deleted successfully', 'm-dir' => 'ltr']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'failed to delete image', 'm-dir' => 'ltr']);
        }
    }
}
