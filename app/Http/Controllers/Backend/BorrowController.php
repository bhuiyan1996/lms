<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Reader;

class BorrowController extends Controller
{
    public function list(){

        return view('backend.pages.borrow.borrow');
    }
    public function form()
    {
        $books = Book::all();
        $readers = Reader::all();
        return view('backend.pages.borrow.borrow-create', compact('books', 'readers'));
    }

    
    public function store(Request $request){

        Book::create([
            // migration table -column name => input field name
            'reader'=>$request->reader,
            'book'=>$request->book,
            'date'=>$request->date,
        ]);
        return redirect()->route('borrow.list');
    }
}
