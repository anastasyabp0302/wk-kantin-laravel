<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
{
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity', 1); // Default quantity is 1

    $product = Product::find($productId);

    if (!$product) {
        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }

    $cart = session()->get('cart');

    // Jika keranjang belum ada, inisialisasi sebagai array kosong
    if (!$cart) {
        $cart = [];
    }

    // Jika produk sudah ada di keranjang, tambahkan jumlahnya
    if (isset($cart[$productId])) {
        $cart[$productId]['quantity'] += $quantity;
    } else {
        // Jika produk belum ada di keranjang, tambahkan produk baru
        $cart[$productId] = [
            'name' => $product->name,
            'quantity' => $quantity,
            'price' => $product->price,
            'image' => $product->image,
        ];
    }

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
}
public function showCart()
{
    $cart = session()->get('cart');

    if (!$cart) {
        $cart = [];
    }

    return view('cart.show', compact('cart'));
}
public function updateCart(Request $request)
{
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity');

    $cart = session()->get('cart');

    if (isset($cart[$productId])) {
        // Validasi jumlah produk jika perlu
        if ($quantity > 0) {
            $cart[$productId]['quantity'] = $quantity;
        } else {
            unset($cart[$productId]); // Hapus produk jika jumlahnya <= 0
        }

        session()->put('cart', $cart);
    }

    return redirect()->route('cart.show')->with('success', 'Keranjang berhasil diupdate.');
}
public function removeFromCart(Request $request)
{
    $productId = $request->input('product_id');

    $cart = session()->get('cart');

    if (isset($cart[$productId])) {
        unset($cart[$productId]);

        session()->put('cart', $cart);
    }

    return redirect()->route('cart.show')->with('success', 'Produk berhasil dihapus dari keranjang.');
}

}
