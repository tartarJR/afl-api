@extends('layouts.app')

@section('content')

    <h5>Maç Oluşturma Formu</h5>

    <div class="mt-3">

        {!! Form::model($game, ['method'=>'patch', 'route' => ['games.update', $game->id]]) !!}

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
                {{ Form::input('dateTime-local', 'game_date_time', $game->game_date_time, ['id' => 'game-date-time-text', 'class' => 'form-control']) }}
            </div>
            <div class="form-group col-md-6">
                <label for="game-place-text">Yer</label>
                {!! Form::text('place', null, ['id' => 'game-place-text', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="home-team-score-text">Ev Sahibi Takım Skoru</label>
                {!! Form::text('home_team_scored', null, ['id' => 'home-team-score-text', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                <label for="away-team-score-text">Misafir Takım Skoru</label>
                {!! Form::text('away_team_scored', null, ['id' => 'away-team-score-text', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <label for="game-summary-text">Maç Özeti</label>
            {!! Form::textarea('game_summary', null, ['id' => 'game-summary-text', 'class' => 'form-control', 'rows' => '3']) !!}
        </div>
        <div class="form-group">
            <div class="form-check">
                <input id="is-game-played-check" class="form-check-input"
                       {{ $game->is_played === 1 ? 'checked' : '' }} name="is_played" type="checkbox" value="1">
                <input type="hidden" name="is_played" value="0">
                <label class="form-check-label" for="is-game-played-check">
                    Maç Oynandı mı?
                </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Maçı Güncelle</button>
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