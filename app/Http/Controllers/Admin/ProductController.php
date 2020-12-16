<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TohidController;
use App\Models\Product;
use Gate;
use Illuminate\Http\Request;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(10);
        return view('Admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.product.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$this->ImageUploader($request['image']);
        Product::create([
            'name'=>$request->get('name'),
            'brand'=>$request->get('brand'),
            'body'=>$request->get('body'),
            'price'=>$request->get('price'),
            'discount'=>$request->get('discount'),
            'image'=>$file
        ]);
        return redirect(route('products.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('Admin.product.edit',compact('product'));
//       if(Gate::allows('edit_product',$product)){
//        return view('Admin.product.edit',compact('product'));
//       }
//       else{
//           return "<h1>access denied</h1>";
//       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request['image'] !=='') {
            $file = $this->ImageUploader($request['image']);
        }else {
            $file = $request->image;
        }
        $date=$request->all();
        $product->update($date);
//        Product::where('id',$product['id'])->update([
//            'name'=>$request->get('name'),
//            'brand'=>$request->get('brand'),
//            'body'=>$request->get('body'),
//            'price'=>$request->get('price'),
//            'discount'=>$request->get('discount'),
//            'image'=>$file,
//        ]);
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'));
    }
}
