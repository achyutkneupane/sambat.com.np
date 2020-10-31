<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function bio()
    {
        return view('pages.bio');
    }
    public function blog()
    {
        return view('pages.viewBlog');
    }
    public function phpmyadmin()
    {
        return redirect()->away('https://auth-db.esign.com.np');
    }
    public function setting()
    {
        return view('pages.editSetting');
    }
    /* public function check_slug(Request $request)
    {
        $slug = str_slug($request->title);
        return response()->json(['slug' => $slug]);
    }
    */
}