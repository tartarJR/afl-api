<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeasonForm;
use App\Season;

class SeasonController extends Controller
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
        $seasons = Season::orderBy('season', 'desc')->paginate(10);

        return view('season.index')->with('seasons', $seasons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('season.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SeasonForm $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeasonForm $request)
    {
        $request->saveSeason();

        return redirect()->route('seasons.index')->with('successMessage', 'Sezon başarıyla kaydedildi');
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
        $season = Season::findOrFail($id);

        return view('season.edit')->with('season', $season);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SeasonForm $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SeasonForm $request, $id)
    {
        $request->updateSeason($id);

        return redirect()->route('seasons.index')->with('successMessage', 'Sezon başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Season::where('id', $id)->delete();

        return redirect()->route('seasons.index')->with('successMessage', 'Sezon başarıyla silindi');
    }
}
