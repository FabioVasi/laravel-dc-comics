<?php

namespace App\Http\Controllers\Admin;

use App\Models\DcComic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDcComicRequest;
use App\Http\Requests\UpdateDcComicRequest;

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
    public function store(StoreDcComicRequest $request)
    {

        $val_data = $request->validate();

        if($request->has('thumb')) {
            $file_path = Storage::put('comics_thumb', $request->thumb);
            $val_data['thumb'] = $file_path;
        }

        DcComic::create($val_data);

        return to_route('comics.index')->with('message', 'Comic created successfully');
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
    public function update(UpdateDcComicRequest $request, DcComic $dccomic)
    {
        $val_data = $request->validate();

        if($request->has('thumb')) {
            
            $newImageFile = $request->thumb;

            $path = Storage::put('comics_image', $newImageFile);

            if(!is_null($dccomic->thumb) && Storage::fileExists($dccomic->thumb)) {

                Storage::delete($dccomic->thumb);
    
            }

            $val_data['thumb'] = $path;

        }
        

        $dccomic->update($val_data);
        return to_route('comics.index')->with('message', 'Comic updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DcComic $dccomic)
    {
        if(!is_null($dccomic->thumb)) {
            Storage::delete($dccomic->thumb);
        }
        $dccomic->delete();

        return to_route('comics.index')->with('message', 'Comic deleted successfully');
    }
}
