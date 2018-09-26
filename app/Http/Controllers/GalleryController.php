<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::where('active', 1)->orderBy('order','asc')->get();
        
        return view('admin.gallery.gallery')->with('gallery', $gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = "";

        $this->validate($request, [
                'filename' => 'required|image',
                'order' => 'numeric',
                'image_active' => 'required'

        ]);
        

        if($request->hasfile('filename')){
            $file_name = \Uuid::generate(4).'.'.$request->file('filename')->getClientOriginalExtension();
            $request->file('filename')->move(public_path().'/storage/images/', $file_name);          
        }

        $gallery_image = new Gallery;
        $gallery_image->image_name = $file_name;
        $gallery_image->order = $request->order;
        $gallery_image->active = $request->image_active;
        $gallery_image->save();

        return redirect('admin/gallery')->with(['message' => "Upload Success", 'alert-type' => 'success']);




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
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->back();
    }
}
