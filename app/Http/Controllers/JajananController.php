<?php

namespace App\Http\Controllers;

use App\Models\Jajanan;
use Illuminate\Http\Request;

class JajananController extends Controller
{
   public function index() 
   {
    $jajanans = Jajanan::all();
    return view('jajanans.index', compact('jajanans'));
   }

   public function show($id) 
   {
      $jajanans = Jajanan::find($id);
      
      if ($jajanans) {
         return view('products.show', compact('jajanans'));
     } else {
         return redirect()->route('jajanans.index')->with('error', 'Product not found');
     }
   }


}
