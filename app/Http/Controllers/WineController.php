<?php

namespace App\Http\Controllers;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
  public function index() {
    $wines = Wine::all();
    dd($wines);
        return view ("wines", compact("wines"));
    
  }
}
