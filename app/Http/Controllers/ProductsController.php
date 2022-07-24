<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function index()
    {
      $products = Product::all();
      return view('products/index', ['products' => $products]);
    }

  public function create()
    {
      return view('products/create');
    }

  public function store(Request $request)
    {
      $product = new Product;
      $product->name = $request->name;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->stock = $request->stock;
      $product->stock = $request->stock;
      $product->category = $request->category;
      $imgName = $request->img_path->getClientOriginalName();
      $img = $request->img_path->storeAs('',$imgName,'public');
      $product->img_path = $img;
      $product->save();

      return redirect('/products');
    }

  public function show($id)
    {
      $product = Product::find($id);
      return view('products.show', ['product' => $product]);
    }

  public function edit($id)
    {
      $product = Product::find($id);
      return view('products.edit', ['product' => $product]);
    }

  public function update(Request $request, $id)
    {
      $product = Product::find($id);
      $product->name = $request->name;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->stock = $request->stock;
      $product->save();
      return redirect('products/'.$id);
    }

  public function destroy($id)
    {
      $product = Product::find($id);
      $product->delete();
      return redirect('/products');
    }
}
