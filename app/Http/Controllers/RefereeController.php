<?php

namespace App\Http\Controllers;

use App\Http\Requests\RefereeForm;
use App\Models\Referee;
use Carbon\Carbon;

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

    public function assign()
    {
        return view('referee.assign');
    }
}
