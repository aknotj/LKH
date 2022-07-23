<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
  public function index()
    {
      $items = Item::all();
      return view('items/index', ['items' => $items]);
    }

  public function create()
    {
      return view('items/create');
    }

  public function store(Request $request)
    { 
      $item = new Item;
      $item->name = $request->name;
      $item->description = $request->description;
      $item->price = $request->price;
      $item->stock = $request->stock;
      $item->save();
      
      return redirect('/items');
    }

  public function show($id)
    {
      $item = Item::find($id);
      return view('items.show', ['item' => $item]);
    }

  public function edit($id)
    {
      //
    }

  public function update(Request $request, $id)
    {
      //
    }

  public function destroy($id)
    {
      //
    }

}

