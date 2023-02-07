<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Contracts\Session\Session;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$id = $this->getRequest()->getParameter('user_id');
        //$teams = Team::all()->where('user_id', '=', $id);
        $teams = Team::all();
        return view('teamsHome')->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teamsCreate');
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
            'name' => 'required',
            'city' => 'required',
            'stadium' => 'required',
            'crest' => 'image|mimes:png,jpg|max:2048',
        ]);
        $team = new Team();

        $team->name = $request->name;
        $team->home_city = $request->city;
        $team->stadium = $request->stadium;

        if($request->file('crest')){
            $file= $request->file('crest');
            $filename= date('YmdHi').".".$file->getClientOriginalExtension();
            $file-> move(public_path('img/'), $filename);
            $team->crest = $filename;
        }
        //$team->user_id = auth()->user()->user_id;
        //TEMPORARY FOR USER 4 (ADMIN)
        $team->user_id = 4;
        $team->save();
        return redirect('/teams')->with('success', 'Team created!');
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
        return view('teamsUpdate')-> with('team', Team::find($id));
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
        $team = Team::find($id);

        $team->name = $request->name;
        $team->home_city = $request->city;
        $team->stadium = $request->stadium;
        
        $team->save();
        return redirect('/teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect('/teams');
    }
}
