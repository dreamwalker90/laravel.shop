<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function ImageUploader($file)
    {
        if($file == null)
            return '../uploads/images/noimage.jpg';
        $filename=time()."-".$file->getClientOriginalName();
//        $path=public_path('/../uploads/images/');
        $path='assets/images/uploaded/';
        $file->move($path,$filename);
        return $path.$filename;
    }
}
