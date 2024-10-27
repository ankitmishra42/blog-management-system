<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createBlogs(Request $request){
        $blogs = new Blog();
        return $blogs::all();
    }
    public function viewBlogs(Request $request){
        $blogs = new Blog();
        return $blogs::all();
    }
    public function updateBlogs(Request $request){
        $blogs = new Blog();
        return $blogs::all();
    }
    public function deleteBlogs(Request $request){
        $blogs = new Blog();
        return $blogs::all();
    }

}
