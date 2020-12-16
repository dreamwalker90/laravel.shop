<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TohidController extends Controller

{
        public function ImageUploader($file)
        {
            if($file == null)
                return '../uploads/images/noimage.jpg';
            $filename=time()."-".$file->getClientOriginalName();
            //$path=public_path('/../uploads/images/');
            $path=public_path('/uploads/images');
            $file->move($path,$filename);
            return $path.$filename;
        }
    }

