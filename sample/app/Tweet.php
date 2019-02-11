<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Tweet extends Model
{
    public static function getTlTweet(){

    	

    	//目的：ログインしているユーザのつぶやきと、フォローしているユーザのつぶやきを取得する

    	
    	//1.ログインいているユーザの情報を取得
    	$user = Auth::user();
    	

    	//2.followsテーブルの中から、ログインしているユーザがフォローしているユーザIDを取得する
    	$follow_list = Follow::where('user_id',$user->id)->get();
    	
    	// [
    	// 	['id'=>1,'user_id'=>2,'follow_id'=>19],
    	// 	['id'=>2,'user_id'=>19,'follow_id'=>2]
    	// ]

    	//3.whereInで使える用の配列を準備する
    	$user_id_list = [];
    	$user_id_list[] = $user->id;

    	foreach ($follow_list as $key=> $value)
    	{
    		$user_id_list[] = $value->follow_id;
    	}

    	

    	//4.tweetsテーブルの中のuser_idの値が、手順3で作成した配列を使ってuser_idが配列の中身のものを含むものを全て取得する
    	$tweets = Tweet::whereIn('user_id',$user_id_list)->orderByRaw('tweets.created_at DESC')->get();
    	
    	return $tweets;
    	
    	}


    	// [19]
    	// ループ1.
    	// [2,19]
    	// ループ2.
    	// [2,s19,2]





        //ログインしているユーザを取得
    	// $user = Auth::user();


    	// //tweetsテーブルの中のuser_idの値が取得したユーザのIDのものを全て取得する
    	// $my_tweets = Tweet::where('user_id',$user->id)->get();


    	//ログインしているユーザのツイート情報を返却
    	// return $my_tweets; 

    	public function user()
    	{
    		return $this->belongsTo('App\User','user_id','id');
    	}

}
