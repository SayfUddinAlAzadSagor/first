<?php

namespace App\Http\Controllers;

use App\schedule;
use Illuminate\Http\Request;
use App\auctionteam;
use App\tournament;
use DB;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index(Request $request)
    {
        $items = schedule::orderBy('id','DESC')->paginate(6);
        return view('admin.schedule.schedule_index',compact('items'))
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
        return view('admin.schedule.schedule_create',compact('tems','ttids'));
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
            'datetime' => 'required',
            'check' => 'required',
            'tournament_id' => 'required',
            'description' => 'required',
        ]);
        
            $schedule = new schedule;
            $schedule->team_1 = $request->team_1;
            $schedule->team_2  = $request->team_2 ;
            $schedule->goal_1  = $request->goal_1 ;
            $schedule->goal_2  = $request->goal_2 ;
            $schedule->datetime  = $request->datetime ;
            $schedule->check  = $request->check ;
            $schedule->tournament_id  = $request->tournament_id ;
            $schedule->description  = $request->description ;
        
            $schedule->save();
      // profile::create($request->all());
        return redirect()->route('schedule.index')
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
        $item = schedule::find($id);
        return view('admin.schedule.schedule_show',compact('item'));
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
        $item = schedule::find($id);
        return view('admin.schedule.schedule_edit',compact('item','tems','ttids'));
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
            'datetime' => 'required',
            'check' => 'required',
            'tournament_id' => 'required',
            'description' => 'required',
        ]);

            $schedule =  schedule::find($id);
            $schedule->team_1 = $request->team_1;
            $schedule->team_2  = $request->team_2 ;
            $schedule->goal_1  = $request->goal_1 ;
            $schedule->goal_2  = $request->goal_2 ;
            $schedule->datetime  = $request->datetime ;
            $schedule->check  = $request->check ;
            $schedule->tournament_id  = $request->tournament_id ;
            $schedule->description  = $request->description ;
        
            $schedule->save();

       // profile::find($id)->update($request->all());
        return redirect()->route('schedule.index')
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
        schedule::find($id)->delete();
        return redirect()->route('schedule.index')
                        ->with('success','Item deleted successfully');
    }
}
