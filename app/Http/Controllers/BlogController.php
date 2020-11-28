<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminDetail;
use App\Models\Category;

class BlogController extends Controller
{
    public function view()
    {
    	$cats = Category::with('posts')->get();
        return view('blog.index', compact('cats'));
    }
}