<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Contracts\Session\Session as SessionSession;
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
        return view('posts.create')->with('categories', Category::all())->with('tags', Tag::all());
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
            'post_content' => 'required',
            'tag' => 'required'
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
            'featured_image' => 'uploads/posts/' . $featured_new_name,
        ]);
        $post->tags()->attach($request->tag);
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
        return view('posts.edit')->with('posts', Post::find($id))->with('categories', Category::all())->with('tags', Tag::all());
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
            'slug' => 'required',
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
        $post->post_content = $request->post_content;
        $post->tags()->sync($request->tag);
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
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'Post ' . $post->title . ' has been deleted');
        return redirect()->back();
    }
    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.trashed')->with('posts', $posts);
    }
    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();
        Session::flash('success', 'Post ' . $post->title . ' has been restored');
        return redirect()->back();
    }
    public function kill($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        Session::flash('success', 'Post ' . $post->title . ' has been removed');
        return redirect()->back();
    }
}