<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::paginate(10);
        return view('Admin.slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$this->ImageUploader($request['image'],20,20);
        $slider=Slider::create([
            'title'=>$request->get('title'),
            'url'=>$request->get('url'),
            'image'=>$file
        ]);
        return redirect(route('slider.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('Admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if ($request['image']){
           $img=$this->ImageUploader($request['image'],20,20);
           unlink($slider->image);
        }else{
           $img=$request->image;
        }
        $data=$request->all();
        $data['image']=$img;
        $slider->update($data);
        return view('Admin.slider.edit',compact('slider'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        unlink($slider->image);
        return back();
    }
}
