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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // TODO navbar seçili olan highlight etme, sil update butonları

        $request->flash();

        $seasons = Season::all();
        $weeks = Week::all();

        if ($request->has('season') && $request->has('week')) { // check filter value is passed or not
            $games = Game::with('season', 'week', 'homeTeam', 'awayTeam')
                ->when(request('season') != 0, function ($q) {
                    return $q->where('season_id', request('season'));
                })->when(request('week') != 0, function ($q) {
                    return $q->where('week_id', request('week'));
                })
                ->paginate(15);
        } else {
            $games = Game::with('season', 'week', 'homeTeam', 'awayTeam')->paginate(15);
        }

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
