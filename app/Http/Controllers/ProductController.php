<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', [
            'categories' => $categories
        ]);
    }

    public function store()
    {
        # upload file
        $image = request('image');
        $filename = $image->getClientOriginalName(); // filename yg bakal disimpen di table
        $image->move(public_path('images/'), $image->getClientOriginalName());

        Product::create([
            'category_id' => request('category_id'),
            'name' => request('name'),
            'price' => request('price'),
            'description' => request('description'),
            'image' => $filename
        ]);

        return redirect('/products');
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('product.edit', [
            'product' => $product
        ]);
    }

    public function update($id)
    {
        $product = Product::where('id', $id)->first();
        $product->update([
            'category_id' => request('category_id'),
            'name' => request('name'),
            'price' => request('price'),
            'description' => request('description')
        ]);

        // direct ke halaman index
        return redirect('/product');
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();

        // direct ke halaman index
        return redirect('/product');
    }
}
