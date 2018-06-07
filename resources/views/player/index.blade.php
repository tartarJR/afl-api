@extends('layouts.app')

@section('content')

    <h5>Oyuncular</h5>

    @include('layouts.success-message')

    <div class="row">
        <div class="col-lg-12">
            @if (count($players) === 0)
                <div class="alert alert-info">
                    <strong>Upps!</strong> Aranılan kriterlerde bir oyuncu bulunamadı.
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Ad</th>
                        <th scope="col">Yaş</th>
                        <th scope="col">Uyruk</th>
                        <th scope="col">Doğum Yeri</th>
                        <th scope="col">Boy</th>
                        <th scope="col">Kilo</th>
                        <th scope="col">Forma Numarası</th>
                        <th scope="col">Tecrübe</th>
                        <th scope="col">Birincil Pozisyon</th>
                        <th scope="col">İkincil Pozisyon</th>
                        <th scope="col">Takım</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td>{{ $player->full_name }}</td>
                            <td>{{ $player->age }}</td>
                            <td>{{ $player->nationality }}</td>
                            <td>{{ $player->hometown }}</td>
                            <td>{{ $player->height_with_unit }}</td>
                            <td>{{ $player->weight_with_unit }}</td>
                            <td>{{ $player->jersey_number }}</td>
                            <td>{{ $player->experience }}</td>
                            <td>{{ $player->primaryPosition->name }}</td>
                            <td>
                                @if (isset($player->secondaryPosition))
                                    {{ $player->secondaryPosition->name }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $player->team->name }}</td>
                            <td>{{ link_to_route('players.edit', 'Güncelle', $player->id, ['class' => 'btn btn-primary']) }}</td>
                            <td>
                                <form method="POST" action="{{ route('players.destroy', $player->id) }}">
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
        <div class="p-2 bd-highlight"><a href="{{ route('coaches.create') }}"><p>Yeni bir oyuncu yarat</p></a></div>
        <div class="p-2 bd-highlight">{{ $players->links() }}</div>
    </div>

@endsection
