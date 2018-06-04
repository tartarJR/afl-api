<?php

namespace App\Http\Controllers;

use App\Http\Requests\RefereeForm;
use App\Models\Game;
use App\Models\Season;
use App\Models\Referee;
use App\Models\RefereeType;
use Carbon\Carbon;

use Illuminate\Http\Request;

class RefereeController extends Controller
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
    public function index()
    {
        $referees = Referee::paginate(10);

        return view('referee.index')->with('referees', $referees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('referee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RefereeForm $request
     * @return \Illuminate\Http\Response
     */
    public function store(RefereeForm $request)
    {
        $request->saveReferee();

        return redirect()->route('referees.index')->with('successMessage', 'Hakem başarıyla kaydedildi');
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
        $referee = Referee::findOrFail($id);

        return view('referee.edit')->with('referee', $referee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RefereeForm $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RefereeForm $request, $id)
    {
        //dd(Carbon::createFromFormat('d/m/Y', $request->birth_date)->toDateString());

        $request->updateReferee($id);

        return redirect()->route('referees.index')->with('successMessage', 'Hakem başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Referee::where('id', $id)->delete();

        return redirect()->route('referees.index')->with('successMessage', 'Hakem başarıyla silindi');
    }

    /**
     * Display a form for assigning referees.
     *
     * @return \Illuminate\Http\Response
     */
    public function assign()
    {
        $latestSeason = Season::orderBy('season','desc')->first();
        $games = Game::get()->where('season_id', $latestSeason->id)->pluck('game_string', 'id');
        $referees = Referee::get()->all('full_name', 'id');
        $refereeTypes = RefereeType::get()->all('id', 'type', 'input_name');

        return view('referee.assign')->with(compact('referees', 'refereeTypes', 'latestSeason', 'games'));
    }

    /**
     * Bind selected referees to selected game.
     *
     * @param  \App\Http\Requests\RefereeAssignmentForm $request
     * @return \Illuminate\Http\Response
     */
    public function bind(Request $request)
    {
        $game = Game::find($request->game);

        // sliced input array so I can only have ref inputs
        $refInputs = array_slice($request->all(), 2);

        foreach($refInputs as $refInput) {
            $refInputArray = explode(".", $refInput);

            // when the $refInput is splitted the first index in the array is referee_id and the second one is referee_type_id
            $game->referees()->attach($refInputArray[0], ['referee_type_id' => $refInputArray[1]]);
        }

        return 'yess';
    }
}
