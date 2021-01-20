<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('Admin.product.index', compact('products'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $this->ImageUploader($request['image'], 50, 50);
        $product = Product::create([
            'name' => $request->get('name'),
            'brand' => $request->get('brand'),
            'body' => $request->get('body'),
            'price' => $request->get('price'),
            'discount' => $request->get('discount'),
            'image' => $file,
            'user_id' => Auth::id(),
        ]);
        return redirect(route('products.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
//        $user=User::where('id',$product['user_id'])->first();
//        $user=User::find($product['user_id']);
//        $user = $product->user;


        return view('Admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('Admin.product.edit', compact('product'));
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
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request['image'] !== '') {
            $file = $this->ImageUploader($request['image'], 50, 50);
        } else {
            $file = $request->image;
        }
        $date = $request->all();
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
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'));
    }

    public function gallery(Request $request)
    {
        $id = $request->get('id');
        $product = Product::findOrFail($id);
        return view('Admin.product.gallery', compact('product'));

    }

    public function upload(Request $request, Product $product)
    {
        $id = $request->get('id');
        $files = $request->file('file');
        $name = rand() . "_" . $id . "_" . $files->getClientOriginalName();
        $path = 'assets/images/uploaded/';
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        //valid extension
        $valid_extensions = ['jpeg', 'jpg', 'png', 'pdf'];

        // getting file extension
        $file_extension = $files->getClientOriginalExtension();

        if (in_array(strtolower($file_extension), $valid_extensions)) {
            $files->move($path, $name);
                $productImage = new ProductImage();
                $productImage->product_id = $id;
                $productImage->url = $name;
                $productImage->save();

        }
    }
}
