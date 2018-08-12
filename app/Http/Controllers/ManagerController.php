<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\manager;
use App\auctionteam;
use App\batchteam;
use Image;
class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index(Request $request)
    {
        $items = manager::orderBy('id','DESC')->paginate(6);
        return view('admin.manager.manager_index',compact('items'))
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
        return view('admin.manager.manager_create',compact('atems','btems'));
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
            'batch' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

            $manager = new manager;
            $manager->name = $request->name;
            $manager->batch = $request->batch;
            $manager->description = $request->description;
            $manager->auctionteam_id = $request->auctionteam_id;
            $manager->batchteam_id = $request->batchteam_id;
        
         if($request->hasFile('image')){
            $image = $request->file('image');
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'.$imagename);
            Image::make($image)->resize(120,120)->save($location);
            
           
             $manager->image = $imagename;
            
            
           
         }
            $manager->save();
      // manager::create($request->all());
        return redirect()->route('manager.index')
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
        $item = manager::find($id);
        return view('admin.manager.manager_show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = manager::find($id);
        $atems = auctionteam::all();
        $btems = batchteam::all();
        return view('admin.manager.manager_edit',compact('item','atems','btems'));
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
            'batch' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);
        
            $manager = manager::find($id);
            $manager->name = $request->name;
            $manager->batch = $request->batch;
            $manager->description = $request->description;
            $manager->auctionteam_id = $request->auctionteam_id;
            $manager->batchteam_id = $request->batchteam_id;
        
         if($request->hasFile('image')){
            $image = $request->file('image');
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'.$imagename);
            Image::make($image)->resize(120,120)->save($location);
            
           
             $manager->image = $imagename;
            
            
           
         }
             $manager->save();

       // manager::find($id)->update($request->all());
        return redirect()->route('manager.index')
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
        manager::find($id)->delete();
        return redirect()->route('manager.index')
                        ->with('success','Item deleted successfully');
    }
}
