<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\gallery;
use App\auctionteam;
use App\batchteam;
use Image;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index(Request $request)
    {
        $items = gallery::orderBy('id','DESC')->paginate(6);
        return view('admin.gallery.gallery_index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $atems = auctionteam::all();
        $btems = batchteam::all();
        return view('admin.gallery.gallery_create',compact('atems','btems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    validation 

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);

            $gallery = new gallery;
            $gallery->title = $request->title;
            $gallery->description = $request->description;
            $gallery->photo = $request->photo;
        
         if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photoname =time().'.'.$photo->getClientOriginalExtension();
            $location = public_path('gallery/'.$photoname);
            Image::make($photo)->resize(600,600)->save($location);
            
           
             $gallery->photo = $photoname;
            
            
           
         }
            $gallery->save();
      // manager::create($request->all());
        return redirect()->route('gallery.index')
                        ->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = gallery::find($id);
        return view('admin.gallery.gallery_show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = gallery::find($id);
        $atems = auctionteam::all();
        $btems = batchteam::all();
        return view('admin.gallery.gallery_edit',compact('item','atems','btems'));
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
                'description' => 'required',
                'photo' => 'required',
            ]);
        
            $gallery = gallery::find($id);
            $gallery->title = $request->title;
            $gallery->description = $request->description;
            $gallery->photo = $request->photo;
        
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photoname =time().'.'.$photo->getClientOriginalExtension();
            $location = public_path('gallery/'.$photoname);
            Image::make($photo)->resize(600,600)->save($location);
            
           
             $gallery->photo = $photoname;
            
            
           
         }
             $gallery->save();

       // manager::find($id)->update($request->all());
        return redirect()->route('gallery.index')
                        ->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        gallery::find($id)->delete();
        return redirect()->route('gallery.index')
                        ->with('success','Item deleted successfully');
    }
}