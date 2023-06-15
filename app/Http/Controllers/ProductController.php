<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate();
        return view('products.index', ['products' => $products]);
    }

    public function create(Product $product)
    {
        return view('products.create', ['product' => $product]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description'  => 'required',
            'flavor'  => 'required',
            'price'  => 'required'
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description'  => $request->description,
            'flavor'  => $request->flavor,
            'price'  => $request->price,
        ]);

        return redirect()->route('products.edit', $product->id);
    }


    public function update(Request $request, Product $product){
        $request->validate([
            'name' => 'required',
            'description'  => 'required',
            'flavor'  => 'required',
            'price'  => 'required',
            'image_path' => 'required'
        ]);

        $product->update([
            'name' => $request->name,
            'description'  => $request->description,
            'flavor'  => $request->flavor,
            'price'  => $request->price,
            'image_path' => $request->image_path
        ]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }
}
