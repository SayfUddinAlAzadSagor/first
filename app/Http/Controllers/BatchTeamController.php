<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\batchteam;
use Image;
class BatchTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index(Request $request)
    {
        $items = batchteam::orderBy('id','DESC')->paginate(6);
        return view('admin.batch.batch_index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.batch.batch_create');
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
            'logo' => 'required',
            'description' => 'required',
        ]);
        
            $batchteam = new batchteam;
            $batchteam->name = $request->name;
            $batchteam->batch = $request->batch;
            $batchteam->logo = $request->logo;
            $batchteam->description = $request->description;
            $batchteam->tournament_id = $request->tournament_id;
        
         if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $logoname =time().'.'.$logo->getClientOriginalExtension();
            $location = public_path('images/'.$logoname);
            Image::make($logo)->resize(120,120)->save($location);
            
           
             $batchteam->logo = $logoname;
            
            
           
         }
            $batchteam->save();
      // batchteam::create($request->all());
        return redirect()->route('batch.index')
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
        $item = batchteam::find($id);
        return view('admin.batch.batch_show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = batchteam::find($id);
        return view('admin.batch.batch_edit',compact('item'));
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
            'logo' => 'required',
            'description' => 'required',
        ]);

            $batchteam = batchteam::find($id);
            $batchteam->name = $request->name;
            $batchteam->batch = $request->batch;
            $batchteam->logo = $request->logo;
            $batchteam->description = $request->description;
            $batchteam->tournament_id = $request->tournament_id;
        
         if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $logoname =time().'.'.$logo->getClientOriginalExtension();
            $location = public_path('images/'.$logoname);
            Image::make($logo)->resize(120,120)->save($location);
            
           
             $batchteam->logo = $logoname;
            
            
           
         }
            $batchteam->save();

        // batchteam::find($id)->update($request->all());
        return redirect()->route('batch.index')
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
        batchteam::find($id)->delete();
        return redirect()->route('batch.index')
                        ->with('success','Item deleted successfully');
    }
}
