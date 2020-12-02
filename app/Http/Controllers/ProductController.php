<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required|min:3',
            'image' => 'required|mimes:jpeg,png',
            'price' => 'required|numeric',
            'additional_info' => 'required',
            'category' => 'required'
        ]);

        $image = $request->file('image')->store('public/product');

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price,
            'additional_info' => $request->additional_info,
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory,

        ]);

        session()->flash('error', 'Product created successfully');
        return redirect()->route('product.index');
    }

    public function loadSubcategories(Request $request, $id)
    {
        $subcategory = Subcategory::where('category_id', $id)->pluck('name', 'id');
        return response()->json($subcategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $image = $product->image;
        if ($request->image) {
            $image = $request->file('image')->store('public/product');
            Storage::delete($product->image);
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->additional_info = $request->additional_info;
        $product->price = $request->price;
        $product->image = $image;
        $product->save();
        notify()->success('Product updated successfully');
        return redirect()->route('product.index')->with('message', 'Product updated successfully');
    }*/


    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $filename = $product->image;
        if ($request->file('image')) {
            $image = $request->file('image')->store('public/product');
            Storage::delete($filename);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->image = $image;
            $product->price = $request->price;
            $product->additional_info = $request->additional_info;
            $product->category_id = $request->category;
            $product->subcategory_id = $request->subcategory;
            $product->save();
        } else {
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->additional_info = $request->additional_info;
            $product->category_id = $request->category;
            $product->subcategory_id = $request->subcategory;


            $product->save();
        }
        session()->flash('error', 'Product updated successfully');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $filename = $product->image;
        $product->delete();
        Storage::delete($filename);
        session()->flash('error', 'Cart updated successfully');
        return redirect()->route('product.index');
    }
}
