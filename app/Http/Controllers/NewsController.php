<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();

        return view('pages.index',compact('news'));
    }

    public function read(){
        dd("Came");
    }
}
