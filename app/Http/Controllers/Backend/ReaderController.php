<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function list(){

       $readers= Reader::all();
        return view('backend.pages.reader.readers',compact("readers"));
    }

    public function form()
    {
        
        return view('backend.pages.reader.reader-create');
    }

    public function store(Request $request){

        // dd($req->all());

        Reader::create([
            // migration table -column name => input field name
            'name'=>$request->reader_name,
            'refid'=>$request->reader_id,
            'phone'=>$request->reader_phn,
            'email'=>$request->reader_email,
            'address'=>$request->reader_address,
            'gender'=>$request->gender,
        ]);
        return redirect()->route('reader.list');
    }
    public function views($id) { 

        $reader= Reader::find($id);
 
        return view ('backend.pages.reader.show',compact('reader'));
 
     }
     public function delete($id){

             $reader =  Reader::find($id)->delete();
            return redirect()->back();
        }
        public function edit($id){

            $reader=Reader::find($id);
            return view('backend.pages.reader.reader_edit',compact('reader'));
            
        }

        public function update(Request $request,$id){

            $reader=Reader::find($id);

            $reader->update([
            'name'=>$request->reader_name,
            'phone'=>$request->reader_phn,
            'email'=>$request->reader_email,
            'address'=>$request->reader_address,

        ]);

        return redirect()->route('reader.list');
        }

     }


    



