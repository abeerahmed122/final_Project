<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(5); // عرض 10 كتب في كل صفحة
        return view('book.index', compact('books'));
    }
    public function show()
    {
        $books = Book::all(); // عرض 10 كتب في كل صفحة
        return view('book.show', compact('books'));
    }


    function create(){
        return view('book.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|numeric',
            'price' => 'required|numeric',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->published_year = $request->input('published_year');
        $book->price = $request->input('price');

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/covers', $filename);
            $book->cover_image = $filename;
        }

        $book->save();
//return 'success';
        return redirect()->route('books.show', $book->id)->with('success', 'Book added successfully.');
    }


    function edit(Book $book){
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|numeric',
            'price' => 'required|numeric',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->published_year = $request->input('published_year');
        $book->price = $request->input('price');

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/covers', $filename);
            $book->cover_image = $filename;
        }

        $book->save();

        return redirect()->route('books.show')->with('success', 'Book updated successfully.');
    }



    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.show')->with('success', 'Book deleted successfully.');
    }





}

