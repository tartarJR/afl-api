@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between bd-highlight">
        <div class="p-2 bd-highlight"><h5>Maçlar</h5></div>
        <div class="p-2 bd-highlight">
            <form class="form-inline" method="get" action="{{ route('games.index') }}">
                <div class="form-group mx-sm-1">
                    {!! Form::select('season_id', $seasons, null,['id' => 'season-select', 'class' => 'form-control', 'placeholder' => 'Tüm sezonlar']) !!}
                </div>
                <div class="form-group mx-sm-1">
                    {!! Form::select('week_id', $weeks, null,['id' => 'week-select', 'class' => 'form-control', 'placeholder' => 'Tüm haftalar']) !!}
                </div>
                <div class="form-group mx-sm-1">
                    {!! Form::select('team_id', $teams, null,['id' => 'team-select', 'class' => 'form-control', 'placeholder' => 'Tüm takımlar']) !!}
                </div>
                <button type="submit" class="btn btn-primary">Filtrele</button>
            </form>
        </div>
    </div>

    @include('layouts.success-message')

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
                        <th scope="col">Hakemler</th>
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
                            <td>
                                @if (count($game->referees) > 0)
                                    {{ link_to_route('referees.assigned', 'Hakemleri Gör', $game->id, ['class' => 'btn btn-primary']) }}
                                @else
                                    {{ link_to_route('referees.assign', 'Hakemleri Ata', ['class' => 'btn btn-primary']) }}
                                @endif
                            </td>
                            <td>{{ $game->local_game_date_time }}</td>
                            <td>{{ $game->place }}</td>
                            <td>{{ link_to_route('games.edit', 'Güncelle', $game->id, ['class' => 'btn btn-primary']) }}</td>
                            <td>
                                <form method="POST" action="{{ route('games.destroy', $game->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-primary" type="submit">Sil</button>
                                </form>
                            </td>
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
