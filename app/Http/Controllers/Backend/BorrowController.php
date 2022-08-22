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

        $borrows = Borrow::with('getBook','getreader')->get();
        

        return view('backend.pages.borrow.borrow', compact('borrows'));
    }
    public function form()
    {
        $books = Book::all();
        $readers = Reader::all();
        return view('backend.pages.borrow.borrow-create', compact('books', 'readers'));
    }

    public function store(Request $request){

        Borrow::create([
            // migration table -column name => input field name
            'reader_id'=>$request->reader_id,
            // 'reader_name'=>$request->reader_name,
            'book'=>$request->book_name,
            'date'=>$request->date,
            
        ]);

        $reader=Reader::where ('id',$request->reader_id)->first();
        // dd($reader);
        $reader->update([
            'status'=>'Active'
        ]);

        // $reader
        $book=Book::find($request->book_name)->decrement('total');
      
        return redirect()->route('borrow.list', compact('book'));
    }
    
    public function delete($id){
       
        $borrow= Borrow::find($id);
       Book::find($borrow->book)->increment('total');

    //    $reader=Reader::where ($borrow->book)->first();
    //    // dd($reader);
    //    $reader->update([
    //        'status'=>'Inctive'
    //    ]);

       $borrow->delete();

        return redirect()->back();
    }
    public function search(Request $request){

    //    dd($request->date);
//        dd(request()->product);

        $borrows=Borrow::where('date','like','%'.$request->date.'%')->get();
        // dd($request->date);
         return view('backend.pages.borrow.search',compact('borrows'));


    }

}
