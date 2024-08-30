<?php

namespace App\Http\Controllers;

use App\Models\BorrowedBook;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);

        $user = auth()->user();
        $bookId = $request->input('book_id');

        // تحقق مما إذا كان الكتاب بالفعل مستعار من قبل المستخدم
        if (!$user->borrowedBooks()->where('book_id', $bookId)->exists()) {
            BorrowedBook::create([
                'user_id' => $user->id,
                'book_id' => $bookId,
            ]);
        }

        return redirect()->back()->with('success', 'Book borrowed successfully.');
    }
}
