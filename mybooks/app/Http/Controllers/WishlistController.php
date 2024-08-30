<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WishlistController extends Controller

{
    public function index()
    {
        $user = auth()->user();
        $wishlistBooks = $user->wishlistBooks; // تأكد من العلاقة بين المستخدم و الـ wishlist
        //dd('reached');
       return view('wishlist', compact('wishlistBooks'));
//        return redirect('/wishlist')->with('success', 'تم إضافة الكتاب إلى قائمة الرغبات.');

    }


    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);

        $user = auth()->user();
        $bookId = $request->input('book_id');
        if (!$user->wishlists()->where('book_id', $bookId)->exists()) {
            Wishlist::create([
                'user_id' => $user->id,
                'book_id' => $bookId,
            ]);
        }
        return redirect()->route('wishlist.index')->with('success', 'تم إضافة الكتاب إلى قائمة الرغبات.');
    }

}

