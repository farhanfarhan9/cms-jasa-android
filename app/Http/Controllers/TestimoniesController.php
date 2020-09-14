<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;
class TestimoniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonies = Testimony::all();

        return view('dashboard.testimony.index', compact('testimonies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.testimony.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_testi = new \App\Testimony;
        $new_testi->nama_testimoni = $request->get('nama_testimoni');
        $new_testi->jabatan = $request->get('jabatan');
        $new_testi->testimoni = $request->get('testimoni');
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('slider','public');
            $new_testi->foto = $file;
        };
        $new_testi->save();
        return redirect('/dashboard/testimonies');
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
    public function edit(Testimony $testimony)
    {
        return view('dashboard.testimony.edit', compact('testimony'));
        
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
        $testimoni = \App\Testimony::findOrFail($id);
        $testimoni->nama_testimoni = $request->get("nama_testimoni");
        $testimoni->jabatan = $request->get("jabatan");
        $testimoni->testimoni = $request->get("testimoni");
        if ($request->file('foto')) {
            if($testimoni->foto && file_exists(storage_path('app/public/' . $testimoni->foto))){
                \Storage::delete('public/'.$testimoni->foto);
            }
            $file = $request->file('foto')->store('testimoni','public');
            $testimoni->foto = $file;
        };
        $testimoni->save();
        return redirect('/dashboard/testimonies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimony $testimony)
    {
        $testimony->delete();

        return redirect('/dashboard/testimonies');
    }
}
