<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matches;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Matches::all();
        $teams = Team::all();
        
        return view('matchesHome')->with('matches', $matches)
            ->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('matchesCreate')->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'team1' => 'required',
            'team2' => 'required',
            'stadium' => 'required',
        ],[
            'date.required' => 'The Date field is required.',
            'team1.required' => 'The Team 1 field is required.',
            'team2.required' => 'The Team 2 field is required.',
            'stadium.required' => 'The Stadium field is required.'
        ]);
        
        $match = new Matches();
        
        $match->team1_id = $request->team1;
        $match->team2_id = $request->team2;
        $match->date = $request->date;
        $match->stadium = $request->stadium;
        $match->goals1 = 0;
        $match->goals2 = 0;
        $match->length = 0;

        $match->save();
        return redirect('/matches')->with('success', 'Match created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams = Team::all();
        return view('matchesUpdate')->with('match', Matches::find($id))->with('teams', $teams);
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
        $match = Matches::find($id);

        $match->team1_id = $request->team1;
        $match->team2_id = $request->team2;
        $match->date = $request->date;
        $match->stadium = $request->stadium;
        if ($request->goals1) {
            $match->goals1 = $request->goals1;
        }else{
            $match->goals1 = 0;
        }
        if ($request->goals2) {
            $match->goals2 = $request->goals2;
        }else{
            $match->goals2 = 0;
        }
        if ($request->length) {
            $match->length = $request->length;
        }else{
            $match->length = 0;
        }
        $match->save();
        return redirect('/matches')->with('success', 'Match updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = Matches::find($id);
        $match->delete();
        return redirect('/matches');
    }
}
