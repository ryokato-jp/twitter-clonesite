<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Follow;



class UserController extends Controller
{
    public function index()
    {

        $where =[
        ['users.id','<>',Auth::id()],
        ];

        
        $users = User::where($where)->get();


        $test = User::find(19);
        //dd($test->follows);

        


        return view('user.list',['users'=>$users]);
    }

    public function follow(Request $request)
    {
        //dd($request->input('followId'));

        $follow = new Follow;
        $follow->user_id = Auth::id();
        $follow->follow_id = $request->followId;//input('followid');
        $follow->save();


        return redirect()->route('user_list');





    //     public function store(Request $request)
    // {
    //     $params = $request->validate([
    //         'post_id' => 'required|exists:posts,id',
    //         'body' => 'required|max:2000',
    //     ]);

    //     $post = Post::findOrFail($params['post_id']);
    //     $post->comments()->create($params);

    //     return redirect()->route('posts.show', ['post' => $post]);
    // }
    }

}

