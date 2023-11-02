<?php

namespace App\Http\Controllers\Admin;

use App\Models\DcComic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DcComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.comics.index', ['comics' => DcComic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file_path = null;
        if($request->has('thumb')) {
            $file_path = Storage::put('comics_thumb', $request->thumb);
        }

        $dccomic = new DcComic();
        $dccomic->name = $request->title;
        $dccomic->name = $request->price;
        $dccomic->name = $request->series;
        $dccomic->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DcComic $dccomic)
    {

        return view('admin.comics.show', compact('dccomic'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DcComic $dcComic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DcComic $dcComic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DcComic $dcComic)
    {
        //
    }
}
