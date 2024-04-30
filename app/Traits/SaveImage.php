<?php
/* 
 * Assist Traits
*/
namespace App\Traits;

trait SaveImage
{
    public function setImageAttribute($image)
    {
        if(isset($this->image)){
            $this->deleteFile($this->image);
        }
        $this->attributes['image'] = $this->saveFile($image, 'images/' . $this->getTable());
    }

    public function saveFile($file, $path)
    {
        return (!is_null($file))? $file->store($path) : null;
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

