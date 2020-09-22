<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Blog;
use App\Category;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('category')->get();
        return view('dashboard.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('dashboard.blog.create', ['categories' => $categories]);
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
        $new_blog = new \App\Blog;
        $new_blog->category_id = $request->get('id_kategori');
        $new_blog->judul_blog = $request->get('judul');
        $new_blog->deskripsi = $request->get('deskripsi');
        $new_blog->konten = $request->get('konten');
        $slug = Str::slug($request->judul, '-');
        $new_blog->slug = $slug;
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('blog','public');
            $new_blog->foto = $file;
        }
        $new_blog->save();
        return redirect('/dashboard/blogs');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $categories = Category::all();
        return view('dashboard.blog.show', ['blog'=>$blog, 'categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('dashboard.blog.edit', ['blog'=>$blog, 'categories' => $categories]);
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
        $blog = \App\Blog::findOrFail($id);
        $blog->category_id = $request->get('id_kategori');
        $blog->judul_blog = $request->get('judul');
        $slug = Str::slug($request->judul, '-');
        $blog->slug = $slug;
        $blog->deskripsi = $request->get('deskripsi');
        $blog->konten = $request->get('konten');
        if ($request->file('foto')) {
            if($blog->foto && file_exists(storage_path('app/public/' . $blog->foto))){
                \Storage::delete('public/'.$blog->foto);
            }
            $file = $request->file('foto')->store('blog','public');
            $blog->foto = $file;
        };
        $blog->save();
        return redirect('/dashboard/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect('/dashboard/blogs');
    }
}
