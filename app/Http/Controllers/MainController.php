<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\manager;
use App\profile;
use App\auctionteam;
use App\batchteam;
use App\tournament;
use App\gallery;
use App\live;

class MainController extends Controller
{
    public function about(){
        return view('main.about');
    }

    public function profile(Request $request){
        $s = $request->input('s');
        $btems= batchteam::all();
        $pros = profile::OrderBy('id','desc')->search($s)->paginate(4);
        return view('main.profile',compact('pros','s','btems'));
    }

     public function teams(Request $request){
        $s = $request->input('s');
        $atems = auctionteam::OrderBy('id','desc')->search($s)->paginate(4);
        $btems = batchteam::OrderBy('id','desc')->search($s)->paginate(4);
        return view('main.team',compact('atems','btems'));
    }

    public function auction(Request $request){
        $s = $request->input('s');
        $atems = auctionteam::OrderBy('id','desc')->search($s)->paginate(6);
        return view('main.auctionteam',compact('atems'));
    }

     public function batch(Request $request){
        $s = $request->input('s');
        $btems = batchteam::OrderBy('id','desc')->search($s)->paginate(6);
        return view('main.batchteam',compact('btems'));
    }
     
    public function batchid(Request $request, $id){
        $s = $request->input('s');
        $btems = batchteam::find($id);
        //$btems = batchteam::OrderBy('id','desc')->search($s)->paginate(4);
        return view('main.batchteamid',compact('btems','s'));
    }
    public function auctionid(Request $request, $id){
        $s = $request->input('s');
        $atems = auctionteam::find($id);
        //$btems = batchteam::OrderBy('id','desc')->search($s)->paginate(4);
        return view('main.auctionteamid',compact('atems','s'));
    }

    public function tournament(Request $request, $id = null){
        $s = $request->input('s');
        $trmts = tournament::orderBy('id','DESC')->search($s)->paginate(6);
        $ids = tournament::find($id);
        return view('main.tournament.tournament',compact('trmts','s','ids'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function gallery(){
        $galls = gallery::orderBy('id','DESC')->paginate(8);
        return view('main.gallery',compact('galls'));
    }

    public function live($id = null){
      $trmts = tournament::orderBy('id')->paginate(3);
      $livs = live::orderBy('id','DESC')->paginate(3);
      $ids = live::find($id);
      return view('main.live',compact('trmts','livs','ids'));
    }

}
