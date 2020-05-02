<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ApiPostsController extends Controller
{
    //

    public function index()
    {
      return response()->json(Post::all());
    }
}
