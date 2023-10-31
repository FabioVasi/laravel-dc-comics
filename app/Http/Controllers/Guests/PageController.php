<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\DcComic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        return view('welcome');
    }

    function about() {
        return view('about');
    }
}