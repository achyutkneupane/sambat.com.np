<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Session;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Category::all()->count() == 0) {
            Session::flash('error', 'Add Category before adding post');
            return redirect()->route('categories.create');
        }
        return view('posts.create')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'featured_image' => 'required|image',
            'post_content' => 'required'
        ]);
        $featured = $request->featured_image;
        $slug = $request->slug;
        $extension = $featured->getClientOriginalExtension();
        $featured_new_name = 'sambat-' . time() . '-' . $slug . '.' . $extension;
        $featured->move('uploads/posts/', $featured_new_name);
        $post = Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'views' => 0,
            'post_content' => $request->post_content,
            'category_id' => $request->category_id,
            'tag_id' => $request->tag_id,
            'featured_image' => 'uploads/posts/' . $featured_new_name
        ]);
        $request->session()->flash('success', 'Post ' . $request->title . ' created');
        return redirect()->route('posts.index')->withInput();
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
    public function edit($id)
    {
        return view('posts.edit')->with('posts', Post::find($id))->with('categories', Category::all());
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
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'featured_image' => 'image',
            'post_content' => 'required'
        ]);
        $post = Post::find($id);
        if ($request->hasFile('featured_image')) {
            $featured = $request->featured_image;
            $slug = $request->slug;
            $extension = $featured->getClientOriginalExtension();
            $featured_new_name = 'sambat-' . time() . '-' . $slug . '.' . $extension;
            $featured->move('uploads/posts/', $featured_new_name);
            $post->featured_image = 'uploads/posts/' . $featured_new_name;
        }
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->tag_id = $request->tag_id;
        $post->post_content = $request->post_content;
        $post->save();
        $request->session()->flash('success', 'Post ' . $request->title . ' updated');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}