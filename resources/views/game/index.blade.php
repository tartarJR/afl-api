@extends('layouts.app')

@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Sezon</th>
            <th scope="col">Hafta</th>
            <th scope="col">Ev Sahibi Takım</th>
            <th scope="col">Misafir Takım</th>
            <th scope="col">Tarih ve Saat</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($games as $game)
            <tr>
                <td>{{$game->season->season}}</td>
                <td>{{$game->week->week}}</td>
                <td>{{@$game->homeTeam->name}}</td>
                <td>{{@$game->awayTeam->name}}</td>
                <td>{{@$game->game_date_time}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection