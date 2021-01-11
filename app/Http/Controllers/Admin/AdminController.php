<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class AdminController extends Controller
{

    public function ImageUploader($file, $height = null, $width = null)
    {

        if ($height == null && $width == null) {
            if ($file == null) {
                return '../uploads/images/noimage.jpg';
            }
            $filename = time() . "-" . $file->getClientOriginalName();
//        $path=public_path('/../uploads/images/');
            $path = 'assets/images/uploaded/';
            $file->move($path, $filename);
            return $path . $filename;
        } else {
            $filename = time() . "-" . $file->getClientOriginalName();
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize($height, $width);
            $path='assets/images/resized/';
            if (!file_exists($path)) {
                mkdir($path, 666, true);
            }
            $image_resize->save($path . $filename);
            return $path . $filename;
        }
    }
}
