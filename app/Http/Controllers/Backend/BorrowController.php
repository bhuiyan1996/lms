<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Reader;
use App\Models\Borrow;

class BorrowController extends Controller
{
    public function list(){

        $borrows = Borrow::with('getBook')->get();

        return view('backend.pages.borrow.borrow', compact('borrows'));
    }
    public function form()
    {
        $books = Book::all();
        $readers = Reader::all();
        return view('backend.pages.borrow.borrow-create', compact('books', 'readers'));
    }

    
    public function store(Request $request){
// dd($request);
        Borrow::create([
            // migration table -column name => input field name
            'reader_id'=>$request->reader_id,
            'book'=>$request->book,
            'date'=>$request->date,
            'reader_name' => $request->reader_name,
        ]);
        return redirect()->route('borrow.list');
    }
}
