<?php

namespace App\Http\Controllers;

use App\Models\Title;
use App\Models\User;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\View;
use Symfony\Component\HttpFoundation\Cookie;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
        $data = $request->session()->all(); // phieen củ
        //
     return $data['roles'];
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

    }
    public function login(Request $request)
    {
        //
       $name= User::where('email', '=',$request->email  )->first();
        
        if($name != null && $name->password ==$request->password )   
        $user = User::with('roles')->find(1); 
       else
       {

        if($request->email ==null|| $request->password==null)
        $errors = "Cần nhập đầy đủ thông tin";
        else if($name ==null)
        $errors = "Tài khoản không tồn tại vui lòng đăng ký";
        else if ($name->password !=$request->password)
        $errors = "Mật khẩu sai";
        else 
        $errors ='';
     // Trả về lỗi cơ bản khi đăng nhập
       return redirect()->action([HomeController::class,'loginerror'],['errors'=>$errors ]);
       }
     
      $role = $user->roles;
      //[{"id":1,"name":"admin","created_at":null,"updated_at":null,"pivot":{"user_id":1,"role_id":1}}]
    //   $request->session()->flush();
    //   return $request->session()->all() ;
      
        session(['roles'=> $name->id]);
       session(['nameuser'=>$name->name]);
        
        // echo 'co';
       
        return redirect()->action([HomeController::class,'store']);
        // truy suat role,
      
        
    }
    public function register(Request $request)
    {
      
        
       
        if($request->email ==null|| $request->password==null || $request->name==null||$request->repassword==null)
        $errors = "Cần nhập đầy đủ thông tin";
        else if ($request->repassword !=$request->password)
        $errors = "Mật khẩu không khớp";
        else if( User::where('email', '=',$request->email  )->first() != null)          
        $errors = "Tài khoản đã được đăng ký trước đó"   ;  
        else 
        $errors ='';
     // Trả về lỗi cơ bản khi đăng nhập
     if($errors != '')
       return redirect()->action([HomeController::class,'registererror'],['errors'=>$errors ]);
       
       foreach(Title::all() as $title)
        {
            if($title->name == $request->title)
            {
            $titleid= $title->id;
           
            break;
            }
        };
       $id = DB::table('users')->insertGetId([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        
        'id_type' => $titleid,
        'created_at'=> now(),
        'updated_at' =>now(),
       ]);
       $user = User::find($id);
       $roleIds = 3;
       $user->roles()->attach($roleIds);
        
       session(['roles'=> $user->id]);
       session(['nameuser'=>$user->name]);
       return redirect()->action([HomeController::class,'store']);

       
    }
    public function __construct()
    {

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
