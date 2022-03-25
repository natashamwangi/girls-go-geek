<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Controllers\PagesController;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        return view('blog.index')
        ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }
}
