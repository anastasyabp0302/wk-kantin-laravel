<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jajanan;

class JajananController extends Controller
{
   public function index() 
   {
    $jajanans = Jajanan::all();
    return view('jajanans.index', compact('jajanans'));
   }

   public function create()
   {
     return view('jajanans.create');
   }

   public function store(Request $request)
   {
     $request->validate([
        'nama' => 'required',
        'harga' => 'required|integer',
        'gambar' => 'required|image|mimes:jpg,png,jpg,gif,svg|max:2048',
     ]);

     $imageName = time().'.'.$request->gambar->extension();
     $request->gambar->move(public_path('images'), $imageName);

     Jajanan::create([
        'nama' => $request->nama,
        'harga' => $request->harga,
        'gambar' => $request-> $imageName,
        
     ]);

     return redirect()->route('jajanans.index')
                      ->with('success', 'Jajanan created successfully.');
   }
}
