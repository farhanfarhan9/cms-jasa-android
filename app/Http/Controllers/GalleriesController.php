<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('dashboard.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gallery.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_gallery = new \App\Gallery;
        $new_gallery->nama_gallery = $request->get('nama_gallery');
        $new_gallery->deskripsi = $request->get('deskripsi');
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('gallery','public');
            $new_gallery->foto = $file;
        };
        $new_gallery->save();
        return redirect('/dashboard/galleries');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('dashboard.gallery.edit', compact('gallery'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = \App\Gallery::findOrFail($id);
        $gallery->nama_gallery = $request->get("nama_gallery");
        $gallery->deskripsi = $request->get("deskripsi");
        if ($request->file('foto')) {
            if($gallery->foto && file_exists(storage_path('app/public/' . $gallery->foto))){
                \Storage::delete('public/'.$gallery->foto);
            }
            $file = $request->file('foto')->store('gallery','public');
            $gallery->foto = $file;
        };
        $gallery->save();
        return redirect('/dashboard/galleries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect('/dashboard/galleries');
    }
}
