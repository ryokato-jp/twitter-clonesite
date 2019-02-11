<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $my_tweets = Tweet::getTlTweet();

        //dd("aa");
        
        
        return view('user.home',['tweets'=>$my_tweets]);
    }
}


    