@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Sezon</th>
                    <th scope="col">Maçlar</th>
                    <th scope="col">Sezonu Güncelle</th>
                    <th scope="col">Sezonu Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($seasons as $season)
                    <tr>
                        <td>{{ $season->season }}</td>
                        <td>
                            @if($season->hasGames())
                                {{ link_to_route('games.index', 'Sezona ait maçları gör', ['season_id' => $season->id ]) }}
                            @else
                                Sezona ait maç bulunmamaktadır.
                            @endif
                        </td>
                        <td>{{ link_to_route('seasons.edit', 'Güncelle', $season->id) }}</td>
                        <td>
                            @if($season->hasGames())
                                Bu sezonu silemezsiniz.
                            @else
                                <form method="POST" action="{{ route('seasons.destroy', $season->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-primary" type="submit">Sil</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-between bd-highlight mb-3">
        <div class="p-2 bd-highlight"><a href="{{ route('seasons.create') }}"><p>Yeni bir sezon yarat</p></a></div>
        <div class="p-2 bd-highlight">{{ $seasons->links() }}</div>
    </div>

@endsection