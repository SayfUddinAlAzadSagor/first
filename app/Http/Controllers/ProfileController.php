<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\profile;
use App\auctionteam;
use App\batchteam;
use Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index(Request $request)
    {
        $items = profile::orderBy('id','DESC')->paginate(6);
        return view('admin.profile.profile_index',compact('items'))
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
        return view('admin.profile.profile_create', compact('atems','btems'));
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
            'name' => 'required',
            'registration_no' => 'required',
            'rating' => 'required',
            'jarsey_no' => 'required',
            'batch' => 'required',
            'image' => 'required',
            'position' => 'required',
            'description' => 'required',
        ]);
        
            $profile = new profile;
            $profile->name = $request->name;
            $profile->registration_no  = $request->registration_no ;
            $profile->rating  = $request->rating ;
            $profile->jarsey_no  = $request->jarsey_no ;
            $profile->batch  = $request->batch ;
            $profile->image  = $request->image ;
            $profile->position  = $request->position ;
            $profile->description  = $request->description ;
            $profile->auctionteam_id = $request->auctionteam_id;
            $profile->batchteam_id = $request->batchteam_id;
        
         if($request->hasFile('image')){
            $image = $request->file('image');
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'.$imagename);
            Image::make($image)->resize(120,120)->save($location);
            
           
             $profile->image = $imagename;
            
            
           
         }
            $profile->save();
      // profile::create($request->all());
        return redirect()->route('profile.index')
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
        $item = profile::find($id);
        return view('admin.profile.profile_show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = profile::find($id);
        $atems = auctionteam::all();
        $btems = batchteam::all();
        return view('admin.profile.profile_edit',compact('item','atems','btems'));
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
            'name' => 'required',
            'registration_no' => 'required',
            'rating' => 'required',
            'jarsey_no' => 'required',
            'batch' => 'required',
            'image' => 'required',
            'position' => 'required',
            'description' => 'required',
        ]);

            $profile =  profile::find($id);
            $profile->name = $request->name;
            $profile->registration_no  = $request->registration_no ;
            $profile->rating  = $request->rating ;
            $profile->jarsey_no  = $request->jarsey_no ;
            $profile->batch  = $request->batch ;
            $profile->image  = $request->image ;
            $profile->position  = $request->position ;
            $profile->description  = $request->description ;
            $profile->auctionteam_id = $request->auctionteam_id;
            $profile->batchteam_id = $request->batchteam_id;
        
         if($request->hasFile('image')){
            $image = $request->file('image');
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'.$imagename);
            Image::make($image)->resize(120,120)->save($location);
            
           
             $profile->image = $imagename;
            
            
           
         }
            $profile->save();

       // profile::find($id)->update($request->all());
        return redirect()->route('profile.index')
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
        profile::find($id)->delete();
        return redirect()->route('profile.index')
                        ->with('success','Item deleted successfully');
    }
}
