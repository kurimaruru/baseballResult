<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage as Image;
use Stringable;

class ImageService
{
    public static function upload($image,$folderName){
        $file = $image;

        $fileName = uniqid(rand().'_');
        $extension = $file->extension();
        $fileNameToStore = $fileName. '.' . $extension;
        $resizeImage = Image::make($file)->resize(1000,720)->encode();
        Storage::put('public/' . $folderName . '/' . $fileNameToStore,$resizeImage);

        return $fileNameToStore;
    }
}
