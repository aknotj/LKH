<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
      $validated = $request->validate([
          'name' => 'required',
          'description' => 'required|max:200',
          'price' => 'required|max:10',
          'category' => 'required',
          'img_path' => 'required'
        ]);
      $product->name = $request->name;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->stock = $request->stock;
      $product->category = $request->category;
      if ($request->hasfile('img_path')){
        $img = $request->file('img_path');
        $extension = $request->img_path->getClientOriginalExtension();
        $imgName = 'product'.$product->id.'_'.time().'.'.$extension;
        $img = $request->img_path->storeAs('',$imgName,'public');
        $product->img_path = $imgName;
      }
      
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

      $oldImg = $product->img_path;
      if ($img = $request->file('img_path')){
        if (Storage::disk('public')->exists($oldImg)) {
          Storage::disk('public')->delete($oldImg);
        }
        $extension = $request->img_path->getClientOriginalExtension();
        $imgName = 'product'.$product->id.'_'.time().'.'.$extension;
        $img = $request->img_path->storeAs('',$imgName,'public');
        $product->img_path = $imgName;
      } else {
        $product->img_path = $oldImg;
      }

      $product->name = $request->name;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->stock = $request->stock;

      $product->update();
      return redirect('products/'.$id);
    }

  public function destroy($id)
    {
      $product = Product::find($id);
      $img = $product->img_path;
      if (Storage::disk('public')->exists($img)) {
        Storage::disk('public')->delete($img);
      }
      $product->delete();
      return redirect('/products');
    }
}
