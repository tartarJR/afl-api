<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Team;

use App\Http\Requests\ReportForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ReportController extends Controller
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
        $reports = Report::paginate(10);

        return view('report.index')->with('reports', $reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::pluck('name', 'id');

        return view('report.create')->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ReportForm $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportForm $request)
    {
        $request->saveReport();

        return redirect()->route('reports.index')->with('successMessage', 'Haber başarıyla kaydedildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);

        return view('report.show')->with('report', $report);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::find($id);
        $teams = Team::pluck('name', 'id');

        return view('report.edit')->with(compact('report', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ReportForm $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReportForm $request, $id)
    {
      $request->updateReport($id);

      return redirect()->route('reports.index')->with('successMessage', 'Haber başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $report = Report::where('id', $id)->first();

      File::delete(storage_path('app/public/images/reports/' . $report->img_path));

      $report->teams()->detach();
      $report->delete();

      return redirect()->route('reports.index')->with('successMessage', 'Haber başarıyla silindi');
    }
}
