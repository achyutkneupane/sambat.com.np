<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminDetail;

class AdminDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('setting.index')->with('setting', AdminDetail::first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('setting.edit')->with('setting', AdminDetail::first());
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
        $request->validate(
            [
                'titles' => 'required',
                'email' => 'required',
                'address' => 'required',
                'fbLink' => 'required',
                'instaLink' => 'required',
                'ytLink' => 'required',
                'contact1' => 'required',
                'contact2' => 'required',
                'bio' => 'required'
            ]
        );
        $setting = AdminDetail::find($id);
        $setting->titles = $request->titles;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->fbLink = $request->fbLink;
        $setting->instaLink = $request->instaLink;
        $setting->ytLink = $request->ytLink;
        $setting->contact1 = $request->contact1;
        $setting->contact2 = $request->contact2;
        $setting->bio = $request->bio;
        $setting->save();
        $request->session()->flash('success', 'Settings updated');
        return redirect()->route('setting.index')->withInput();
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