<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        // fetching data from the api with 5 random breeds
        $breeds = Http::get('https://dog.ceo/api/breeds/list/random/5')['message'];

        return view('index',compact('breeds'));
    }
    public function read(){
        return view('read-me');
    }
}
