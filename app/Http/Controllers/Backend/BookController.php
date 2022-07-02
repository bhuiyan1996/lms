<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list(){

        $books=Book::paginate(5);
        return view('backend.pages.books',compact('books'));
    }


    public function form()
    {
        $categories=Category::all();
//        dd($categories);
        return view('backend.pages.book.form',compact('categories'));
    }



    public function store(Request $request){

        Book::create([
            // migration table -column name => input field name
            'name'=>$request->book_name,
            'category_id'=>$request->category,
            'price'=>$request->book_price,
            'quantity'=>$request->book_qty,
            'description'=>$request->book_desc,
        ]);
        return redirect()->route('book.list');
    }
}
