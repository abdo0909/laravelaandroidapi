<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ApiCategoeiesController extends Controller
{
    //

    public function index()
    {

      $response = response()->json(Category::all(),JSON_UNESCAPED_UNICODE);
      $response->header('Content-Type', 'application/json');
      $response->header('charset', 'utf-8');

      return $response;
      //return response()->json(Category::all(),  JSON_UNESCAPED_UNICODE);
    }
}
