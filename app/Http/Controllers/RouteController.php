<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\AdminDetail;

class RouteController extends Controller
{
    public function index()
    {
        return view('pages.index')->with('setting', AdminDetail::first());
    }
    public function bio()
    {
        return view('pages.bio')->with('setting', AdminDetail::first());
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