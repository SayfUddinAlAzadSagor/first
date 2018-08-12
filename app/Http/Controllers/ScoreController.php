<?php

namespace App\Http\Controllers;

use App\score;
use Illuminate\Http\Request;
use App\tournament;
use App\auctionteam;
use App\batchteam;
use DB;
class ScoreController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index(Request $request)
    {
        $items = score::orderBy('id','DESC')->paginate(6);
        return view('admin.score.score_index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $atems = DB::table('auctionteams')->pluck('name');
        $btems = DB::table('batchteams')->pluck('name');
        $tems = array_merge($atems->toArray(),$btems->toArray());
        $ttids = tournament::all();
        return view('admin.score.score_create',compact('tems','ttids'));
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
            'team' => 'required',
            'mp' => 'required',
            'win' => 'required',
            'draw' => 'required',
            'loss' => 'required',
            'point' => 'required',
            'tournament_id' => 'required',
        ]);
        
            $score = new score;
            $score->team = $request->team;
            $score->mp  = $request->mp ;
            $score->win  = $request->win ;
            $score->draw  = $request->draw ;
            $score->loss  = $request->loss ;
            $score->point  = $request->point ;
            $score->tournament_id  = $request->tournament_id ;
        
            $score->save();
        return redirect()->route('score.index')
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
        $item = score::find($id);
        return view('admin.score.score_show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atems = DB::table('auctionteams')->pluck('name');
        $btems = DB::table('batchteams')->pluck('name');
        $tems = array_merge($atems->toArray(),$btems->toArray());
        $ttids = tournament::all();
        $item = score::find($id);
        return view('admin.score.score_edit',compact('item','tems','ttids'));
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
            'team' => 'required',
            'mp' => 'required',
            'win' => 'required',
            'draw' => 'required',
            'loss' => 'required',
            'point' => 'required',
            'tournament_id' => 'required',
        ]);

            $score = score::find($id);
            $score->team = $request->team;
            $score->mp  = $request->mp ;
            $score->win  = $request->win ;
            $score->draw  = $request->draw ;
            $score->loss  = $request->loss ;
            $score->point  = $request->point ;
            $score->tournament_id  = $request->tournament_id ;
        
            $score->save();

        return redirect()->route('score.index')
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
       score::find($id)->delete();
        return redirect()->route('score.index')
                        ->with('success','Item deleted successfully');
    }
}
