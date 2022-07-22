<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
  public function index()
  {
    $message = "Hello";
    return view('items/index', ['message' => $message]);
  }
}

