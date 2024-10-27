<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Blogs(Request $request){
        $blogs1 = new Blog();
        $blogs = $blogs1::all();
        return view('user-blogs',['blogs' => $blogs]);
    }
}