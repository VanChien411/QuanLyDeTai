<?php

namespace App\Http\Controllers;

use App\Models\Title;
use App\Models\Topic;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Console\PackageDiscoverCommand;
use Illuminate\Http\Request;

class TopicDetailController extends Controller
{
    //
    public function show(Request $request)
    {
       
        
        $id_type_teacher = Title::where('name','Teacher')->first()->id;
        $teacher[]='';
        $student[]='';
        
        return Topic::find($request->id)->users;
        foreach(Topic::find($request->id)->users as $user)
        {
           
            if($user->title == $id_type_teacher)array_unshift($teacher,$user->name);
        }
       
        return $teacher;
    }
}
