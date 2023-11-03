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

        DcComic::create([
            'title' => $request->title,
            'price' => $request->price,
            'series' => $request->series,
            'thumb' => $request->thumb
        ]);

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
    public function edit(DcComic $dccomic)
    {
        return view('admin.comics.edit', compact('dccomic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DcComic $dccomic)
    {
        $data = $request->all();

        if($request->has('thumb') && $dccomic->thumb) {

            Storage::delete($dccomic->thumb);

            $newImageFile = $request->thumb;
            $path = Storage::put('comics_image', $newImageFile);
            $data['thumb'] = $path;

        }

        $dccomic->update($data);
        return to_route('comics.show', $dccomic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DcComic $dccomic)
    {
        //
    }
}
