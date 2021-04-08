<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostShowController extends Controller
{
    public function postShow(){
       $data = Post::where('trash',false)->where('trash',false)->latest()->get();
        return view('comet.blog',[
            'all_data' => $data
        ]);
    }
}
