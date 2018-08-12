<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\auctionteam;
use Image;
class AuctionTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index(Request $request)
    {
        $items = auctionteam::orderBy('id','DESC')->paginate(6);
        return view('admin.auction.auction_index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.auction.auction_create');
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
            'logo' => 'required',
            'description' => 'required',
        ]);

            $auctionteam = new auctionteam;
            $auctionteam->name = $request->name;
            $auctionteam->logo = $request->logo;
            $auctionteam->description = $request->description;
            $auctionteam->tournament_id = $request->tournament_id;
        
         if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $logoname =time().'.'.$logo->getClientOriginalExtension();
            $location = public_path('images/'.$logoname);
            Image::make($logo)->resize(120,120)->save($location);
            
           
             $auctionteam->logo = $logoname;
            
            
           
         }
            $auctionteam->save();
      // auctionteam::create($request->all());
        return redirect()->route('auction.index')
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
        $item = auctionteam::find($id);
        return view('admin.auction.auction_show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = auctionteam::find($id);
        return view('admin.auction.auction_edit',compact('item'));
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
            'logo' => 'required',
            'description' => 'required',
        ]);


            $auctionteam = auctionteam::find($id);
            $auctionteam->name = $request->name;
            $auctionteam->logo = $request->logo;
            $auctionteam->description = $request->description;
            $auctionteam->tournament_id = $request->tournament_id;
        
         if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $logoname =time().'.'.$logo->getClientOriginalExtension();
            $location = public_path('images/'.$logoname);
            Image::make($logo)->resize(120,120)->save($location);
            
           
             $auctionteam->logo = $logoname;  
           
         }
            $auctionteam->save();

        //auctionteam::find($id)->update($request->all());
        return redirect()->route('auction.index')
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
        auctionteam::find($id)->delete();
        return redirect()->route('auction.index')
                        ->with('success','Item deleted successfully');
    }
}
