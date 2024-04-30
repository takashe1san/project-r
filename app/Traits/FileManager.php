<?php
/* 
 * Assist Traits
*/
namespace App\Traits;

use Illuminate\Support\Facades\Storage;
// use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;


trait FileManager
{
    public function saveFile($file, $path)
    {
        return (!is_null($file))? $file->store($path) : null;
    }

    public function saveImage($file, $path)
    {
        if(is_null($file)) return null;
        
        $name = ('/' . Str::random(40) . '.webp'); 
        
        if(!Storage::exists($path)){
            Storage::makeDirectory($path);
        }

        // $image = ImageManagerStatic::make($file)->save(storage_path('app/' . $path . $name),null,'webp');

        return (!is_null($file))? ($path . $name ) : null;
    }

    public function deleteFile($file)
    {
        if(is_null($file)) return 1;
        if(file_exists(public_path($file))){
            if(unlink($file)){
                return 1;
            } else {
                return 0;
            }
        } else {
            return -1;
        }
    }
}