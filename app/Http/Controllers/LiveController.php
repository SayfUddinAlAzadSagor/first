<?php

namespace App\Http\Controllers;

use App\live;
use Illuminate\Http\Request;
use App\tournament;
use App\score;
use App\auctionteam;
use App\batchteam;
use DB;
class LiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        $items = live::orderBy('id','DESC')->paginate(6);
        return view('admin.live.live_index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $atems = DB::table('auctionteams')
          ->select(array('name', 'logo'))
          ->get();
        $btems = DB::table('batchteams')
          ->select(array('name', 'logo'))
          ->get();
        $tems = array_merge($atems->toArray(),$btems->toArray());
        $ttids = tournament::all();
        return view('admin.live.live_create',compact('tems','ttids'));
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
            'team_1' => 'required',
            'team_2' => 'required',
            'goal_1' => 'required',
            'goal_2' => 'required',
            'logo_1' => 'required',
            'logo_2' => 'required',
            'timeleft' => 'required',
            'stream' => 'required',
            'description_1' => 'required',
            'description_2' => 'required',
        ]);
        
            $live = new live;
            $live->team_1 = $request->team_1;
            $live->team_2  = $request->team_2 ;
            $live->goal_1  = $request->goal_1 ;
            $live->goal_2  = $request->goal_2 ;
            $live->logo_1  = $request->logo_1 ;
            $live->logo_2  = $request->logo_2 ;
           
            $var = str_replace("/","-",$request->timeleft).":00";
            $live->timeleft  = $var ;
            $live->stream  = $request->stream ;
            $live->description_1  = $request->description_1 ;
            $live->description_2  = $request->description_2 ;
        
            $live->save();
        return redirect()->route('live.index')
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
        $item = live::find($id);
        return view('admin.live.live_show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atems = DB::table('auctionteams')
          ->select(array('name', 'logo'))
          ->get();
        $btems = DB::table('batchteams')
          ->select(array('name', 'logo'))
          ->get();
        $tems = array_merge($atems->toArray(),$btems->toArray());
        $ttids = tournament::all();
        $item = live::find($id);
        return view('admin.live.live_edit',compact('item','tems','ttids'));
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
            'team_1' => 'required',
            'team_2' => 'required',
            'goal_1' => 'required',
            'goal_2' => 'required',
            'logo_1' => 'required',
            'logo_2' => 'required',
            'timeleft' => 'required',
            'stream' => 'required',
            'description_1' => 'required',
            'description_2' => 'required',
        ]);
        

            $live = live::find($id);
            $live->team_1 = $request->team_1;
            $live->team_2  = $request->team_2 ;
            $live->goal_1  = $request->goal_1 ;
            $live->goal_2  = $request->goal_2 ;
            $live->logo_1  = $request->logo_1 ;
            $live->logo_2  = $request->logo_2 ;
            $var = str_replace("/","-",$request->timeleft).":00";
            $live->timeleft  = $var ;
            $live->steam  = $request->stream ;
            $live->description_1  = $request->description_1 ;
            $live->description_2  = $request->description_2 ;
        
            $live->save();

        return redirect()->route('live.index')
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
       live::find($id)->delete();
        return redirect()->route('live.index')
                        ->with('success','Item deleted successfully');
    }
}
