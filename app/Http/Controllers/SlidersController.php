<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('dashboard.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $new_slider = new \App\Slider;
        $new_slider->nama_slider = $request->get('nama_slider');
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('slider','public');
            $new_slider->foto = $file;
        };
        $new_slider->save();
        return redirect('/dashboard/sliders');
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
    public function edit(Slider $slider)
    {
        return view('dashboard.slider.edit', compact('slider'));
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
        $slider = \App\Slider::findOrFail($id);
        $slider->nama_slider = $request->get("nama_slider");
        if ($request->file('foto')) {
            if($slider->foto && file_exists(storage_path('app/public/' . $slider->foto))){
                \Storage::delete('public/'.$slider->foto);
            }
            $file = $request->file('foto')->store('slider','public');
            $slider->foto = $file;
        };
        $slider->save();
        return redirect('/dashboard/sliders');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect('/dashboard/sliders');
    }
}
