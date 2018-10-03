<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Images;
use Session;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guest()){return abort(404);}
        $images = Images::paginate(10);
        return view('images.index', compact('images'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::guest()){return abort(404);}
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string',
            'category' => 'nullable|string',
            'sub_category' => 'nullable|string',
            'type' => 'nullable|string',
        ]);
        if($file = $request->file('image')){
            $filename = $request->name.'.' .$file->getClientOriginalExtension();
            $destinationPath = public_path().'/img/upload/';
            $file->move($destinationPath,$filename);
        }
        Images::create([
            'image' => $filename,
            'name' => $request->name,
            'category' => $request->category,
            'sub_category' => $request->sub_category,
            'type' => $request->type,
        ]);
        $request->session()->flash('flash_message', 'Image Successfully Uploaded');
        return redirect('/images/create');
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
        //
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
        //
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
