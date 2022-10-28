<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AddTopicController extends Controller
{
    //
    public function index()
    {

    }
    public function show(Request $request)
    {
        return view('categories/addTopic', ['errors' => $request->errors]);
    }
    public function insertTopic(Request $request)
    {


        // "topicName":null,"topicType":null,"topicRank":null,"emailTeacher":null,"emailMembers":null,"topicContent":null,"image":{}}
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]); //kiểm tra ảnh có hợp lệ 

        $name = $request->file('image')->getClientOriginalName(); //name img

        $image_path = $request->file('image')->store('image', 'public'); //lưu và dữ lại địa chỉ 

        $id_topic = DB::table('topic')->insertGetId([
            'name' => $request->topicName,
            'StartDate' => now(),
            'EndDate' => now()->addDays(10),
            'id_type' => $request->topicType,
            'id_rank' => $request->topicRank,
        ]
        );
        DB::table('topic_detail')->insert([
            'content' => $request->topicContent,
            'image' => 'storage/' . $image_path, // vì phải đi qua storage để đến link 
            'id_topic' => $id_topic,
        ]);
        $name = User::where('email', '=', $request->emailTeacher)->first();
        $user = User::find($name->id);
        $user->topics()->attach($id_topic);
        //cat string
      
        foreach (explode(';', $request->emailMembers) as $member) {

            $user = User::find(User::where('email', '=', $request->emailMembers)->first()->id);
            $user->topics()->attach($id_topic);
        }
    }

}