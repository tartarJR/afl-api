<?php

namespace App\Http\Controllers;

use App\Game;

use App\Http\Requests\StoreGameRequest;
use App\Season;
use App\Team;
use App\Week;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->flash(); // TODO why withInput is not working ?

        $seasons = Season::pluck('season', 'id');
        $weeks = Week::pluck('week', 'id');

        $games = Game::ofFilter(request('season'), request('week'));

        return view('game.index')->with(compact('games', 'seasons', 'weeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seasons = Season::pluck('season', 'id');
        $weeks = Week::pluck('week', 'id');
        $teams = Team::pluck('name', 'id');

        return view('game.create')->with(compact('seasons', 'weeks', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameRequest $request)
    {
        Game::create($request->all());

        return redirect()->route('games.index')->with('successMessage', 'Maç başarıyla kaydedildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
