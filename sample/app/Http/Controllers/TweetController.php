<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Tweet;

class TweetController extends Controller
{




    public function __construct()
    {
        $this->Tweet = new \App\Tweet;

    }





    public function update(Request $request)
    {

    //$id = Auth::id()


    //insert
    // $tweetEntity = [
    //     'user_id'=> $id,
    //     'tweet' => $request->input('tweet'),

    // ];


    //DBへ登録
    // if (!$this->Tweet->tweetUpdateOrCreate($tweetEntity)) {
    //     $request->session()->flash('massage',ツイート時エラーが発生)
    // }
        //dd('aaa');
        $tweet = new tweet;
        $tweet->user_id = Auth::id();
        $tweet->tweet =$request->input ('tweet');
        $tweet->save();


        return redirect()->route('home');


    }

}




