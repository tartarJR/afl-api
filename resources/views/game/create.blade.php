@extends('layouts.app')

@section('content')

    <h5>Maç Oluşturma Formu</h5>

    <div class="mt-3">

        {!! Form::open(['route' => 'games.store']) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="season-select">Sezon</label>
                {!! Form::select('season_id', $seasons, null,['id' => 'season-select', 'class' => 'form-control', 'placeholder' => 'Lütfen sezon seçiniz']) !!}
            </div>
            <div class="form-group col-md-6">
                <label for="week-select">Hafta</label>
                {!! Form::select('week_id', $weeks, null,['id' => 'week-select', 'class' => 'form-control', 'placeholder' => 'Lütfen hafta seçiniz']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="home-team-select">Ev Sahibi Takım</label>
                {!! Form::select('home_team_id', $teams, null,['id' => 'home-team-select', 'class' => 'form-control', 'placeholder' => 'Lütfen ev sahibi takım seçiniz']) !!}
            </div>
            <div class="form-group col-md-6">
                <label for="away-team-select">Misafir Takım</label>
                {!! Form::select('away_team_id', $teams, null,['id' => 'away-team-select', 'class' => 'form-control', 'placeholder' => 'Lütfen misafir takım seçiniz']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="game-date-time-text">Tarih ve Zaman</label>
                <input type="datetime-local" class="form-control" id="game-date-time-text" name="game_date_time" value="{{ old('game_date_time') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="game-place-text">Yer</label>
                <input type="text" class="form-control" id="game-place-text" name="place" value="{{ old('place') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="home-team-score-text">Ev Sahibi Takım Skoru</label>
                <input type="text" class="form-control" id="home-team-score-text" name="home_team_scored"
                       value="{{ old('home_team_scored') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="away-team-score-text">Misafir Takım Skoru</label>
                <input type="text" class="form-control" id="away-team-score-text" name="away_team_scored"
                       value="{{ old('away_team_scored') }}">
            </div>
        </div>
        <div class="form-group">
            <label for="game-summary-text">Maç Özeti</label>
            <textarea class="form-control" id="game-summary-text" rows="3"
                      name="game_summary">{{ old('game_summary') }}</textarea>
        </div>
        <div class=" form-group">
            <div class="form-check">
                <input type="hidden" name="is_played" value="0">
                {!! Form::checkbox('is_played', 1, false, ['id' => 'is-game-played-check', 'class' => 'form-check-input']) !!}
                <label class="form-check-label" for="is-game-played-check">
                    Maç Oynandı mı?
                </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Maçı Oluştur</button>
        </div>
        {!! Form::close() !!}

    </div>

    @if(count($errors))
        <div class="form-group">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

@endsection