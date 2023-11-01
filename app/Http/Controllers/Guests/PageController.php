<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\DcComic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        //dd(DcComic::all());
        return view('welcome');
    }

    function about() {
        return view('about');
    }

    function comics() {
        dd(DcComic::all());
        return view('comics');
    }
}