@extends('layouts.app')

@section('content')

    @if(Session::has('successMessage'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('successMessage') }}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            @if (count($referees) === 0)
                <div class="alert alert-info">
                    <strong>Upps!</strong> Henüz bir hakem yaratılmadı.
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Ad</th>
                        <th scope="col">Yaş</th>
                        <th scope="col">Tecrübe</th>
                        <th scope="col">Yönettiği Maçlar</th>
                        <th scope="col">Yöneteceği Maçlar</th>
                        <th scope="col">Güncelle</th>
                        <th scope="col">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($referees as $referee)
                        <tr>
                            <td>{{ $referee->full_name }}</td>
                            <td>{{ $referee->age }}</td>
                            <td>{{ $referee->experience_string }}</td>
                            <td>
                                @if($referee->hasRuledGames())
                                    {{ link_to_route('games.index', 'Yönettiği maçlar', ['team_id' => $referee->id ]) }}
                                @else
                                    Yönettiği maç bulunmamaktadır.
                                @endif
                            </td>
                            <td>
                                @if($referee->hasGamesToRule())
                                    {{ link_to_route('games.index', 'Yöneteceği Maçlar', ['team_id' => $referee->id ]) }}
                                @else
                                    Yöneteceği maç bulunmamaktadır.
                                @endif
                            </td>
                            <td>{{ link_to_route('referees.edit', 'Güncelle', $referee->id, ['class' => 'btn btn-primary']) }}</td>
                            <td>
                                <form method="POST" action="{{ route('referees.destroy', $referee->id) }}">
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
        <div class="p-2 bd-highlight"><a href="{{ route('referees.create') }}"><p>Yeni bir takım yarat</p></a></div>
        <div class="p-2 bd-highlight">{{ $referees->links() }}</div>
    </div>

@endsection