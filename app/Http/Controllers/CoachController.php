<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoachForm;
use App\Models\Coach;
use App\Models\CoachType;
use App\Models\Team;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CoachController extends Controller
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
      $coaches = Coach::paginate(10);

      return view('coach.index')->with('coaches', $coaches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coachTypes = CoachType::pluck('type', 'id');
        $teams = Team::pluck('name', 'id');

        return view('coach.create')->with(compact('coachTypes', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CoachForm $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoachForm $request)
    {
        $request->saveCoach();

        return redirect()->route('coaches.index')->with('successMessage', 'Koç başarıyla kaydedildi');
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
      $coach = Coach::find($id);
      $coachTypes = CoachType::pluck('type', 'id');
      $teams = Team::pluck('name', 'id');

      return view('coach.edit')->with(compact('coach', 'coachTypes', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CoachForm $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoachForm $request, $id)
    {
        $request->updateCoach($id);

        return redirect()->route('coaches.index')->with('successMessage', 'Koç başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $coach = Coach::where('id', $id)->first();

      File::delete(storage_path('app/public/images/coaches/' . $coach->img_path));

      $coach->delete();

      return redirect()->route('coaches.index')->with('successMessage', 'Koç başarıyla silindi');
    }
}
