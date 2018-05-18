<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function coach()
    {
        return view('coach.index');
    }

    public function game()
    {
        // TODO sezon, haftaya göre filtreleme, en başta sezon seçme, navbar seçili olan highlight etme, sil update butonları

        $games = Game::with('season', 'week', 'homeTeam', 'awayTeam')->get();

        return view('game.index')->with('games', $games);
    }

    public function player()
    {
        return view('player.index');
    }

    public function referee()
    {
        return view('referee.index');
    }

    public function report()
    {
        return view('report.index');
    }

    public function season()
    {
        return view('season.index');
    }

    public function team()
    {
        return view('team.index');
    }

    public function week()
    {
        return view('week.index');
    }
}
