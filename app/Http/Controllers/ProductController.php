<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        //using latest() For fetch latest product
        return view('products.index', ['products' => product::latest()->paginate(4)]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        //validate data 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,pnggif|max:100000'

        ]);


        //upload image

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();

        return back()->withSuccess('product created !!!');





    }
    public function edit($id)
    {

        $product = Product::where('id', $id)->first();
        return view('products.edit', ['product' => $product]);
    }
    public function update(Request $request, $id)
    {
        //validate data 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,pnggif|max:100000'

        ]);

        $product = Product::where('id', $id)->first();


        if (isset($request->image)) {
            //upload image

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);

            $product->image = $imageName;

        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();

        return back()->withSuccess('product updated !!!');

    }
    public function destroy($id)
    {
        $product = product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('product deleted !!!');
    }
    public function show($id)
    {
        $product = product::where('id', $id)->first();
        return view('products.show', ['product' => $product]);
    }
}
