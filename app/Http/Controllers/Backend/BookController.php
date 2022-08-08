<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function list(){
// dd('hi');
        $books=Book::with('getCategory')->paginate(10);
        return view('backend.pages.books',compact('books'));

    

    }


    public function form()
    {
        $categories=Category::all();
//        dd($categories);
        return view('backend.pages.book.form',compact('categories'));
    }



    public function store(Request $request){
        
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileRename="book_".rand(0,1000000).date('Ymdhis').".".$file->getClientOriginalExtension();
            $file->storeAs('book',$fileRename);//store image into project
        }

        Book::create([
            // migration table -column name => input field name
            'name'=>$request->book_name,
            'price'=>$request->book_price,
            'quantity'=>$request->book_qty,
            'category'=>$request->category,
            'total'=>$request->book_qty,
            'image'=>$fileRename,
            // 'total_book'=>$request->book_desc,
        ]);
    //    dd($request)->Y;
        return redirect()->route('book.list');
    }


    
    public function views($id) { 

       $book= Book::find($id);

       return view ('backend.pages.book.show',compact('book'));

    }

public function delete($id){

        $book= Book::find($id)->delete();

        return redirect()->back();
}

 public function edit($id) { 

    $book= Book::find($id);
 
    return view ('backend.pages.book.edit',compact('book'));

 }

 public function update(Request $request,$id)
 {
        $book=Book::find($id);
        $book->update([
            'name'=>$request->name,
            'price'=>$request->book_price,
            'total'=>$request->book_qty,
            // 'description'=>$request->book_desc,
        ]);

        return redirect()->route('book.list');
 }





}
