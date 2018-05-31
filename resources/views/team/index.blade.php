@extends('layouts.app')

@section('content')

    <h5>Takımlar</h5>

    @include('layouts.success-message')

    <div class="row">
        <div class="col-lg-12">
            @if (count($teams) === 0)
                <div class="alert alert-info">
                    <strong>Upps!</strong> Aranılan kriterlere uygun bir takım bulunamadı.
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Takım</th>
                        <th scope="col">Koçlar</th>
                        <th scope="col">Oyuncular</th>
                        <th scope="col">Takım Detayları</th>
                        <th scope="col">Takımı Güncelle</th>
                        <th scope="col">Takımı Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>
                                @if($team->hasCoaches())
                                    {{ link_to_route('coaches.index', 'Takım koçlarını gör', ['team_id' => $team->id ]) }}
                                @else
                                    Henüz kayıtlı koç bulunmamaktadır.
                                @endif
                            </td>
                            <td>
                                @if($team->hasPlayers())
                                    {{ link_to_route('players.index', 'Takım oyuncularını gör', ['team_id' => $team->id ]) }}
                                @else
                                    Henüz kayıtlı oyuncu bulunmamaktadır.
                                @endif
                            </td>
                            <td>{{ link_to_route('teams.show', 'Detayları Gör', $team->id, ['class' => 'btn btn-primary']) }}</td>
                            <td>{{ link_to_route('teams.edit', 'Güncelle', $team->id, ['class' => 'btn btn-primary']) }}</td>
                            <td>
                                <form method="POST" action="{{ route('teams.destroy', $team->id) }}">
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
        <div class="p-2 bd-highlight"><a href="{{ route('teams.create') }}"><p>Yeni bir takım yarat</p></a></div>
        <div class="p-2 bd-highlight">{{ $teams->links() }}</div>
    </div>

@endsection