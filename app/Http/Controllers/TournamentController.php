<?php

namespace App\Http\Controllers;

use App\tournament;
use Illuminate\Http\Request;
class TournamentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index(Request $request)
    {
        $items = tournament::orderBy('id','DESC')->paginate(6);
        return view('admin.tournament.tournament_index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tournament.tournament_create');
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
            'session' => 'required',
            'type' => 'required',
        ]);

            $tournament = new tournament;
            $tournament->name = $request->name;
            $tournament->session = $request->session;
            $tournament->type = $request->type;
            $tournament->description = $request->description;


            $tournament->save();
        return redirect()->route('tournament.index')
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
        $item = tournament::find($id);
        return view('admin.tournament.tournament_show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = tournament::find($id);
        return view('admin.tournament.tournament_edit',compact('item'));
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
            'session' => 'required',
            'type' => 'required',
        ]);
        
            $tournament = tournament::find($id);
            $tournament->name = $request->name;
            $tournament->session = $request->session;
            $tournament->type = $request->type;
            $tournament->description = $request->description;
            $tournament->save();
        return redirect()->route('tournament.index')
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
        tournament::find($id)->delete();
        return redirect()->route('tournament.index')
                        ->with('success','Item deleted successfully');
    }
}
