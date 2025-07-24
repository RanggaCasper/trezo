<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();

        return Inertia::render('CartPage', [
            'cartItems' => $cartItems,
            'title' => 'Keranjang Belanja'
        ]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        try {
            $user = Auth::user();

            $cartItem = Cart::where('user_id', $user->id)
                ->where('product_id', $request->product_id)
                ->first();

            if ($cartItem) {
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'product_id' => $request->product_id,
                    'quantity' => 1,
                ]);
            }

            return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors([
                'error' => 'Terjadi kesalahan saat menambahkan produk ke keranjang.',
            ]);
        }
    }

    public function increaseQty(Request $request)
    {
        $cartItem = Cart::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $cartItem->quantity += 1;
        $cartItem->save();

        return redirect()->back()->with('success', 'Jumlah item berhasil ditambahkan.');
    }

    public function decreaseQty(Request $request)
    {
        $cartItem = Cart::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if ($cartItem->quantity > 1) {
            $cartItem->quantity -= 1;
            $cartItem->save();
        } else {
            $cartItem->delete();
        }

        return redirect()->back()->with('success', 'Jumlah item berhasil dikurangi.');
    }

    public function remove(Request $request)
    {
        $cartItem = Cart::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->first();

        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->back()->with('success', 'Item berhasil dihapus dari keranjang.');
    }
}
