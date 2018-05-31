@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-sm-2">
            <img src="{{  asset($team->team_logo) }}" height="100px" width="100px">
        </div>

        <div class="col-sm-4" align="" style="display: flex; align-items: center; flex-wrap: wrap;">
            <h4 class="align-middle">{{ $team->name }}</h4>
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-sm-12">
            <h5>Takım Bilgileri</h5>
            <p>
                {{ $team->info }}
            </p>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-2">
            @if($team->hasCoaches())
                {{ link_to_route('coaches.index', 'Takım koçlarını gör', ['team_id' => $team->id ]) }}
            @else
                Henüz kayıtlı koç bulunmamaktadır.
            @endif
        </div>
        <div class="col-sm-2">
            @if($team->hasPlayers())
                {{ link_to_route('players.index', 'Takım oyuncularını gör', ['team_id' => $team->id ]) }}
            @else
                Henüz kayıtlı oyuncu bulunmamaktadır.
            @endif
        </div>
    </div>

@endsection