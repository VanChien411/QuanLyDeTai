<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\User;

class RoleController extends Controller
{
    //
    function insertrole(Request $request)
    {
      
        $errors = '';
        $rank = '';
       $user1 =User::find(session()->get('roles')); 
        $ranks = ['admin','manager','user'];
        for($i=0 ; $i < count($ranks); $i++ )
          foreach($user1->roles as $role1) {
             if($ranks[$i] == $role1->name)
             {
               
            $rank= $role1->name;

            break;
            
             }
             if($rank != '')
             break;
            //tim thu han cao nhất
          }
       
     
          
        $roles = Roles::all();
        $value[] = '';
        foreach ($roles as $role) {
            $tam = 'name' . (string) $role->id;
            if (isset($request->$tam)) {  
              
                if($role->name != 'admin' && $rank == 'manager' || $rank=='admin') 
                {    
                array_unshift($value, $role->id);
              
                }
                else 
                {
                    $errors = 'Bạn không đủ quyền để thêm '.$role->name.'';
                   
                }
                //thêm vào đầu
            }

        }
     
        unset($value[count($value) - 1]);
        //xóa '' ở cuối mảng


        // chuẩn hóa dữ liệu nhận từ view sau đó thêm vào relationship 
        // $user = User::find($request->user);
        $user = User::find($request->user);
        $user->roles()->sync($value);
        
        if($errors == '')
        return redirect()->route('home.manager');
        return redirect()->route('home.manager',['error'=>$errors]);
    }
    function show(Request $request)
    {
        return view('categories/manager_role',['error'=>$request->error]);
    }
   
}