<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class testController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms=[1,2,3];
        $us=['sajjad','ali','tohid'];
        $merge=array_merge($rooms,$us);
        $rand=shuffle($merge);
        return view('test',compact('rand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Test $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Test $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Test $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Test $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }


    public function ImageUploader($file)
    {
        if ($file == null)
            return '../uploads/images/noimage.jpg';
        $filename = time() . "-" . $file->getClientOriginalName();
        //$path=public_path('/../uploads/images/');
        $path = public_path('uploads/images/');
        $file->move($path, $filename);
        return "uploads/images/". $filename;
    }


}
