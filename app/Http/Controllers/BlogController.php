<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
       $blogs = Blog::get();

       return view('blog', compact('blogs'));
    }

    public function remove($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return back();
        // return back เป็นการกลับไปยังหน้าที่เราอยู่ก่อนหน้านี้
        // find เป็นการค้นหาข้อมูลจากฐานข้อมูลโดยใช้ id ที่ส่งเข้ามา
    }
    public function create(Request $request)
    {
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'subtitle' => $request->subtitle,
        ]);
        return redirect('/blog');
    }
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('edit', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'subtitle' => $request->subtitle,
        ]);
        return redirect('/blog');


    }
}
