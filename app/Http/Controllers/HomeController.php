<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
       
        $topic = Topic::all();
        
        return view('home',['topic'=> $topic]);
       
    }
    public function store(Request $request){
        if($request->session()->has('roles') ==false)    
        {
            return redirect('login');
     
        }
        $topic = Topic::all();
        
        return view('home',['topic'=> $topic]);
     
      
    }
   public function logout(Request $request){
    $request->session()->flush();
 
    return redirect('login');
   }
   public function loginerror(Request $request)
   {

  
    return view('categories/login',['errors'=>$request['errors']]);
   }
   public function registererror(Request $request){
    return view('categories/register',['errors'=>$request['errors']]);

   }
}
