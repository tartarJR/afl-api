@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between bd-highlight">
        <div class="p-2 bd-highlight"><h5>Maçlar</h5></div>
        <div class="p-2 bd-highlight">
            <form class="form-inline" method="get" action="{{ route('games.index') }}">
                <div class="form-group">
                    <select class="form-control" id="season-select" name="season">
                        <option value="0">Tüm Sezonlar</option>
                        @foreach ($seasons as $season)
                            <option value="{{ $season->id }}" {{ old('season') == $season->id ? 'selected' : '' }}>{{ $season->season }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mx-sm-3">
                    <select class="form-control" id="week-select" name="week">
                        <option value="0">Tüm Haftalar</option>
                        @foreach ($weeks as $week)
                            <option value="{{ $week->id }}" {{ old('week') == $week->id ? 'selected' : '' }}>{{ $week->week }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Filtrele</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @if (count($games) === 0)
                <div class="alert alert-info">
                    <strong>Upps!</strong> Aranılan kriterlere uygun bir maç bulunamadı.
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Sezon</th>
                        <th scope="col">Hafta</th>
                        <th scope="col">Ev Sahibi Takım</th>
                        <th scope="col">Misafir Takım</th>
                        <th scope="col">Tarih ve Saat</th>
                        <th scope="col">Yer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($games as $game)
                        <tr>
                            <td>{{ $game->season->season }}</td>
                            <td>{{ $game->week->week }}</td>
                            <td>{{ $game->homeTeam->name }}</td>
                            <td>{{ $game->awayTeam->name }}</td>
                            <td>{{ $game->game_date_time }}</td>
                            <td>{{ $game->place }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <div class="d-flex justify-content-between bd-highlight mb-3">
        <div class="p-2 bd-highlight"><a href="{{ route('games.create') }}"><p>Yeni bir maç yarat</p></a></div>
        <div class="p-2 bd-highlight">{{ $games->links() }}</div>
    </div>

@endsection