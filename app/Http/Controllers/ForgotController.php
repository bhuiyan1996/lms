<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ForgotController extends Controller
{

    public function forgotdo()
    {

  
    //  $users->email;
    //  $request->email;
    //  if( $users->email==$request->email)
    //  {
        
    //     return view ('frontend.forgotpassdo');
    //  }
    //  else
    // {
    //     return redirect()->back();
    // }
    return view ('frontend.forgotpassdo');
      
    }

    public function forgotpass(Request $request) { 
        // $a=$request->email;
        
        $users= User::where('email',$request->email)->get();
        
      
     if( $users)
     {
        
        
        return view ('frontend.forgotForm',compact('$users'));
     }
     else
    {
        return redirect()->back();
    }
      
     
        // return view ('frontend.forgotpassdo',compact('users'));
    
     }
     public function forgotPassword(Request $request){
     

     }

  
}

// $users->update([
//     'password'=>$request->password,
// ]);
