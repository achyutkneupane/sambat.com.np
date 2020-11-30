<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class BlogController extends Controller
{
    public function view()
    {
    	$cats = Category::get();
        return view('blog.index', compact('cats'));
    }
    public function getpost($value)
    {
    	if($value == "all") {
    	$res = Post::orderBy('id','DESC')->paginate(5);
    	}
    	else{
    		$catId = Category::where('slug',$value)->first()->id;
    		$res = Post::where('category_id',$catId)->orderBy('id','DESC')->paginate(5);
    	}
    	echo json_encode($res);
    	exit;
    }
}